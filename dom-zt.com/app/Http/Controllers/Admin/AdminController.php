<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Files;
use App\Models\Location;
use App\Models\LocationCity;
use App\Models\LocationCityRayon;
use App\Models\LocationRayon;
use App\Models\LocationRegion;
use App\Models\Note;
use App\Models\Obekts;
use App\Models\TypeWall;
use App\Users;
use App\Models\User;
use App\Models\Rieltors;
use App\Models\Owner;
use http\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use function PHPUnit\Framework\isEmpty;

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
        $user = new User();

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

        }else{
            $imageName = 'avatar.png';
        }

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

    public function searchClients(Request $request)
    {
        $searchQuery = $request->input('owner-search');

        if ($searchQuery != "") {
            $clients= Owner::where('name', 'LIKE', '%' . $searchQuery . '%')->orWhere('phone', 'LIKE', '%' . $searchQuery . '%')->paginate(10)->setPath('');
            $pagination = $clients->appends(array(
                'searchQuery' => $request->input('owner-search')
            ));

            if (count($clients) > 0){
                $count = count($clients);
                return view('admin.clients', compact('clients', 'count', 'searchQuery'));
            }else{
                return back()->with('error', 'Нічого не знайдено!');
            }

        }else{
            return back()->with('error', 'Нічого не знайдено!');
        }

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
//        $newOwner->address = $request->input('address');

        if ($newOwner->save()) {
            return back()->with("success", "Власника додано успішно.");
        }else{
            return back()->with("error", "Власника не додано.");
        }
    }

    public function deleteClients($id, Request $request)
    {
        if($request->confirm){

            $owner = Owner::find($id);

            if ($owner->delete()) {
                return redirect('/manage/admin/clients/')->with("success", "Власника видалено успішно.");;
            } else {
                return back()->with("error", "Виникла помилка видалення.");
            }
        }else{
            return back()->with("failed", "Ви не підтвердили видалення.");
        }
    }

    public function deleteConformClients($id)
    {
        $owner = Owner::find($id);
        $obekts = Obekts::where('owner_id', '=', $owner->id)->get();
        $category = Category::all();
        $rayon = LocationRayon::all();
        $city = LocationCity::all();
        $city_rayon = LocationCityRayon::all();
        $data = [$category, $rayon, $city, $city_rayon];

        return view('admin.owner.confirm-alert', compact('owner', 'obekts', 'data'));
    }

    public function editClients($id)
    {
        $owner = Owner::find($id);

        return view('admin.owner.edit', compact('owner'));
    }

    public function updatedClients($id, Request $request)
    {
        $owner = Owner::find($id);

        $owner->name = $request->name;
        $owner->phone = $request->phone;

        if($owner->save()){
            return redirect('/manage/admin/clients/')->with('success', 'Дані оновлено.');
        }else{
            return back()->with('error', 'Дані не оновлено.');
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
        $appointment = Appointment::where('type', '=', $category)->get();
        $locationCityRayon = LocationCityRayon::all();
        $locationRayon = LocationRayon::all();
        $locationCity = LocationCity::all();
        $typeWall = TypeWall::all();
        $rieltors = User::all();

        return view('admin.obekt', compact('obekts', 'rieltors','typeWall', 'locationRayon', 'locationCity', 'locationCityRayon', 'category', 'filesImages', 'owners', 'appointment'));
    }

    public function filterObektByCategoryView(Request $request, $category){

        $category = Category::where('slug', '=', $category)->first();
        $category = [$category->slug, $category->name, $category->id];

        $filesImages = Files::all();
        $owners = Owner::all();
        $appointment = Appointment::where('type', '=', $category)->get();
        $locationCityRayon = LocationCityRayon::all();
        $locationRayon = LocationRayon::all();
        $locationCity = LocationCity::all();
        $typeWall = TypeWall::all();
        $rieltors = User::all();

        $query = Obekts::where('category_id','=',$category[2]);

        $filterData = [];

        if(
            $request->appointment_id or
            $request->price_from or
            $request->price_to or
            $request->square or
            $request->rayon_id or
            $request->rayon_city_id or
            $request->city_id or
            $request->typeOpalenya or
            $request->typeWall or
            $request->count_room or
            $request->count_level
        ){
            if($request->appointment_id){
                $query->where('appointment_id','=', $request->appointment_id);
                $filterData[0] = $request->appointment_id;
            }

            if($request->price_from) {
                $query->where('price', '>=', $request->price_from);
                $filterData[1] = $request->price_from;
            }

            if($request->price_to){
                $query->where('price','<=', $request->price_to);
                $filterData[11] = $request->price_to;
            }

            if($request->square){
                $query->where('square','=', $request->square);
                $filterData[2] = $request->square;
            }

            if( $request->rayon_id){
                $query->where('location_rayon_id','=', $request->rayon_id);
                $filterData[3] = $request->rayon_id;
            }

            if($request->rayon_city_id) {
                $query->where('location_city_rayon_id','=', $request->rayon_city_id);
                $filterData[4] = $request->rayon_city_id;
            }

            if($request->city_id){
                $query->where('location_city_id','=', $request->city_id);
                $filterData[5] = $request->city_id;
            }

            if( $category[0] == 'flat' or
                $category[0] == 'house'or
                $category[0] == 'commercial-real-estate'
            ) {
                if($request->typeOpalenya){
                    $query->where('opalenyaName','=', $request->typeOpalenya);
                    $filterData[6] = $request->typeOpalenya;
                }

                if($request->typeWall){
                    $query->where('type_wall_id', '=', $request->typeWall);
                    $filterData[7] = $request->typeWall;
                }
            }

            if($category[0] == 'flat' or $category[0] == 'house'){
                if($request->count_room){
                    $count_room = $request->count_room;
                    $query->where('count_room','=', $count_room);
                    $filterData[8] = $count_room;
                }

                if($request->count_level){
                    $count_level = $request->count_level;
                    $query->where('count_level','=', $count_level);
                    $filterData[9] = $count_level;
                }
            }

            $obekts = $query->orderBy('id', 'DESC')->paginate(10);

            return view('admin.obekt', compact('obekts', 'rieltors','typeWall', 'filterData', 'locationRayon', 'locationCity', 'locationCityRayon', 'category', 'filesImages', 'owners', 'appointment'));

        }else{
            return back()->with('error', 'Для фільтрування введіть значення!');
        }

    }

    public function viewAllObekt()
    {
        $obekts = Obekts::orderBy('id', 'DESC')->paginate(10);

        $appointment = Appointment::all();
        $owners = Owner::all();
        $filesImages = Files::all();
        $category = Category::all();
        $location = [LocationRayon::all(), LocationCity::all(), LocationCityRayon::all()];

        return view('admin.all-obekt', compact('obekts', 'location','owners', 'appointment', 'category', 'filesImages'));
    }

    public function searchObekt(Request $request)
    {
        $rayon = LocationRayon::all();
        $city = LocationCity::all();
        $cityRayon = LocationCityRayon::all();
        $location = [$rayon, $city, $cityRayon];
        $appointment = Appointment::all();
        $owners = Owner::all();
        $filesImages = Files::all();
        $category = Category::all();

        $q = $request->input('q');
        if ($q != "") {

            if(is_numeric($q) and strlen($q) >= 5 and strlen($q) <= 12)
            {
                $owner = Owner::where('phone',  'LIKE', '%' . $q . '%')->first()->id;
                $obekts = Obekts::where('owner_id', '=', $owner)->paginate(10);
            }else{
                $obekts = Obekts::where('name', 'LIKE', '%' . $q . '%')->orWhere('id', 'LIKE', '%' . $q . '%')->paginate(10)->setPath('');
            }

            if (count($obekts) > 0) {
                return view('admin.all-obekt', compact('obekts', 'q', 'owners', 'category', 'location', 'appointment', 'filesImages'));
            }else{
                return back()->with('error', 'Нічого не знайдено!');
            }
        }else{
            return redirect('/manage/admin/obekts/search/');
        }

    }

    public function newObekt($categorySlug)
    {
        $categoryData = Category::where('slug', '=', $categorySlug)->first();
        $rieltors = Rieltors::where('is_admin', '=', 0)->get();
        $owners = Owner::all();
        $typeBuild = Appointment::where('type', '=', $categorySlug)->get();
        $rayon = LocationRayon::all();
        $city = LocationCity::all();
        $cityRayon = LocationCityRayon::all();
        $location = [$rayon, $city, $cityRayon];
        $typeWall = TypeWall::all();

        return view('admin.obekt-new', compact('categoryData', 'typeWall', 'rieltors', 'owners', 'typeBuild', 'location'));
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
        $newObekt->type_wall_id = $request->type_wall_id;

        $newObekt->isPublic = 1; // 1 - public 0 - hidden
        $newObekt->appointment_id = $request->appointment_id;
        $newObekt->rieltor_id = $request->rieltor_id;

        $newObekt->note = $request->note;
        $newObekt->address = $request->address;

        $slug = $this->transliterate($request->name);
        $newObekt->slug = $slug;

        $newObekt->isPay = 0; // 1 - sold 0 - sale

        if ($category_slug == 'flat') {

            if ($request->level > $request->count_level) {
                return back()->with("error", "Кількість поверхів не може бути менше за поверх.");
            }

            $newObekt->count_room = $request->count_room;
            $newObekt->count_level = $request->count_level;
            $newObekt->level = $request->level;
        }
        if ($category_slug == 'house') {
            $newObekt->count_room = $request->count_room;
            $newObekt->count_level = $request->count_level;
            $newObekt->level = 0;
            $newObekt->square_hause_land = $request->square_hause_land;
        }

        if ($category_slug == 'commercial-real-estate' or $category_slug == 'land') {
            $newObekt->count_room = 0;
            $newObekt->count_level = 0;
            $newObekt->level = 0;
        }

        if ($category_slug == 'land') {
            $newObekt->opalenyaName = 'none';
        } else {
            if($request->opalenyaName == 'no-select'){
                $newObekt->opalenyaName = null;
            }else{
                $newObekt->opalenyaName = $request->opalenyaName;
            }
        }


        // location
        $newObekt->location_rayon_id = $request->location_rayon_id;
        $newObekt->location_city_id = $request->location_city_id;
        $newObekt->location_city_rayon_id = $request->location_city_rayon_id;

        // check if new owner
        if ($request->isNewOwner == true) {
            $newOwner = new Owner();
            $newOwner->name = $request->name_owner;
            $newOwner->phone = $request->phone_owner;
            $newOwner->address = $request->address_owner;
            $newOwner->save();
            // get last added owner id
            $lastID_Owner = Owner::latest()->first();
            $newObekt->owner_id = $lastID_Owner->id;
        } else {
            if($request->owner_id){
                $newObekt->owner_id = $request->owner_id;
            }else{
                return back()->with("error", "Оберіть власника або додайте його.");
            }

        }

        // Image save
        $path = 'files/images/obekts/' . $category_slug . '/' . $slug;
        // save image main
        if ($request->hasFile('imgMain')) {
            // check validate
            $request->validate([
                'imgMain' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            ]);
            // generate new file name
            $imageMainName = time() . '.' . $request->imgMain->extension();
            // create folder for image
            if (!File::exists(public_path() . $path)) {
                File::makeDirectory(public_path() . $path, 0777, true, true);
            }
            // move to folder image
            $request->imgMain->move(public_path($path), $imageMainName);
            // save new name image to database
            $newObekt->main_img = '/' . $path . '/' . $imageMainName;
        } else {
            $newObekt->main_img = '/files/images/default/obekt.jpeg';
        }

        if ($newObekt->save()) {

            // get obekts id after insert
            $getObektsID = Obekts::latest()->first();

            // save all image main
            if ($request->hasFile('images')) {
                $request->validate([
                    'images' => 'array',
                    'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:100000',
                ]);

                foreach ($request->file('images') as $key => $item_img) {
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
        $nameObekt = $obekt->name;
        $msg = "Об'єкт " . $nameObekt . " видалено успішно.";
        // Owner delete  - not delete

        // Files delete
        $category = Category::where('id', '=', $obekt->category_id)->first();
        $path = 'files/images/obekts/' . $category->slug . '/' . $obekt->slug;
        if (File::exists(public_path() . $path)) {
            File::deleteDirectory(public_path($path));
        }

        // Files delete
        $files = Files::where('obekt_id', '=', $obekt->id);
        $files->delete();

        // Obekt delete
        $obekt->delete();

        return back()->with("success", $msg);
    }

    public function editObekt(Obekts $obekt)
    {
        if ($obekt) {

            $obekt1 = Obekts::find($obekt->id);
            $appointment = $obekt1->appointment_id;
            $owner = $obekt1->owner_id;
            $rieltor = $obekt1->rieltor_id;

            $rayonCurrent = LocationRayon::where('id', $obekt1->location_rayon_id)->first();
            $cityCurrent = LocationCity::where('id', $obekt1->location_city_id)->first();
            $cityRayonCurrnet = LocationCityRayon::where('id', $obekt1->location_city_rayon_id)->first();

            $wall = TypeWall::where('id', $obekt1->type_wall_id)->first();
            $category = Category::find($obekt1->category_id);
            $categorySlug = $category->slug;

            $setCurrentSelected = [$appointment, $owner, $rieltor, $rayonCurrent, $cityCurrent, $cityRayonCurrnet, $wall];

            $rieltors = Rieltors::where('is_admin', '=', 0)->get();

            $owners = Owner::all();
            $typeBuild = Appointment::all();
            $filesImages = Files::all();
            $rayon = LocationRayon::all();
            $city = LocationCity::all();
            $cityRayon = LocationCityRayon::all();
            $typeWall = TypeWall::all();

            $location = [$rayon, $city, $cityRayon];


            return view('admin.obekt-edit', compact('obekt', 'categorySlug', 'typeWall', 'filesImages', 'typeBuild', 'owners', 'rieltors', 'location', 'setCurrentSelected'));
        } else {
            return back()->with('error', 'Не знайдено для редагуання');
        }
    }

    public function updateObekt(Request $request, $id)
    {

        $updateObekt = Obekts::find($id);

        if($updateObekt->name != $request->name){
            $updateObekt->name = $request->name;
        }

        // create check for all field on change value
        $updateObekt->description = $request->description;
        $updateObekt->price = $request->price;
        $updateObekt->square = $request->square;
        $updateObekt->appointment_id = $request->appointment_id;
        $updateObekt->owner_id = $request->owner_id;
        $updateObekt->rieltor_id = $request->rieltor_id;
        $updateObekt->opalenyaName = $request->opalenyaName;
        $updateObekt->type_wall_id = $request->type_wall_id;
        $updateObekt->count_room = $request->count_room;
        $updateObekt->count_level = $request->count_level;
        $updateObekt->level = $request->level;
        $updateObekt->note = $request->note;
        $updateObekt->address = $request->address;
        $updateObekt->square_hause_land = $request->square_hause_land;

        if ($request->location_rayon_id == 51) {
            $updateObekt->location_rayon_id = $request->location_rayon_id;
            if ($request->location_city_rayon_id == '') {
                return back()->with('error', 'Оберіть район міста');
            }else{
                $updateObekt->location_city_rayon_id = $request->location_city_rayon_id;
                $updateObekt->location_city_id = null;
            }
        }else if($request->location_rayon_id == 75){
            $updateObekt->location_rayon_id = $request->location_rayon_id;
            if ($request->location_city_id == '') {
                return back()->with('error', 'Оберіть селище');
            }else{
                $updateObekt->location_city_id = $request->location_city_id;
                $updateObekt->location_city_rayon_id = null;
            }
        }else{
            $updateObekt->location_rayon_id = $request->location_rayon_id;
            $updateObekt->location_city_rayon_id = null;
            $updateObekt->location_city_id = null;
        }

        $category_slug = Category::find($updateObekt->category_id);
        $category_slug_name = $category_slug->slug;
        $path = 'files/images/obekts/' . $category_slug_name . '/' . $updateObekt->slug;

        if($updateObekt->main_img == '/files/images/default/obekt.jpeg'){

            // If main image is default then create folder for upload image

            if ($request->hasFile('imgMain')) {
                // check validate
                $request->validate([
                    'imgMain' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
                ]);
                // generate new file name
                $imageMainName = time() . '.' . $request->imgMain->extension();
                // create folder for image
                if (!File::exists(public_path() . $path)) {
                    File::makeDirectory(public_path() . $path, 0777, true, true);
                }
                // move to folder image
                $request->imgMain->move(public_path($path), $imageMainName);
                // save new name image to database
                $updateObekt->main_img = '/' . $path . '/' . $imageMainName;
            }
        }else{
            if ($request->hasFile('imgMain')) {
                $currentImage = $updateObekt->main_img;
                File::delete(public_path($path), $currentImage);
                $request->validate([
                    'imgMain' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
                ]);
                $newImage = time() . '.' . $request->imgMain->extension();
                $request->imgMain->move(public_path($path), $newImage);
                $updateObekt->main_img = '/' . $path . '/' . $newImage;
            }
        }

        // Obekt update
        if ($updateObekt->save()) {

            return back()->with('success', 'Дані оновлено.');

        } else {
            return back()->with('error', 'Помилка оновлення даних!');
        }
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

    // END - OBEKT //


    // START - BLOG //

    public function getBlog()
    {
        $blog = Blog::orderBy('id', 'desc')->paginate(10);
        $countBlogItem = Blog::count();

        return view('admin.blog', compact('blog', 'countBlogItem'));
    }

    public function deleteBlog($id)
    {
        $blog = Blog::find($id);

        $image = $blog->picture;
        $path = public_path('files/images/blog');

        if($image != 'blog.jpeg'){
            unlink($path . '/' . $image);
        }

        if ($blog->delete()) {

            return back()->with("success", "Пост видалено успішно.");
        }else{
            return back()->with("error", "Пост не видалено.");
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
        $blog->slug = $this->transliterate($request->input('title'));

        if(strlen($request->input('text')) >= 200){

            $blog->text = $request->input('text');

        }else{
            return back()->with("error", "Текст посту має бути мінімум 200 символів.");
        }

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
        } else {
            //default image
            $blog->picture = 'blog.jpeg';
        }

        // save data
        if ($blog->save()) {
            return redirect('/manage/admin/blog')->with("success", "Пост додано успішно.");
        }else{
             return back()->with("error", "Сталась помилка, перевірте введені дані.");
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
        $address = $request->input('address');

        if ($address) {
            Config::set('adminsettings.social.youtube', $address);
            return back()->with("success", "Налаштування збережено");
        }else{
            return back()->with("failed", "Помилка збереження!");
        }

    }

    //
    // END - SETTINGS
    //

    //
    // START - PRINT
    //

    public function getPrintData($category)
    {

        $category = Category::where('slug', '=', $category)->first();
        $category = [$category->slug, $category->name, $category->id];
        $obekts = Obekts::where('category_id', '=', $category[2])->orderBy('id', 'DESC')->paginate(10);
        $filesImages = Files::all();
        $owners = Owner::all();
        $appointment = Appointment::where('type', '=', $category)->get();
        $locationRayon = LocationRayon::all();
        $locationCity = LocationCity::all();
        $locationCityRayon = LocationCityRayon::all();
        $rieltor = Users::all();

        return view('admin.print',
            compact('obekts','rieltor', 'category','filesImages','owners',
                'appointment', 'locationRayon', 'locationCity', 'locationCityRayon'
            ));
    }

    //
    // END - PRINT
    //

    //
    // START - Check obket
    //

    public function checkObekt(){

        return view('admin.obekt.check-obekt');
    }

    public function isObekt(Request $request){

        // information data
        $category = Category::all();
        $appointment = Appointment::all();

        if($request->phone_check){

            if(strlen($request->phone_check) == 10){

                $owner = Owner::where('phone', '=', $request->phone_check)->first();

                if(!isset($owner)){
                    $flag = true;
                    $dataInfo = [0, 'Не знайдено', $request->phone_check];
                    return view('admin.obekt.check-result', compact('flag', 'category', 'appointment' , 'dataInfo'));
                }else{

                    $flag = false;
                    $ownerID = $owner->id;

                    if(Cookie::get('owner-id-for-new-obket-form-check-result')){
                        Cookie::queue(Cookie::forget('owner-id-for-new-obket-form-check-result'));
                    }else{
                        Cookie::queue(Cookie::make('owner-id-for-new-obket-form-check-result', $ownerID, 1));
                    }

                    $obektByPhone = Obekts::where('owner_id', '=', $ownerID)->get();
                    $countObekt = $obektByPhone->count();
                    $dataInfo = [$countObekt, $owner->name, $owner->phone];
                    $locationCityRayon = LocationCityRayon::all();
                    $locationRayon = LocationRayon::all();
                    $locationCity = LocationCity::all();

                    return view('admin.obekt.check-result', compact('flag', 'locationCityRayon', 'locationCity', 'locationRayon', 'obektByPhone', 'dataInfo', 'category', 'appointment'));
                }

            }else{
                return back()->with('error', 'Довжина номера має бути 10 цифр, ви ввели менше. Виправте будь ласка!');
            }


        }else{
            return back()->with('error', 'Введіть номер.');
        }
    }

    //
    // END - Check obekt
    //

}

