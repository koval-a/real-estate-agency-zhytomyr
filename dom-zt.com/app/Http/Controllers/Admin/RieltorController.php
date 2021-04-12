<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;

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
