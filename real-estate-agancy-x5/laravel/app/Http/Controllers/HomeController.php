<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function data()
    {
        $owner = Owner::all();

        return view('welcome', compact('owner'));
    }

    public function delete($id)
    {
        $owner = Owner::fiind($id);
        $owner->delete();
        return back();
    }
}
