<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Note;
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
        return view('rieltor.index');
    }

    public function note()
    {
        $getUserID = Auth::user()->id;
        $notes = Note::where('user_id', '=', $getUserID)->get();

        return view('rieltor.note', compact('notes'));
    }

    public function note_insert(Request $request)
    {
        // Post Method Insert New Note
    }

    public function note_delete($id)
    {
        $note = Note::find($id);

        if($note->delete()){
            return view('rieltor.note');
        }else{
            //alert error
        }

    }

    public function addNote(Request $request)
    {
        // New Note
    }

    public function deleteNote($id)
    {
        // Remove Note
    }

    public function getEstateByRieltor($id)
    {
        // Get Estate bu Rieltor ID
    }

}
