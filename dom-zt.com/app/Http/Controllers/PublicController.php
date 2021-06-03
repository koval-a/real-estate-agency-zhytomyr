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
use Jorenvh\Share\ShareFacade;

class PublicController extends Controller
{
    public function obekt($slug)
    {
        $obekt = Obekts::where('slug', '=', $slug)->first();
        $lastAddedObekts = Obekts::limit(2)->get();
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

        return view('pages.obekt', compact('obekt', 'rieltor', 'category', 'dataLocation', 'lastAddedObekts', 'locationData', 'locationRayon', 'shareButtonLink', 'filesImages'));
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

        return view('pages.all-obekts', compact('obekts', 'category', 'location', 'locationRayon', 'locationCity','locationCityRayon', 'appointments'));

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

        // filters parameters basic
        $rayon_id = $request->rayon_id;
        $locCity = $request->city;
        $priceMin = $request->minPrice;
        $priceMax = $request->maxPrice;
        $square = $request->square;
        $typeAppointment = $request->appointment_id;

        // filters parameters from flat, house, commercial real estate
        $countRoom = $request->countRoom;
        $countLevel = $request->countLevel;
        $level = $request->level;
        $typeOpalenya = $request->typeOpalenya;

        $obekts = Obekts::where('isPublic','=',1)
            ->where('category_id','=', $categoryID)
//            ->orWhere('count_room','=', $countRoom)
            ->where('rayon_name','=', $rayon_id)
            ->where('appointment_id','=', $typeAppointment)
            ->where('opalenyaName','=',$typeOpalenya)
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('pages.all-obekts', compact('obekts', 'category', 'location', 'locationRayon', 'locationCity','locationCityRayon', 'appointments'));
    }
}
