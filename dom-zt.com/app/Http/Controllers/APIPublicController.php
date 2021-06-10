<?php

namespace App\Http\Controllers;

use App\Models\Obekts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Jorenvh\Share\ShareFacade;

class APIPublicController extends Controller
{
    public function index()
    {
        $obekts = Obekts::all();

        return response()->json($obekts);
    }
}
