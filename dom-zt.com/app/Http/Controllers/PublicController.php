<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        return view('pages.obekt', compact('obekt', 'rieltor', 'category', 'dataLocation', 'lastAddedObekts', 'locationData', 'locationRayon'));
    }

    public function about()
    {
        $rieltors = User::where('is_admin', '=', 0)->orderBy('id', 'desc')->get();

        return view('pages.about', compact('rieltors'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function blogList()
    {
        $blog = Blog::all();

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

        $obekts = Obekts::where('isPublic', '=', 1)->where('category_id', '=', $category->id)->get();
        $location = Location::all();
        $locationRayon = LocationRayon::all();
        $locationCity = LocationCity::all();
        $locationCityRayon = LocationCityRayon::all();


        return view('pages.all-obekts', compact('obekts', 'category', 'location', 'locationRayon', 'locationCity','locationCityRayon'));

    }


}
