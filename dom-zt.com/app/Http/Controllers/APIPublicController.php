<?php

namespace App\Http\Controllers;

use App\Models\Obekts;
use App\Http\Resources\ObektResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Jorenvh\Share\ShareFacade;

class APIPublicController extends Controller
{
    public function index()
    {
        $obekts = Obekts::paginate(10);

        return ObektResource::collection($obekts);
    }

    public function show($id)
    {
        $obekt = Obekts::findOrFail($id);

        return ObektResource::collection($obekt);
    }
}
