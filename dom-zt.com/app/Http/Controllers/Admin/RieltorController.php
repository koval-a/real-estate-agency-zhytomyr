<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Note;
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
        // 1 - land
        // 2 - house
        // 3 - flat
        // 4 - commerce estate
        $countLand = Obekts::where('category_id', 1)->count();
        $countHouse = Obekts::where('category_id', 2)->count();
        $countFlat = Obekts::where('category_id', 3)->count();
        $countCommerceEstate = Obekts::where('category_id', 4)->count();

        return view('rieltor.index', compact('countCommerceEstate', 'countFlat', 'countHouse', 'countLand'));
    }

    public function getNote()
    {
        $getUserID = Auth::user()->id;
        $notes = Note::where('user_id', '=', $getUserID)->get();
//        $obekts = Obekts::where('rieltor_id', '=', $getUserID)->get();
//        $notes = $obekts->note;

        $countNotes = count($notes);

        return view('rieltor.note', compact('notes', 'countNotes'));
    }

    public function deleteNote($id)
    {
        $note = Note::find($id);

        if($note->delete()){
            //alert ok
            Session::flash('message_alert_success', 'Нотатка видалена успішно.');
            return redirect("/manage/rieltor/my-note");
        }else{
            //alert error
            Session::flash('message_alert_error', 'Пимилка видалення!');
//            return view('rieltor.note');
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
//            Session::flash('message_alert_success', 'Нотатка додано успішно.');
            return redirect("/manage/rieltor/my-note");
        }
    }

}
