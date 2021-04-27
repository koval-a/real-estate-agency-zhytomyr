<?php

namespace App\Http\Controllers\Admin;

use App\Models\Obekts;
use App\Users;
use App\Models\User;
use App\Models\Rieltors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends AC
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
    public function indexAdmin()
    {
        $countLand = Obekts::where('category_id', 1)->count();
        $countHouse = Obekts::where('category_id', 2)->count();
        $countFlat = Obekts::where('category_id', 3)->count();
        $countCommerceEstate = Obekts::where('category_id', 4)->count();

        return view('adminHome', compact('countCommerceEstate', 'countFlat', 'countHouse', 'countLand'));
    }

    public function indexRieltor()
    {
        return view('admin.rieltor.index');
    }

    // START - RIELTORS //

    public function getRieltors()
    {
        $dataRieltors = User::where('is_admin', 0)->get();

        return view('admin.rieltor.index', compact("dataRieltors"));
    }

    public function insertRieltor(Request $request)
    {
        // new
    }

    public function deleteRieltor($id)
    {
        // remove
        $data = User::find($id);
        $data->delete();
        return redirect('/home');
    }

    public function editRieltor(Request $request, $id)
    {
        // edit
    }

    public function viewRieltor($id)
    {
        // show detail page about rieltor

    }

    // END - RIELTORS //

    public function viewObekt($category)
    {
        // 1 - land
        // 2 - house
        // 3 - flat
        // 4 - commerce estate

        switch ($category)
        {
            case 'land':
            {
                $categoryName = 'Земельні ділянки';
                $obekts = Obekts::where('category_id', '=', 1)->get();
                return view('rieltor.obekt', compact('obekts', 'categoryName'));
            }
            case 'house' :
            {
                $categoryName = 'Будинки';
                $obekts = Obekts::where('category_id', '=', 2)->get();
                return view('rieltor.obekt', compact('obekts', 'categoryName'));
            }
            case 'flat' :
            {
                $categoryName = 'Квартири';
                $obekts = Obekts::where('category_id', '=', 3)->get();
                return view('rieltor.obekt', compact('obekts', 'categoryName'));
            }
            case 'commercial-real-estate' :
            {
                $categoryName = 'Комерційна нерухомість';
                $obekts = Obekts::where('category_id', '=', 4)->get();
                return view('rieltor.obekt', compact('obekts', 'categoryName'));
            }
        }

    }

    public function settings()
    {
        return view('admin.settings');
    }
}

