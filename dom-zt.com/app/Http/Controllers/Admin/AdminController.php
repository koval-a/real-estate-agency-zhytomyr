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

        $image = $data->avatar;
        $path = public_path('files/images/users');

        if(file_exists($path.$image))
        {
            unlink($path.$image);

            if($data->delete()){

                return back()->with("success", "Ріелтора видалено успішно.");
            }
        }

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
            return redirect('/manage/admin/clients');
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

        return view('admin.all-obekt', compact('obekts', 'location', 'locationRayon', 'appointment'));
    }

    public function searchObekt(Request $request)
    {
        $locationRayon = LocationCityRayon::all();
        $location = Location::all();
        $appointment = Appointment::all();

        $q = $request->input('q');
        if($q != ""){
            $obekts = Obekts::where('name', 'LIKE', '%' . $q . '%' )->orWhere('id', 'LIKE', '%' . $q . '%' )->paginate(5)->setPath('');
            $pagination = $obekts->appends ( array (
                'q' => $request->input('q')
            ) );
            if (count ( $obekts ) > 0)
                return view ( 'admin.all-obekt', compact('obekts', 'location', 'locationRayon', 'appointment'));
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

    public static function transliterate ($string){
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
            $kyr = explode(',',$kyr); // кирилические строки разобьем в массив с разделителем запятая.
            // в строке $str мы пытаемся отыскать символы кирилицы $kyr и все найденные совпадения заменяем на ключи $leter
            $str = str_replace($kyr, $leter, $str);
        }

        // теперь необходимо учесть правильность формирования URL
        // поиск и замена по регулярному выражению.
        // перв. выраж. указываем рег выражение. втор.выраж. строка или массив строк для замены
        //   //  регуляр выражение  ()+  может повторяться 1 и более раз.,   \s пробельный символ сразу же заменяется на '-'
        // | Логическое или. либо то условие либо что указано справа от |  притом справа укажем диапазон [A-Za-z0-9-]
        //  ^ Логическое отрицание. т.е. заменяем либо пробельный символ на тире, либо любой другой символ, что не входит в указанный диапазон.
        $str = preg_replace('/(\s|[^A-Za-z0-9-])+/', '-', $str);
        $str = trim($str,'-'); // если в конце появится тире, то его удаляем.

        return $str;
    }

    public function insertObekt(Request $request, $category)
    {
        // must be return to category page obekts
        $string = '';
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
        return back()->with("success", "успішно.");
    }

    public function isPublic($id)
    {
        $obekt = Obekts::find($id);
        $obekt->isPublic = 1;
        $obekt->save();

        return back();
    }

    public function notPublic($id)
    {
        $obekt = Obekts::find($id);
        $obekt->isPublic = 0;
        $obekt->save();

        return back();
    }

    // END - OBEKT //

    // START - NOTE //

    public function note()
    {
        $getUserID = Auth::user()->id;
        $notes = Note::where('user_id', '=', $getUserID)->orderBy('id', 'desc')->paginate(10);

        $countNotes = count($notes);

        $obekts = Obekts::where('rieltor_id', '=', $getUserID)->get();

        return view('admin.note', compact('notes', 'countNotes', 'obekts'));
    }

    // END - NOTE //

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
            unlink($path.$image);

            if($blog->delete()){

//                return redirect('/manage/admin/blog');
                return back()->with("success", "Пост видалено успішно.");
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

