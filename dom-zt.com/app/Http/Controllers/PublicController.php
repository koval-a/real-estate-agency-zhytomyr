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
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function obekt($slug)
    {
        $obekt = Obekts::where('slug', '=', $slug)->first();

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

        return view('pages.obekt', compact('obekt', 'rieltor', 'category', 'dataLocation'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function blog($slug)
    {
        $blog = Blog::where('slug', '=', $slug)->get();

        return view('pages.blog', compact('blog'));
    }

    public function category($category)
    {
        $obekts = Obekts::where('isPublic', '=', 1)->where('category_id', '=', 1)->get();

        return view('admin.all-obekt', compact('obekts'));

    }


}
