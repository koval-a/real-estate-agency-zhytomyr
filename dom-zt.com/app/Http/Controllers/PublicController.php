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
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Jorenvh\Share\ShareFacade;
use function PHPUnit\Framework\isEmpty;

class PublicController extends Controller
{
    public function obekt($slug)
    {
        $obekt = Obekts::where('slug', '=', $slug)->first();
        $lastAddedObekts = Obekts::orderBy('id', 'desc')->take(8)->get();

        $locationCityRayon = LocationCityRayon::where('id', $obekt->location_city_rayon_id)->first();
        $locationCity = LocationCity::where('id', $obekt->location_city_id)->first();
        $locationRayon = LocationRayon::where('id', $obekt->location_rayon_id)->first();

        $rayon = $locationRayon->rayon??'';
        $city = $locationCity->city??'';
        $cityRayon = $locationCityRayon->rayon_city??'';

        $locationFull = [$rayon, $city, $cityRayon];

        $category = Category::where('id', '=', $obekt->category_id)->first();
        $rieltor = Rieltors::where('id', '=', $obekt->rieltor_id)->first();
        $typeWall = TypeWall::where('id', $obekt->type_wall_id)->pluck('name');

        // https://packagist.org/packages/jorenvanhocht/laravel-share
        // Share::currentPage()->facebook();

        $linkFacebook = ShareFacade::currentPage()->facebook()->getRawLinks();
        $linkTwitter = ShareFacade::currentPage()->twitter()->getRawLinks();
        $linkTelegram = ShareFacade::currentPage()->telegram()->getRawLinks();
        $linkWhatsapp = ShareFacade::currentPage()->whatsapp()->getRawLinks();
        $currentURL = URL::current();

        $shareButtonLink = [$linkFacebook, $linkTwitter, $linkTelegram, $linkWhatsapp, $currentURL];

        $filesImages = Files::all();
        $appointment = Appointment::find($obekt->appointment_id);

        return view('pages.obekt', compact('obekt', 'typeWall', 'rieltor', 'category', 'lastAddedObekts',  'shareButtonLink', 'filesImages', 'appointment', 'locationFull'));
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

    public function category($categorySlug)
    {
        $category = Category::where('slug', '=', $categorySlug)->first();

        $obekts = Obekts::where('isPublic', '=', 1)->where('category_id', '=', $category->id)->orderBy('created_at', 'DESC')->paginate(10);
        $appointments = Appointment::where('type', '=', $categorySlug)->get();
        $locationRayon = LocationRayon::all();
        $locationCity = LocationCity::all();
        $locationCityRayon = LocationCityRayon::all();

        $max = Obekts::max('price');
        $min = Obekts::min('price');
        $price = [$max, $min];

        $typeWall = TypeWall::all();

        return view('pages.all-obekts', compact('price', 'typeWall', 'obekts', 'category', 'locationRayon', 'locationCity','locationCityRayon', 'appointments'));

    }

    public function filterForm(Request $request)
    {
        $categorySlug = $request->slug;
        $categoryID = $request->id;

        $category = Category::where('slug', '=', $categorySlug)->first();
        $appointments = Appointment::where('type', '=', $categorySlug)->get();
        $typeWall = TypeWall::all();
        $locationRayon = LocationRayon::all();
        $locationCity = LocationCity::all();
        $locationCityRayon = LocationCityRayon::all();

        $query = Obekts::where('isPublic','=',1)->where('category_id','=',$categoryID);

        $filterData = [];
        $minutes = 1;

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
                $query->whereNotIn('location_rayon_id', array($request->unselect_rayon_city));
                $filterData[15] = $request->unselect_rayon_city;
                Cookie::queue(Cookie::make('unselect_rayon_city', $request->unselect_rayon_city, $minutes));
            }

            // ID
            if($request->obekt_id){
                $filterData[8] = $request->obekt_id;
                $query->where('id','=', $request->obekt_id);
                Cookie::queue(Cookie::make('obekt_id', $request->obekt_id, $minutes));
            }
            // Appointment
            if($request->appointment_id){
                $query->where('appointment_id','=', $request->appointment_id);
                $filterData[0] = $request->appointment_id;
                Cookie::queue(Cookie::make('typeAppointment', $request->appointment_id, $minutes));
            }
            // Location
            if($request->rayon_id)
            {
                $filterData[1] = $request->rayon_id;
                Cookie::queue(Cookie::make('rayon_name', $request->rayon_id, $minutes));

                if($request->rayon_id == 51) // 51 - Житомир
                {
                    if($request->rayon_city)
                    {
                        // Райони м.Житомир
                        $filterData[2] = $request->rayon_city;
                        Cookie::queue(Cookie::make('rayon_city', $request->rayon_city, $minutes));
                        $query
                            ->where('location_rayon_id', '=', $request->rayon_id)
                            ->where('location_city_rayon_id', '=', $request->rayon_city);
                    }else{
                        return back()->with('error', 'Оберіть район місто.');
                    }

                }else if($request->rayon_id == 75){ // 75 - Житомирський район

                    if($request->city_name){
                        // Селища р-н Житомирьский
                        $filterData[3] = $request->city_name;
                        Cookie::queue(Cookie::make('city_name', $request->city_name, $minutes));
                        $query
                            ->where('location_rayon_id', '=', $request->rayon_id)
                            ->where('location_city_id', '=', $request->city_name);
                    }else{
                        return back()->with('error', 'Оберіть селище.');
                    }

                }else{
                    $query->where('location_rayon_id', '=', $request->rayon_id);
                }
            }

            // Price
            if($request->rangePrimary or $request->rangePrimary2){

                if($request->rangePrimary == '' and $request->rangePrimary2 != ''){
                    $min_price = 1;//Obekts::min('price');
                    $max_price = $request->rangePrimary2;
                    $filterData[4] = $min_price;
                    $filterData[5] = $max_price;
                    Cookie::queue(Cookie::make('min_price', $min_price, $minutes));
                    Cookie::queue(Cookie::make('max_price', $max_price, $minutes));
                    $query->whereBetween('price', [$min_price, $max_price]);
                }

                if($request->rangePrimary2 == '' and $request->rangePrimary != ''){
                    $min_price = $request->rangePrimary;
                    $max_price = Obekts::max('price');
                    $filterData[4] = $min_price;
                    $filterData[5] = $max_price;
                    Cookie::queue(Cookie::make('min_price', $min_price, $minutes));
                    Cookie::queue(Cookie::make('max_price', $max_price, $minutes));
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
                Cookie::queue(Cookie::make('square', $square, $minutes));
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
                $query->where('opalenyaName','=', $request->typeOpalenya);
                $filterData[9] = $request->typeOpalenya;
                Cookie::queue(Cookie::make('typeOpalenya', $request->typeOpalenya, $minutes));
            }

            if($request->typeWall){
                $query->where('type_wall_id', '=', $request->typeWall);
                $filterData[7] = $request->typeWall;
                Cookie::queue(Cookie::make('typeWallName', $request->typeWall, $minutes));
            }
        }

        if($categorySlug == 'house' or $categorySlug == 'flat') {

            if($request->count_room){
                $query->where('count_room','>=', $request->count_room);
                $filterData[10] = $request->count_room;
                Cookie::queue(Cookie::make('count_room', $request->count_room, $minutes));
            }

            if($request->count_level){
                $query->where('count_level','>=', $request->count_leve);
                $filterData[11] = $request->count_leve;
                Cookie::queue(Cookie::make('count_level', $request->count_leve, $minutes));
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

        return view('pages.all-obekts', compact('obekts',  'typeWall','filterData', 'category', 'locationRayon', 'locationCity','locationCityRayon', 'appointments', 'price'));
    }

    public function filterFormClear($categorySlug){

        $nameCookie = [
            'obekt_id',
            'unselect_rayon_city',
            'typeAppointment',
            'rayon_name',
            'rayon_city',
            'city_name',
            'min_price',
            'max_price',
            'square',
            'typeOpalenya',
            'typeWallName',
            'count_room',
            'count_level'
            ];

        foreach($nameCookie as $name)
        {
            //delete cookie
            Cookie::queue(Cookie::forget($name));
        }

        return redirect('/obekts/'.$categorySlug);
    }

    public function filterByAjax(Request $request){

        // todo
        $categorySlug = $request->slug;
        $categoryID = $request->id;

        $category = Category::where('slug', '=', $categorySlug)->first();
        $appointments = Appointment::where('type', '=', $categorySlug)->get();
        $typeWall = TypeWall::all();
        $locationRayon = LocationRayon::all();
        $locationCity = LocationCity::all();
        $locationCityRayon = LocationCityRayon::all();

        if($request->location_rayon){
            $obekts = Obekts::where('isPublic','=',1)
                ->where('category_id','=',$categoryID)
                ->where('location_rayon_id', '=', $request->location_rayon)
                ->orderBy('id', 'DESC')
                ->paginate(10);
        }else{
            $obekts = Obekts::where('isPublic','=',1)
                ->where('category_id','=',$categoryID)
                ->orderBy('id', 'DESC')
                ->paginate(10);
        }

        return view('pages.obekts.list', compact('obekts',  'typeWall', 'category', 'locationRayon', 'locationCity','locationCityRayon', 'appointments'));
    }
}
