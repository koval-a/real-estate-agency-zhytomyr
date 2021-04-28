<?php

namespace App\Http\Controllers;

use App\Models\Obekts;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function obekt($slug)
    {
        $obekt = Obekts::where('slug', '=', $slug)->get();

        return view('pages.obekt', compact('obekt'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function blog()
    {
        return view('');
    }
}
