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
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Jorenvh\Share\ShareFacade;

class PublicController extends Controller
{
    public function obekt($slug)
    {
        $obekt = Obekts::where('slug', '=', $slug)->first();
        $lastAddedObekts = Obekts::where('slug', '=', $slug)->limit(2)->get();
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

        return view('pages.obekt', compact('obekt', 'rieltor', 'category', 'dataLocation', 'lastAddedObekts', 'locationData', 'locationRayon', 'shareButtonLink', 'filesImages', 'appointment'));
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
        $location = Location::all();
        $locationRayon = LocationRayon::all();
        $locationCity = LocationCity::all();
        $locationCityRayon = LocationCityRayon::all();

        $max = Obekts::max('price');
        $min = Obekts::min('price');
        $price = [$max, $min];

        return view('pages.all-obekts', compact('price', 'obekts', 'category', 'location', 'locationRayon', 'locationCity','locationCityRayon', 'appointments'));

    }

    public function filterForm(Request $request)
    {
        $categorySlug = $request->slug;
        $categoryID = $request->id;

        $category = Category::where('slug', '=', $categorySlug)->first();
        $appointments = Appointment::where('type', '=', $categorySlug)->get();

        $location = Location::all();
        $locationRayon = LocationRayon::all();
        $locationCity = LocationCity::all();
        $locationCityRayon = LocationCityRayon::all();

        $query = Obekts::where('isPublic','=',1)->where('category_id','=',$categoryID);

        // Basic parameters filters

        // Appointment
        if($request->appointment_id){
            $typeAppointment = $request->appointment_id;
            $query->where('appointment_id','=', $typeAppointment);
        }
        // Location
        if($request->rayon_id)
        {
            $rayon_name = $request->rayon_id; // Райони + м.Житомир

            if($rayon_name == 'м.Житомир') // 51 - Житомир
            {
                if($request->rayon_city)
                {
                    $rayon_city = $request->rayon_city; // Райони м.Житомир
                    $query
                        ->where('rayon_name', '=', $rayon_name)
                        ->where('city_name', '=', $rayon_city);
                }

            }else if($rayon_name == 'Житомирський'){ // 75 - Житомирський район

                $city_name = $request->city_name; // Селища р-н Житомирьский
                $query
                    ->where('rayon_name', '=', $rayon_name)
                    ->where('city_name', '=', $city_name);

            }else{
                $query->where('rayon_name', '=', $rayon_name);
            }
        }

        // Price
        if($request->rangePrimary and $request->rangePrimary2){

            if($request->rangePrimary < $request->rangePrimary2)
            {
                $min_price = $request->rangePrimary;
                $max_price = $request->rangePrimary2;
                $query->whereBetween('price', [$min_price, $max_price]);

            }else{
                return back()->with('error', 'Початкова ціна має бути меншою за кінцеву!');
            }
        }

        // Square
        if($request->square){
            $square = $request->square;
            $query->where('square', '=', $square);
        }


        // Custom parameters filter by category

        if( $categorySlug == 'flat' or
            $categorySlug == 'house'or
            $categorySlug == 'commercial-real-estate'
        ) {
            if($request->typeOpalenya){
                $typeOpalenya = $request->typeOpalenya;
                $query->where('opalenyaName','=', $typeOpalenya);
            }
        }

        if($categorySlug == 'house' or $categorySlug == 'flat') {

            if($request->count_room){

                $count_room = $request->count_room;

                if($count_room >= 4){
                    $query->where('count_room','>=', $count_room);
                }else{
                    $query->where('count_room','=', $count_room);
                }
            }

            if($request->count_level){

                $count_level = $request->count_level;

                if($count_level >=5)
                {
                    $query->where('count_level','>=', $count_level);
                }else{
                    $query->where('count_level','=', $count_level);
                }
            }

        }

        if($categorySlug == 'flat') {

            if($request->level)
            {
                $level = $request->level;

                if($level >=5)
                {
                    $query->where('level','>=', $level);
                }else{
                    $query->where('level','=', $level);
                }

            }
        }

        $max = Obekts::max('price');
        $min = Obekts::min('price');
        $price = [$max, $min];

        $obekts = $query->paginate(10);

        return view('pages.all-obekts', compact('obekts', 'category', 'location', 'locationRayon', 'locationCity','locationCityRayon', 'appointments', 'price'));
    }
}
