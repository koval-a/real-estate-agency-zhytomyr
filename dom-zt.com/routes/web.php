<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RieltorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Home page
Route::get('/', function () {
    $category = \App\Models\Category::all();
    return view('welcome', compact('category'));
});

// Pages
Route::get('/contact',[PublicController::class, 'contact'])->name('contact');
Route::get('/about-us', [PublicController::class, 'about'])->name('about');

Route::get('/blog', [PublicController::class, 'blogList'])->name('blog.list');
Route::get('/blog/{slug}', [PublicController::class, 'blog'])->name('blog.view');
Route::get('/obekt/{slug}/', [PublicController::class, 'obekt'])->name('obekt.view');
Route::get('/obekts/{category}', [PublicController::class, 'category'])->name('category.view');

// Filter
Route::get('/filter', [PublicController::class, 'filterForm'])->name('filter.data');
Route::get('/filter/clear', [PublicController::class, 'filterFormClear'])->name('filter.clear');

Auth::routes();

// Auth access to Dashboard Rieltor
Route::group(['prefix'=>'manage/rieltor', 'namespace' => 'Admin'], function(){

    Route::get('/dashboard', [RieltorController::class, 'index'])->name('home');

    Route::any('/my-real-estate/{category}/serach', [RieltorController::class, 'search'])->name('rieltor.search');
    Route::get('/my-real-estate/{category}/print/', [RieltorController::class, 'printPage'])->name('rieltor.print');

    Route::get('/pay/{id}', [RieltorController::class, 'isPay'])->name('rieltor.isPay');

    Route::group(['prefix'=>'/note', 'namespace' => 'Admin'], function(){
        Route::get('/', [RieltorController::class, 'getNote'])->name('rieltor.mynote');
        Route::post('/insert', [RieltorController::class, 'insertNote'])->name('rieltor.note.insert');
        Route::get('/delete/{id}', [RieltorController::class, 'deleteNote'])->name('rieltor.note.delete');
    });
//    Route::get('/my-note', [RieltorController::class, 'getNote'])->name('rieltor.mynote');
//    Route::post('/my-note/insert', [RieltorController::class, 'insertNote'])->name('rieltor.note.insert');
//    Route::get('/my-note/delete/{$id}', [RieltorController::class, 'deleteNote'])->name('rieltor.note.delete');

    Route::get('/my-real-estate/{category}', [RieltorController::class, 'viewObekt'])->name('rieltor.view');
});

// Auth access to Dashboard Admin
Route::group(['prefix'=>'manage/admin', 'namespace' => 'Admin'], function(){

    Route::get('/dashboard', [AdminController::class, 'indexAdmin'])->name('admin.home')->middleware('is_admin');

    Route::group(['prefix'=>'/clients', 'namespace' => 'Admin'], function(){

        Route::get('/', [AdminController::class, 'getClients'])->name('admin.clients')->middleware('is_admin');
        Route::post('/insert', [AdminController::class, 'insertClients'])->name('admin.clients.insert')->middleware('is_admin');
        Route::get('/edit/{id}', [AdminController::class, 'editClients'])->name('admin.clients.edit')->middleware('is_admin');
        Route::post('/updated/{id}', [AdminController::class, 'updatedClients'])->name('admin.clients.updated')->middleware('is_admin');
        Route::get('/delete/confirm/{id}', [AdminController::class, 'deleteConformClients'])->name('admin.clients.delete.confirm')->middleware('is_admin');
        Route::post('/deleted/{id}', [AdminController::class, 'deleteClients'])->name('admin.clients.delete')->middleware('is_admin');
    });

    Route::group(['prefix'=>'/rieltors', 'namespace' => 'Admin'], function(){

        Route::get('/', [AdminController::class, 'getRieltors'])->name('admin.rieltors')->middleware('is_admin');
        Route::post('/rieltors/insert', [AdminController::class, 'insertRieltor'])->name('admin.rieltor.insert')->middleware('is_admin');
        Route::get('/rieltors/delete/{id}', [AdminController::class, 'deleteRieltor'])->name('admin.rieltor.delete')->middleware('is_admin');
    });

    Route::group(['prefix'=>'/obekts', 'namespace' => 'Admin'], function(){

        Route::get('/', [AdminController::class, 'viewAllObekt'])->name('admin.allView')->middleware('is_admin');
        Route::any('/serach', [AdminController::class, 'searchObekt'])->name('admin.search')->middleware('is_admin');
        Route::get('/{category}/filter', [AdminController::class, 'filterObektByCategoryView'])->name('admin.filter')->middleware('is_admin');

        Route::get('/print/{category}', [AdminController::class, 'getPrintData'])->name('admin.print')->middleware('is_admin');

        Route::get('/{category}', [AdminController::class, 'viewObekt'])->name('admin.view')->middleware('is_admin');

        Route::get('/{slug}/check/', [AdminController::class, 'checkObekt'])->name('admin.obekt.check')->middleware('is_admin');
        Route::post('/check/result', [AdminController::class, 'isObekt'])->name('admin.obekt.is.obekt')->middleware('is_admin');

        Route::get('/{slug}/new', [AdminController::class, 'newObekt'])->name('admin.obekt.new')->middleware('is_admin');
        Route::post('/{slug}/insert', [AdminController::class, 'insertObekt'])->name('admin.obekt.insert')->middleware('is_admin');
        Route::get('/delete/{obekt}', [AdminController::class, 'deteleObekt'])->name('admin.obekt.delete')->middleware('is_admin');
        Route::get('/edit/{obekt}', [AdminController::class, 'editObekt'])->name('admin.obekt.edit')->middleware('is_admin');
        Route::post('/edit/updated/{id}', [AdminController::class, 'updateObekt'])->name('admin.obekt.updated')->middleware('is_admin');

        Route::get('/public/{id}', [AdminController::class, 'isPublic'])->name('admin.isPublic')->middleware('is_admin');
    });

    Route::group(['prefix'=>'/blog', 'namespace' => 'Admin'], function(){

        Route::get('/', [AdminController::class, 'getBlog'])->name('admin.blog')->middleware('is_admin');
        Route::get('/delete/{id}', [AdminController::class, 'deleteBlog'])->name('admin.blog.delete')->middleware('is_admin');
        Route::get('/new-post/', [AdminController::class, 'newBlog'])->name('admin.blog.new')->middleware('is_admin');
        Route::post('/insert/', [AdminController::class, 'insertBlog'])->name('admin.blog.insert')->middleware('is_admin');

    });

    Route::get('/settings/info', [AdminController::class, 'settings'])->name('admin.settings')->middleware('is_admin');
    Route::post('/settings/save', [AdminController::class, 'settingsSave'])->name('admin.settings.save')->middleware('is_admin');

});
//Dependent dropdown list in order form
//Route::get('order/get/{id}', 'OrderlistController@getMaster');
Route::get('csrf-ajax', function()
{
    if (Session::token() != Request::header('x-csrf-token'))
    {
        throw new Illuminate\Session\TokenMismatchException;
    }
});

Route::get('/clear/cache', function() {

    Artisan::call('cache:clear');

    dd("Clear Cache - Done");

});
Route::get('/clear/config', function() {

    Artisan::call('config:clear');
    dd("Clear Cache Config - Done");

});
Route::get('/clear/view', function() {

    Artisan::call('view:clear');
    dd("Clear Cache View - Done");

});
Route::get('/clear/route', function() {

    Artisan::call('route:clear');
    dd("Clear Cache Route - Done");

});
Route::get('/clear', function() {

    Artisan::call('cache:clear');  Artisan::call('config:clear');  Artisan::call('view:clear'); Artisan::call('route:clear');
    dd("Clear Cache All - Done");

});
