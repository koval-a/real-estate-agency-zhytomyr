<?php
namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Files;
use App\Models\Location;
use App\Models\LocationCity;
use App\Models\LocationCityRayon;
use App\Models\LocationRayon;
use App\Models\Owner;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Note;
//use App\Note;
use App\Models\Obekts;
//use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class RieltorController extends AC
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $authID = Auth::user()->id;
        // 1 - land
        // 2 - house
        // 3 - flat
        // 4 - commerce estate
        $countLand = Obekts::where('rieltor_id', $authID)->where('category_id', 3)->count();
        $countHouse = Obekts::where('rieltor_id', $authID)->where('category_id', 2)->count();
        $countFlat = Obekts::where('rieltor_id', $authID)->where('category_id', 1)->count();
        $countCommerceEstate = Obekts::where('rieltor_id', $authID)->where('category_id', 4)->count();

        return view('rieltor.index', compact('countCommerceEstate', 'countFlat', 'countHouse', 'countLand'));
    }

    public function getNote()
    {
        $getUserID = Auth::user()->id;
        $notes = Note::where('user_id', '=', $getUserID)->orderBy('id', 'desc')->paginate(10);

        $countNotes = count($notes);

        $obekts = Obekts::where('rieltor_id', '=', $getUserID)->get();

        return view('rieltor.note', compact('notes', 'countNotes', 'obekts'));
    }

    public function deleteNote($id)
    {
        $note = Note::find($id);

        if($note->delete()){
            return back();
        }else{
            dd('Ont delete');
        }
    }

    public function insertNote(Request $request)
    {
        // New Note
        $note = new Note();
        $note->note_text = $request->input('note_text');
        $note->obekt_id = $request->input('obekt_id');
        $note->user_id = Auth::user()->id;
        $note->date_publish = date('Y-m-d');

        if($note->save()){
            return back();
        }
    }

    public function showObekt($slug)
    {
        $obekt = Obekts::where('slug', '=', $slug)->first();

        return view('pages.obekt', compact('obekt'));
    }

    public function viewObekt($category)
    {
        $getUserID = Auth::user()->id;
        // 1 - land
        // 2 - house
        // 3 - flat
        // 4 - commerce estate
        $owners = Owner::all();
        $location = [LocationRayon::all(), LocationCity::all(), LocationCityRayon::all()];

        switch ($category)
        {
            case 'land':
            {
                $categoryName = 'Земельні ділянки';
                $obekts = Obekts::where('rieltor_id', '=', $getUserID)->where('category_id', '=', 3)->paginate(10);
                return view('rieltor.obekt', compact('obekts', 'location', 'categoryName', 'category', 'owners'));
            }
            case 'house' :
            {
                $categoryName = 'Будинки';
                $obekts = Obekts::where('rieltor_id', '=', $getUserID)->where('category_id', '=', 2)->paginate(10);
                return view('rieltor.obekt', compact('obekts', 'location', 'categoryName', 'category', 'owners'));
            }
            case 'flat' :
            {
                $categoryName = 'Квартири';
                $obekts = Obekts::where('rieltor_id', '=', $getUserID)->where('category_id', '=', 1)->paginate(10);
                return view('rieltor.obekt', compact('obekts', 'location', 'categoryName', 'category', 'owners'));
            }
            case 'commercial-real-estate' :
            {
                $categoryName = 'Комерційна нерухомість';
                $obekts = Obekts::where('rieltor_id', '=', $getUserID)->where('category_id', '=', 4)->paginate(10);
                return view('rieltor.obekt', compact('obekts', 'location', 'categoryName', 'category', 'owners'));
            }
        }

    }

    public function isPay($id)
    {
        $obekt = Obekts::find($id);

        if($obekt->isPay == 1)
        {
            $obekt->isPay = 0;
        }else{
            $obekt->isPay = 1;
        }

        $obekt->save();

        return back();
    }

    public function printPage($category)
    {
        $category = Category::where('slug', '=', $category)->first();
        $category = [$category->slug, $category->name, $category->id];
        $obekts = Obekts::where('category_id', '=', $category[2])->where('rieltor_id', '=', Auth::user()->id)->orderBy('id', 'DESC')->paginate(10);
        $filesImages = Files::all();
        $owners = Owner::all();
        $appointment = Appointment::where('type', '=', $category)->get();

        return view('admin.print', compact('obekts', 'category', 'filesImages', 'owners', 'appointment'));

    }

    public function search(Request $request, $category)
    {
        $locationRayon = LocationCityRayon::all();
        $location = Location::all();
        $appointment = Appointment::all();
        $owners = Owner::all();
        $filesImages = Files::all();

        $q = $request->input('q');
        if ($q != "") {
            $obekts = Obekts::where('name', 'LIKE', '%' . $q . '%')->orWhere('id', 'LIKE', '%' . $q . '%')->paginate(10)->setPath('');
            $pagination = $obekts->appends(array(
                'q' => $request->input('q')
            ));
            if (count($obekts) > 0)
                return view('rieltor.obekt', compact('obekts','category', 'owners', 'location', 'locationRayon', 'appointment', 'filesImages'));
        }

        return back()->with('error', 'Нічого не знайдено!');
    }

}
