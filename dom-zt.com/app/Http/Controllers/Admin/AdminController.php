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
        // 3 - land
        // 2 - house
        // 1 - flat
        // 4 - commerce estate

        switch ($category)
        {
            case 'land':
            {
                $categoryName = 'Земельні ділянки';
                $obekts = Obekts::where('category_id', '=', 3)->get();
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
                $obekts = Obekts::where('category_id', '=', 1)->get();
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

    // START - BLOG //

    public function getBlog()
    {
        $blog = Blog::orderBy('id', 'desc')->get();//paginate(2);
        $countBlogItem = Blog::count();

        return view('admin.blog', compact('blog', 'countBlogItem'));
    }

    public function deleteBlog($id)
    {
        $blog = Blog::find($id);

        $image = $blog->picture;
        $path = public_path('files/images/blog');

        if(file_exists($path.$image))
        {
            if($blog->delete()){
                unlink($path.$image);

                return redirect('/manage/admin/blog');
            }
        }

    }

    public function newBlog()
    {
        return view('admin.blog-new');
    }

    public function insertBlog(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->slug = $request->input('slug');
        $blog->text = $request->input('text');

        $blog->author_id = 1;// Адміністратор
        $blog->category_id = 2;//Статті

        // Image save on server
        if ($request->hasFile('imgInp')) {
            // check validate
            $request->validate([
                'imgInp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ]);
            // generate new file name
            $imageName = time().'.'.$request->imgInp->extension();
            // move to folder image
            $request->imgInp->move(public_path('files/images/blog'), $imageName);
            // save new name image to database
            $blog->picture = $imageName;
        }

        // save data
        if($blog->save()){
            return redirect('/manage/admin/blog');
        }
    }

    // END - BLOG //

    public function settings()
    {
        return view('admin.settings');
    }
}

