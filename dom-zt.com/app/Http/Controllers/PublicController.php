<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Files;
use App\Models\Location;
use App\Models\LocationCity;
use App\Models\LocationCityRayon;
use App\Models\LocationRayon;
use App\Models\LocationRegion;
use App\Models\Obekts;
use App\Models\Blog;
use App\Models\Rieltors;
use App\Models\TypeWall;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Jorenvh\Share\ShareFacade;
use function PHPUnit\Framework\isEmpty;

class PublicController extends Controller
{
    public function obekt($slug, Array $filterData = [])
    {
        $obekt = Obekts::where('slug', '=', $slug)->first();
        $lastAddedObekts = Obekts::where('slug', '=', $slug)->limit(4)->get();
        $locationData = Location::all();
        $locationRayon = LocationCityRayon::all();

        $category = Category::where('id', '=', $obekt->category_id)->first();
        $rieltor = Rieltors::where('id', '=', $obekt->rieltor_id)->first();
        $location = Location::where('id', '=', $obekt->location_id)->first();

        $region = LocationRegion::where('id', '=', $location->region_id)->first();
        $rayon = LocationRayon::where('id', '=', $location->rayon_id)->first();
        $city = LocationCity::where('id', '=', $location->city_id)->first();
        $cityRayon = LocationCityRayon::where('id', '=', $location->city_rayon_id)->first();

        $locationRegion = $region->region?$region->region: '-';
        $locatonRayon = $rayon->rayon?$rayon->rayon: '-';
        $locationCity = $city->city?$city->city: '-';
        $locationCityRayon = $cityRayon->rayon_city?$cityRayon->rayon_city: '-';
        $locationStreet = $location->street?$location->street: '-';
        $locationNote = $location->note?$location->note: '-';

        $dataLocation = [$locationRegion, $locatonRayon, $locationCity, $locationCityRayon, $locationStreet, $locationNote];

        // https://packagist.org/packages/jorenvanhocht/laravel-share
        // Share::currentPage()->facebook();

        $linkFacebook = ShareFacade::currentPage()->facebook()->getRawLinks();
        $linkTwitter = ShareFacade::currentPage()->twitter()->getRawLinks();
        $linkTelegram = ShareFacade::currentPage()->telegram()->getRawLinks();
        $linkWhatsapp = ShareFacade::currentPage()->whatsapp()->getRawLinks();

        $shareButtonLink = [$linkFacebook, $linkTwitter, $linkTelegram, $linkWhatsapp];

        $filesImages = Files::all();
        $appointment = Appointment::find($obekt->appointment_id);

        return view('pages.obekt', compact('obekt', 'filterData', 'rieltor', 'category', 'dataLocation', 'lastAddedObekts', 'locationData', 'locationRayon', 'shareButtonLink', 'filesImages', 'appointment'));
    }

    public function about()
    {
        $rieltors = User::where('is_admin', '=', 0)->orderBy('id', 'desc')->get();

        return view('pages.about', compact('rieltors'));
    }

    public function contact()
    {
        $rieltors = Rieltors::where('is_admin', 0)->get();

        return view('pages.contact', compact('rieltors'));
    }

    public function blogList()
    {
        $blog = Blog::orderBy('id', 'desc')->paginate(10);//->get();

        return view('pages.blog-list', compact('blog'));
    }

    public function blog($slug)
    {
        $blog = Blog::where('slug', '=', $slug)->first();

        return view('pages.blog', compact('blog'));
    }

    public function category($categorySlug, Array $filterData = [])
    {
        $category = Category::where('slug', '=', $categorySlug)->first();

        $obekts = Obekts::where('isPublic', '=', 1)->where('category_id', '=', $category->id)->orderBy('created_at', 'DESC')->paginate(10);
        $appointments = Appointment::where('type', '=', $categorySlug)->get();
        $location = Location::all();
        $locationRayon = LocationRayon::all();
        $locationCity = LocationCity::all();
        $locationCityRayon = LocationCityRayon::all();

        $max = Obekts::max('price');
        $min = Obekts::min('price');
        $price = [$max, $min];

        $typeWall = TypeWall::all();

        return view('pages.all-obekts', compact('price', 'filterData', 'typeWall', 'obekts', 'category', 'location', 'locationRayon', 'locationCity','locationCityRayon', 'appointments'));

    }

    public function filterForm(Request $request, $filterData = [])
    {
        $categorySlug = $request->slug;
        $categoryID = $request->id;

        $category = Category::where('slug', '=', $categorySlug)->first();
        $appointments = Appointment::where('type', '=', $categorySlug)->get();
        $typeWall = TypeWall::all();
        $location = Location::all();
        $locationRayon = LocationRayon::all();
        $locationCity = LocationCity::all();
        $locationCityRayon = LocationCityRayon::all();

        $query = Obekts::where('isPublic','=',1)->where('category_id','=',$categoryID);

        $filterData = [];

        // Basic parameters filters
        if(
            $request->appointment_id or
            $request->rayon_id or
            $request->rangePrimary or
            $request->rangePrimary2 or
            $request->square or
            $request->obekt_id or
            $request->unselect_rayon_city
        ){
            // UnSelect
            if($request->unselect_rayon_city){
                $unselect_rayon_city = $request->unselect_rayon_city;
                $query->whereNotIn('city_name', array($unselect_rayon_city));
                $filterData[15] = $unselect_rayon_city;
            }

            // ID
            if($request->obekt_id){
                $obekt_id = $request->obekt_id;
                $filterData[8] = $obekt_id;
                $query->where('id','=', $obekt_id);
            }
            // Appointment
            if($request->appointment_id){
                $typeAppointment = $request->appointment_id;
                $query->where('appointment_id','=', $typeAppointment);
                $filterData[0] = $typeAppointment;
            }
            // Location
            if($request->rayon_id)
            {
                $rayon_name = $request->rayon_id; // Райони + м.Житомир
                $filterData[1] = $rayon_name;

                if($rayon_name == 'м.Житомир') // 51 - Житомир
                {
                    if($request->rayon_city)
                    {
                        $rayon_city = $request->rayon_city; // Райони м.Житомир
                        $filterData[2] = $rayon_city;
                        $query
                            ->where('rayon_name', '=', $rayon_name)
                            ->where('city_name', '=', $rayon_city);
                    }

                }else if($rayon_name == 'Житомирський'){ // 75 - Житомирський район

                    $city_name = $request->city_name; // Селища р-н Житомирьский
                    $filterData[3] = $city_name;
                    $query
                        ->where('rayon_name', '=', $rayon_name)
                        ->where('city_name', '=', $city_name);

                }else{
                    $query->where('rayon_name', '=', $rayon_name);
                }
            }

            // Price
            if($request->rangePrimary or $request->rangePrimary2){

                if($request->rangePrimary == '' and $request->rangePrimary2 != ''){
                    $min_price = 1;//Obekts::min('price');
                    $max_price = $request->rangePrimary2;
                    $filterData[4] = $min_price;
                    $filterData[5] = $max_price;
                    $query->whereBetween('price', [$min_price, $max_price]);
                }

                if($request->rangePrimary2 == '' and $request->rangePrimary != ''){
                    $min_price = $request->rangePrimary;
                    $max_price = Obekts::max('price');
                    $filterData[4] = $min_price;
                    $filterData[5] = $max_price;
                    $query->whereBetween('price', [$min_price, $max_price]);
                }

//                if($request->rangePrimary < $request->rangePrimary2)
//                {
//                    $min_price = $request->rangePrimary;
//                    $max_price = $request->rangePrimary2;
//                    $filterData[4] = $min_price;
//                    $filterData[5] = $max_price;
//                    $query->whereBetween('price', [$min_price, $max_price]);
//
//                }else{
//                    return back()->with('error', 'Початкова ціна має бути меншою за кінцеву!');
//                }
            }
//            else if($request->rangePrimary == '' and $request->rangePrimary2 != ''){
//                return back()->with('error', 'Введіть початкову ціну!');
//            }else if($request->rangePrimary2 == '' and $request->rangePrimary != '') {
//                return back()->with('error', 'Введіть кінцеву ціну!');
//            }
//            }else {
//                return back()->with('error', 'Введіть ціну!');
//            }

            // Square
            if($request->square){
                $square = $request->square;
                $query->where('square', '=', $square);
                $filterData[6] = $square;
            }

        }
//        else{
//            return back()->with('error', 'Введіть/Оберіть параметр фільтру!');
//        }

        // Custom parameters filter by category

        if( $categorySlug == 'flat' or
            $categorySlug == 'house'or
            $categorySlug == 'commercial-real-estate'
        ) {
            if($request->typeOpalenya){
                $typeOpalenya = $request->typeOpalenya;
                $query->where('opalenyaName','=', $typeOpalenya);
                $filterData[9] = $typeOpalenya;
            }

            if($request->typeWall){
                $typeWallName = $request->typeWall;
                $query->where('typeWall', '=', $typeWallName);
                $filterData[7] = $typeWallName;
            }
        }

        if($categorySlug == 'house' or $categorySlug == 'flat') {

            if($request->count_room){

                $count_room = $request->count_room;
                $query->where('count_room','>=', $count_room);
                $filterData[10] = $count_room;
            }

            if($request->count_level){

                $count_level = $request->count_level;
                $query->where('count_level','>=', $count_level);
                $filterData[11] = $count_level;
            }

        }

        if($categorySlug == 'flat') {

            if($request->level)
            {
                $level = $request->input('level');

                $arrayLevel = array();
                $arrayLevelFirstAndLast = array();
                $moreFiveLevel = '';

                foreach($level as $value)
                {
                    if ($value == 0) {
                        $one = 1;
                        array_push($arrayLevelFirstAndLast, (int)$one);
                    }else if ($value == 6) {
                        $lastLevel = Obekts::max('level');
                        array_push($arrayLevelFirstAndLast, (int)$lastLevel);
                    }else if ($value == 5) {
                        $moreFiveLevel = '5+';
                    }else if(
                        $value == 1 or
                        $value == 2 or
                        $value == 3 or
                        $value == 4
                    ){
                        array_push($arrayLevel, $value);
                    }
                }

                if(!empty($moreFiveLevel)){
                    echo $moreFiveLevel;
                    $query->where('level','>', 5);
                    $filterData[12] = 5;
                }

                if(!empty($arrayLevelFirstAndLast)){
                    var_export($arrayLevelFirstAndLast);
                    $query->whereNotIn('level', $arrayLevelFirstAndLast);

                    $filterData[13] =  implode("|",$arrayLevelFirstAndLast);
                }

                if(!empty($arrayLevel)){
                    var_export($arrayLevel);
                    $query->whereIn('level', $arrayLevel);
                    $filterData[14] = implode("|",$arrayLevel);
                }

            }
        }

        $max = Obekts::max('price');
        $min = Obekts::min('price');
        $price = [$max, $min];

        $obekts = $query->orderBy('id', 'DESC')->paginate(10);

        return view('pages.all-obekts', compact('obekts',  'typeWall','filterData', 'category', 'location', 'locationRayon', 'locationCity','locationCityRayon', 'appointments', 'price'));
    }
}
