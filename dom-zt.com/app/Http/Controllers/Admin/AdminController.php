<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Note;
use App\Models\Obekts;
use App\Users;
use App\Models\User;
use App\Models\Rieltors;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

        if($data->delete()){
            return redirect('/manage/admin/rieltors');
        }

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

    // START - CLEINTS //

    public function getClients()
    {
        $clients = Owner::all();

        return view('admin.clients', compact('clients'));
    }

    public function insertClients(Request $request)
    {
        $newOwner = new Owner();
        $newOwner->name = $request->input('name');
        $newOwner->phone = $request->input('phone');
        $newOwner->address = $request->input('address');

        if($newOwner->save()){
            return redirect('/manage/admin/clients');
        }
    }

    public function deleteClients($id)
    {
        $owner = Owner::find($id);

        if($owner->delete()){
            return redirect('/manage/admin/clients');
        }
    }

    // END - CLEINTS //

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
                return view('admin.obekt', compact('obekts', 'categoryName'));
            }
            case 'house' :
            {
                $categoryName = 'Будинки';
                $obekts = Obekts::where('category_id', '=', 2)->get();
                return view('admin.obekt', compact('obekts', 'categoryName'));
            }
            case 'flat' :
            {
                $categoryName = 'Квартири';
                $obekts = Obekts::where('category_id', '=', 3)->get();
                return view('admin.obekt', compact('obekts', 'categoryName'));
            }
            case 'commercial-real-estate' :
            {
                $categoryName = 'Комерційна нерухомість';
                $obekts = Obekts::where('category_id', '=', 4)->get();
                return view('admin.obekt', compact('obekts', 'categoryName'));
            }
        }

    }

    public function note()
    {
        $getUserID = Auth::user()->id;
        $notes = Note::where('user_id', '=', $getUserID)->orderBy('id', 'desc')->paginate(10);

        $countNotes = count($notes);

        $obekts = Obekts::where('rieltor_id', '=', $getUserID)->get();

        return view('admin.note', compact('notes', 'countNotes', 'obekts'));
    }

    public function getBlog()
    {
        $blog = Blog::all();
        $countBlogItem = Blog::count();

        return view('admin.blog', compact('blog', 'countBlogItem'));
    }

    public function deleteBlog($id)
    {
        $blog = Blog::find($id);

        if($blog->delete()){
            return redirect('/manage/admin/blog');
        }
    }

    public function insertBlog(Request $request)
    {
        $blog = new Blog();

        if($blog->save()){
            return redirect('/manage/admin/blog');
        }
    }

    public function settings()
    {
        return view('admin.settings');
    }
}

