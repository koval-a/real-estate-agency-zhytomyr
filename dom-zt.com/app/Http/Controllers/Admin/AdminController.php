<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Files;
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
use Illuminate\Support\Facades\File;

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
        $dataRieltors = User::where('is_admin', 0)->orderBy('id', 'desc')->paginate(10);
        $count = User::where('is_admin', 0)->count();

        return view('admin.rieltor.index', compact('dataRieltors', 'count'));
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
            $imageName = time() . '.' . $request->imgInp->extension();
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

            if ($user->save()) {
                return back()->with("success", "Ріелтора додано успішно.");
            }

        }

    }

    public function deleteRieltor($id)
    {
        // remove
        $data = User::find($id);
        if ($data->delete()) {

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
        $clients = Owner::orderBy('id', 'desc')->paginate(10);
        $count = Owner::count();

        return view('admin.clients', compact('clients', 'count'));
    }

    public function insertClients(Request $request)
    {
        $newOwner = new Owner();
        $newOwner->name = $request->input('name');
        $newOwner->phone = $request->input('phone');
        $newOwner->address = $request->input('address');

        if ($newOwner->save()) {
            return back()->with("success", "Власника додано успішно.");
        }
    }

    public function deleteClients($id)
    {
        $owner = Owner::find($id);

        if ($owner->delete()) {
            return back()->with("success", "Власника видвлено успішно.");
        } else {
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

        $category = Category::where('slug', '=', $category)->first();
        $category = [$category->slug, $category->name, $category->id];
        $obekts = Obekts::where('category_id', '=', $category[2])->orderBy('id', 'DESC')->paginate(10);
        $filesImages = Files::all();
        $owners = Owner::all();
        $appointment = Appointment::all();

        return view('admin.obekt', compact('obekts', 'category', 'filesImages', 'owners', 'appointment'));
    }

    public function viewAllObekt()
    {
        $obekts = Obekts::orderBy('id', 'DESC')->paginate(10);

        $appointment = Appointment::all();
        $locationRayon = LocationCityRayon::all();
        $location = Location::all();
        $owners = Owner::all();
        $filesImages = Files::all();

        return view('admin.all-obekt', compact('obekts', 'owners', 'location', 'locationRayon', 'appointment', 'filesImages'));
    }

    public function searchObekt(Request $request)
    {
        $locationRayon = LocationCityRayon::all();
        $location = Location::all();
        $appointment = Appointment::all();
        $owners = Owner::all();

        $q = $request->input('q');
        if ($q != "") {
            $obekts = Obekts::where('name', 'LIKE', '%' . $q . '%')->orWhere('id', 'LIKE', '%' . $q . '%')->paginate(10)->setPath('');
            $pagination = $obekts->appends(array(
                'q' => $request->input('q')
            ));
            if (count($obekts) > 0)
                return view('admin.all-obekt', compact('obekts', 'owners', 'location', 'locationRayon', 'appointment'));
        }
//        return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );

//        return view('admin.blog');
    }

    public function newObekt($categorySlug)
    {
        $categoryData = Category::where('slug', '=', $categorySlug)->first();
        $rieltors = Rieltors::all();
        $owners = Owner::all();
        $typeBuild = Appointment::where('type', '=', $categorySlug)->get();
        $rayon = LocationRayon::all();
        $city = LocationCity::all();
        $cityRayon = LocationCityRayon::all();
        $location = [$rayon, $city, $cityRayon];

        return view('admin.obekt-new', compact('categoryData', 'rieltors', 'owners', 'typeBuild', 'location'));
    }

    public function transliterate($string)
    {

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

        foreach ($leter_array as $leter => $kyr) {
            $kyr = explode(',', $kyr);
            $str = str_replace($kyr, $leter, $str);
        }

        $str = preg_replace('/(\s|[^A-Za-z0-9-])+/', '-', $str);
        $str = trim($str, '-');

        return $str;
    }

    public function insertObekt(Request $request, $category_slug)
    {
        // Basic arguments for all type real estate
        $newObekt = new Obekts();
        $newObekt->name = $request->name;
        $newObekt->description = $request->description;
        $newObekt->price = $request->price;

        $id_category = Category::where('slug', '=', $category_slug)->first();
        $newObekt->category_id = $id_category->id;
        $newObekt->square = $request->square;


        $newObekt->isPublic = 1; // 1 - public 0 - hidden
        $newObekt->appointment_id = $request->appointment_id;
        $newObekt->rieltor_id = $request->rieltor_id;

        $slug = $this->transliterate($request->name);
        $newObekt->slug = $slug;

        $newObekt->isPay = 0; // 1 - sold 0 - sale

        if ($category_slug == 'flat') {

            if($request->level > $request->count_level)
            {
                return back()->with("error", "Кількість поверхів не може бути менше за поверх.");
            }
            $newObekt->count_room = $request->couny_room;
            $newObekt->count_level = $request->count_level;
            $newObekt->level = $request->level;
            $newObekt->opalenyaName = $request->opalenyaName;

        }
        if ($category_slug == 'house') {
            $newObekt->count_room = $request->couny_room;
            $newObekt->count_level = $request->count_level;
            $newObekt->level = 0;
            $newObekt->opalenyaName = $request->opalenyaName;
        }

        // location
        $newLocation = new Location();

        $newLocation->region_id = 1; // Житомирська область

        // check city or rayon
        $newLocation->rayon_id = $request->location_rayon_id;
        // 51 - Житомир
        if($request->location_rayon_id == 51)
        {
            // 93 - none для міста якщо район м.Житомир
            $newLocation->city_id = 93;
            $newLocation->city_rayon_id = $request->location_rayon_city_id;
            $rayon_city = LocationCityRayon::where('id', $request->location_rayon_city_id)->first();
            $newObekt->city_name = $rayon_city->rayon_city;
        }else if($request->location_rayon_id == 75){
            // 75 - Житомирський район
            $newLocation->city_id = $request->location_city_id;
            // 34 - -- для района міста якщо обрано Житомирський район
            $newLocation->city_rayon_id = 34;
            $city = LocationCity::where('id', $request->location_city_id)->first();
            $newObekt->city_name = $city->city;
        }else{
            // Якщо обрано з пункта район не м.Житомир або Житомирський район
            $newLocation->city_id = 93;
            $newLocation->city_rayon_id = 34;
            $newObekt->city_name = '-';
        }

        $newLocation->street = $request->address;
        $newLocation->note = $request->note_address;

        $newLocation->save();

        $lastID_Location = Location::latest()->first();
        $newObekt->location_id = $lastID_Location->id;
        $rayon = LocationRayon::where('id', $request->location_rayon_id)->first();
        $newObekt->rayon_name = $rayon->rayon;


        // check if new owner
        if($request->isNewOwner == true)
        {
            $newOwner = new Owner();
            $newOwner->name = $request->name_owner;
            $newOwner->phone = $request->phone_owner;
            $newOwner->address = $request->address_owner;
            $newOwner->save();
            // get last added owner id
            $lastID_Owner = Owner::latest()->first();
            $newObekt->owner_id = $lastID_Owner->id;
        }else{
            $newObekt->owner_id = $request->owner_id;
        }

        // Image save
        $path = 'files/images/obekts/'.$category_slug .'/'. $slug;
        // save image main
        if ($request->hasFile('imgMain')) {
            // check validate
            $request->validate([
                'imgMain' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            ]);
            // generate new file name
            $imageMainName = time() . '.' . $request->imgMain->extension();
            // create folder for image
            if (! File::exists(public_path().$path)) {
                File::makeDirectory(public_path().$path);
            }
            // move to folder image
            $request->imgMain->move(public_path($path), $imageMainName);
            // save new name image to database
            $newObekt->main_img = $imageMainName;
        }

        if ($newObekt->save()) {

            // get obekts id after insert
            $getObektsID = Obekts::latest()->first();

            // save all image main
            if($request->hasFile('images'))
            {
                $request->validate([
                    'images' => 'array',
                    'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:100000',
                ]);

                foreach($request->file('images') as $key => $item_img)
                {
                    $item_img_name = time() . '-' . $item_img->getClientOriginalName();
                    $item_img->move(public_path($path), $item_img_name);

                    $Upload_model = new Files;
                    $Upload_model->url_img = '/' . $path . '/' . $item_img_name;
                    $Upload_model->obekt_id = $getObektsID->id;
                    $Upload_model->save();

                }
            }

            return back()->with("success", "Новий об'єкт додатно успішно.");
        } else {
            return back()->with("error", "Виникла помилка при збережені.");
        }

    }

    public function deteleObekt(Obekts $obekt)
    {
         // Location delete
         $location = Location::find($obekt->location_id);
         $location->delete();

         // Owner delete  - not delete

         // Files delete
        $category = Category::where('id', '=', $obekt->category_id)->first();
        $path = 'files/images/obekts/'. $category->slug .'/'. $obekt->slug;
        if (File::exists(public_path().$path)) {
            File::deleteDirectory(public_path() . $path);
        }

         // Obekt delete
         $obekt->delete();

         return back()->with("success", "Об'єкт видалено успішно.");
    }

//    public function search_(Request $request)
//    {
//        $search = $request->get('search');
//        $orderlists = DB::table('orderlists')->where('name', 'like', '%' . $search . '%')->orWhere('email', 'like', '%' . $search . '%')->paginate(5);
//
//        $cities = DB::table('cities')->get();
//        $masters = DB::table('masters')->get();
//        $poslygus = DB::table('poslygus')->get();
//
//        //return view('orderAll', compact('orderlists'));
//        return view('orderAll', ['orderlists' => $orderlists, 'masters' => $masters, 'poslygus' => $poslygus, 'cities' => $cities]);
//    }

    public function getMaster($id)
    {

        $masters = DB::table("masters")->where("city_id",$id)->pluck('name','id');

        return json_encode($masters);
    }

    public function isPublic($id)
    {
        $obekt = Obekts::find($id);

        if ($obekt->isPublic == 1) {
            $obekt->isPublic = 0;
        } else {
            $obekt->isPublic = 1;
        }

        if ($obekt->save()) {
            return back()->with("success", "Успішно змінено статус.");
        } else {
            return back()->with("error", "Виникла помилка.");
        }
    }

    // END - OBEKT //


    // START - BLOG //

    public function getBlog()
    {
        $blog = Blog::orderBy('id', 'desc')->paginate(2);
        $countBlogItem = Blog::count();

        return view('admin.blog', compact('blog', 'countBlogItem'));
    }

    public function deleteBlog($id)
    {
        $blog = Blog::find($id);

        $image = $blog->picture;
        $path = public_path('files/images/blog/');

        unlink($path . $image);

        if ($blog->delete()) {


            return back()->with("success", "Пост видалено успішно.");
        }

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
                'imgInp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            ]);
            // generate new file name
            $imageName = time() . '.' . $request->imgInp->extension();
            // move to folder image
            $request->imgInp->move(public_path('files/images/blog'), $imageName);
            // save new name image to database
            $blog->picture = $imageName;
        }

        // save data
        if ($blog->save()) {
            return redirect('/manage/admin/blog')->with("success", "Пост додано успішно.");
            // return back()->with("success", "Blog insert successfully.");
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

        if (Config::set('adminsettings.about_text', $about_text)) {
            return back()->with("success", "Налаштування збережено");
        }

        return back()->with("failed", "Помилка!");

    }

    //
    // END - SETTINGS
    //

    //
    // START - PRINT
    //

    public function getPrintData()
    {

    }

    //
    // END - PRINT
    //

}

