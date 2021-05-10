<?php

namespace App\Http\Controllers;

use App\Models\Obekts;
use App\Models\Blog;
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

    public function blog($slug)
    {
        $blog = Blog::where('slug', '=', $slug)->get();

        return view('pages.blog', compact('blog'));
    }
}
