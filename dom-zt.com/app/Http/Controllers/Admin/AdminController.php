<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Location;
use App\Models\LocationCity;
use App\Models\LocationCityRayon;
use App\Models\LocationRayon;
use App\Models\LocationRegion;
use App\Models\Note;
use App\Models\Obekts;
use App\Users;
use App\Models\User;
use App\Models\Rieltors;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;

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
        $countLand = Obekts::where('category_id', 3)->count();
        $countHouse = Obekts::where('category_id', 2)->count();
        $countFlat = Obekts::where('category_id', 1)->count();
        $countCommerceEstate = Obekts::where('category_id', 4)->count();

        return view('adminHome', compact('countCommerceEstate', 'countFlat', 'countHouse', 'countLand'));
    }

    // START - RIELTORS //

    public function getRieltors()
    {
        $dataRieltors = User::where('is_admin', 0)->orderBy('id', 'desc')->get();

        return view('admin.rieltor.index', compact("dataRieltors"));
    }

    public function insertRieltor(Request $request)
    {
        // Image save on server
        if ($request->hasFile('imgInp')) {
            // check validate
            $request->validate([
                'imgInp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ]);
            // generate new file name
            $imageName = time().'.'.$request->imgInp->extension();
            // move to folder image
            $request->imgInp->move(public_path('files/images/users'), $imageName);
            // save new name image to database

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->avatar = $imageName;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->is_admin = 0;

            if($user->save()){
                return back()->with("success", "Ріелтора додано успішно.");
            }

        }

    }

    public function deleteRieltor($id)
    {
        // remove
        $data = User::find($id);
            if($data->delete()){

                return back()->with("success", "Ріелтора видалено успішно.");
            }

        $image = $data->avatar;
        $path = public_path('files/images/users');

        // if(file_exists($path.$image))
        // {
        //     unlink($path.$image);

        //     if($data->delete()){

        //         return back()->with("success", "Ріелтора видалено успішно.");
        //     }
        // }

    }

    // END - RIELTORS //

    // START - CLEINTS //

    public function getClients()
    {
        $clients = Owner::orderBy('id', 'desc')->get();

        return view('admin.clients', compact('clients'));
    }

    public function insertClients(Request $request)
    {
        $newOwner = new Owner();
        $newOwner->name = $request->input('name');
        $newOwner->phone = $request->input('phone');
        $newOwner->address = $request->input('address');

        if($newOwner->save()){
            return back()->with("success", "Власника додано успішно.");
        }
    }

    public function deleteClients($id)
    {
        $owner = Owner::find($id);

        if($owner->delete()){
            return back()->with("success", "Власника видвлено успішно.");
        }else{
            return back()->with("error", "Виникла помилка видалення.");
        }
    }

    // END - CLEINTS //

    // START - OBEKT //

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
                $category = Category::where('id', '=', 3)->first();
                $categoryName = $category->name;
                $categorySlug = $category->slug;
                $category = [$categorySlug, $categoryName];
                $obekts = Obekts::where('category_id', '=', 3)->get();
                return view('admin.obekt', compact('obekts', 'category'));
            }
            case 'house' :
            {
                $category = Category::where('id', '=', 2)->first();
                $categoryName = $category->name;
                $categorySlug = $category->slug;
                $category = [$categorySlug, $categoryName];
                $obekts = Obekts::where('category_id', '=', 2)->get();
                return view('admin.obekt', compact('obekts', 'category'));
            }
            case 'flat' :
            {
                $category = Category::where('id', '=', 1)->first();
                $categoryName = $category->name;
                $categorySlug = $category->slug;
                $category = [$categorySlug, $categoryName];
                $obekts = Obekts::where('category_id', '=', 1)->get();
                return view('admin.obekt', compact('obekts', 'category'));
            }
            case 'commercial-real-estate' :
            {
                $category = Category::where('id', '=', 4)->first();
                $categoryName = $category->name;
                $categorySlug = $category->slug;
                $category = [$categorySlug, $categoryName];
                $obekts = Obekts::where('category_id', '=', 4)->get();
                return view('admin.obekt', compact('obekts', 'category'));
            }
        }

    }

    public function viewAllObekt()
    {
        $obekts = Obekts::orderBy('id', 'DESC')->paginate(4);

        $appointment = Appointment::all();
        $locationRayon = LocationCityRayon::all();
        $location = Location::all();
        $owners = Owner::all();

        return view('admin.all-obekt', compact('obekts', 'owners', 'location', 'locationRayon', 'appointment'));
    }

    public function searchObekt(Request $request)
    {
        $locationRayon = LocationCityRayon::all();
        $location = Location::all();
        $appointment = Appointment::all();
        $owners = Owner::all();

        $q = $request->input('q');
        if($q != ""){
            $obekts = Obekts::where('name', 'LIKE', '%' . $q . '%' )->orWhere('id', 'LIKE', '%' . $q . '%' )->paginate(5)->setPath('');
            $pagination = $obekts->appends ( array (
                'q' => $request->input('q')
            ) );
            if (count ( $obekts ) > 0)
                return view ( 'admin.all-obekt', compact('obekts', 'owners', 'location', 'locationRayon', 'appointment'));
        }
//        return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );

        return view('admin.blog');
    }

    public function newObekt($categorySlug, $categoryName)
    {
        $category = [$categorySlug, $categoryName];
        $rieltors = Rieltors::all();
        $owners = Owner::all();
        $typeBuild = Appointment::where('type', '=', $categorySlug)->get();
        $rayon = LocationRayon::all();
        $city = LocationCity::all();
        $cityRayon = LocationCityRayon::all();
        $location = [$rayon, $city, $cityRayon];

        return view('admin.obekt-new', compact('category', 'rieltors', 'owners', 'typeBuild', 'location'));
    }

    public function transliterate($string){

        $str = mb_strtolower($string, 'UTF-8');

        $leter_array = array(
            'a' => 'а',
            'b' => 'б',
            'v' => 'в',
            'g' => 'г',
            'd' => 'д',
            'e' => 'е,э',
            'jo' => 'ё',
            'zh' => 'ж',
            'z' => 'з',
            'i' => 'и,i',
            'j' => 'й',
            'k' => 'к',
            'l' => 'л',
            'm' => 'м',
            'n' => 'н',
            'o' => 'о',
            'p' => 'п',
            'r' => 'р',
            's' => 'с',
            't' => 'т',
            'u' => 'у',
            'f' => 'ф',
            'kh' => 'х',
            'ts' => 'ц',
            'ch' => 'ч',
            'sh' => 'ш',
            'shch' => 'щ',
            '' => 'ъ',
            'y' => 'ы',
            '' => 'ь',
            'yu' => 'ю',
            'ya' => 'я',
        );

        foreach ($leter_array as $leter => $kyr){
            $kyr = explode(',',$kyr);
            $str = str_replace($kyr, $leter, $str);
        }

        $str = preg_replace('/(\s|[^A-Za-z0-9-])+/', '-', $str);
        $str = trim($str,'-');

        return $str;
    }

    public function insertObekt(Request $request, $category)
    {
        $string = '';
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));

        // Basic arguments for all type real estate
        $newObekt = new Obekts();
        $newObekt->name = $request->name;
        $newObekt->description = $request->description;
        $newObekt->price = $request->price;
        $newObekt->category_id = '';
        $newObekt->square = $request->square;
        $newObekt->location_id = '';
        $newObekt->main_img = '';
        $newObekt->isPublic = 1; // 1 - public 0 - hidden
        $newObekt->appointment_id = $request->appointment_id;
        $newObekt->rieltor_id = $request->rieltor_id;
        $newObekt->slug = transliterate($request->name);
        $newObekt->owner_id =  $request->owner_id;
        $newObekt->isPay = 0; // 1 - sold 0 - sale

        // check form type by category
        switch($category){
            case 'flat': {
                $newObekt->count_room = 0;
                $newObekt->count_level = 0;
                $newObekt->level = 0;
                $newObekt->opalenyaName = $request->opalenyaName;
                break;
            }
            case 'house': {
                $newObekt->count_room = 0;
                $newObekt->count_level = 0;
                $newObekt->level = 0;
                $newObekt->opalenyaName = $request->opalenyaName;
                break;
            }
            case 'land': {
                break;
            }
            case 'commercial-real-estate': {
                break;
            }
        }

        // check if new owner

        // save all image

        if($newObekt->save())
        {
            return back()->with("success", "Новий об'єкт додатно успішно.");
        }else{
            return back()->with("error", "Виникла помилка при збережені.");
        }

    }

    public function isPublic($id)
    {
        $obekt = Obekts::find($id);

        if($obekt->isPublic == 1){
            $obekt->isPublic = 0;
        }else{
            $obekt->isPublic = 1;
        }

        if($obekt->save()){
            return back()->with("success", "Успішно змінено статус.");
        }else{
            return back()->with("error", "Виникла помилка.");
        }
    }

    // END - OBEKT //


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

         if($blog->delete()){

               
                return back()->with("success", "Пост видалено успішно.");
            }

        // $image = $blog->picture;
        // $path = public_path('files/images/blog');

        // if(file_exists($path.$image))
        // {
        //     unlink($path.$image);

        //     // if($blog->delete()){

        //     //    return redirect('/manage/admin/blog');
        //     //     // return back()->with("success", "Пост видалено успішно.");
        //     // }
        // }

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
//            return redirect('/manage/admin/blog');
            return back()->with("success", "Blog insert successfully.");
        }
    }

    //
    // END - BLOG
    //

    //
    // START - SETTINGS
    //

    public function settings()
    {
        return view('admin.settings');
    }

    public function settingsSave(Request $request)
    {
        $about_text = $request->input('about_text');
//        config()->set('adminsettings.about_text', $about_text);

        if(Config::set('adminsettings.about_text', $about_text)){
            return back()->with("success", "Налаштування збережено");
        }

        return back()->with("failed", "Помилка!");

    }

    //
    // END - SETTINGS
    //


}

