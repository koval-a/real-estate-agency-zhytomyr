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
    return view('welcome');
});

// Pages
Route::get('/contact',[PublicController::class, 'contact'])->name('contact');
Route::get('/about-us', [PublicController::class, 'about'])->name('about');

Route::get('/blog/{slug}', [PublicController::class, 'blog'])->name('blog.view');
Route::get('/obekt/{slug}', [PublicController::class, 'obekt'])->name('obekt.view');

Auth::routes();

// Auth access to Dashboard Rieltor
Route::group(['prefix'=>'manage/rieltor', 'namespace' => 'Admin'], function(){

    Route::get('/dashboard', [RieltorController::class, 'index'])->name('home');
    Route::get('/my-note/delete/{id}', [RieltorController::class, 'deleteNote'])->name('rieltor.note.delete');

    Route::group(['prefix'=>'/my-note', 'namespace' => 'Admin'], function(){
        Route::get('/', [RieltorController::class, 'getNote'])->name('rieltor.mynote');
        Route::post('/insert', [RieltorController::class, 'insertNote'])->name('rieltor.note.insert');

    });
//    Route::get('/my-note', [RieltorController::class, 'getNote'])->name('rieltor.mynote');
//    Route::post('/my-note/insert', [RieltorController::class, 'insertNote'])->name('rieltor.note.insert');
//    Route::get('/my-note/delete/{$id}', [RieltorController::class, 'deleteNote'])->name('rieltor.note.delete');

    Route::get('/my-real-estate/{category}', [RieltorController::class, 'viewObekt'])->name('rieltor.view');
});

// Auth access to Dashboard Admin
Route::group(['prefix'=>'manage/admin', 'namespace' => 'Admin'], function(){

    Route::get('/dashboard', [AdminController::class, 'indexAdmin'])->name('admin.home')->middleware('is_admin');

    Route::get('/rieltors', [AdminController::class, 'getRieltors'])->name('admin.rieltors')->middleware('is_admin');
    Route::get('/delete/rieltor/{id}', [AdminController::class, 'deleteRieltor'])->name('admin.rieltor.delete')->middleware('is_admin');

    Route::get('/clients', [AdminController::class, 'getClients'])->name('admin.clients')->middleware('is_admin');
    Route::get('/clients/delete/{$id}', [AdminController::class, 'deleteClients'])->name('admin.clients.delete')->middleware('is_admin');

    Route::group(['prefix'=>'/obekts', 'namespace' => 'Admin'], function(){

        Route::get('/all-obekts', [AdminController::class, 'viewAllObekt'])->name('admin.allView')->middleware('is_admin');
        Route::get('/{category}', [AdminController::class, 'viewObekt'])->name('admin.view')->middleware('is_admin');
        Route::get('/{slug}/{category}/new', [AdminController::class, 'newObekt'])->name('admin.obekt.new')->middleware('is_admin');
        Route::post('/{category}/insert', [AdminController::class, 'insertObekt'])->name('admin.obekt.insert')->middleware('is_admin');

        Route::get('/public/true/{$id}', [AdminController::class, 'isPublic'])->name('admin.isPublic')->middleware('is_admin');
        Route::get('/public/false/{$id}', [AdminController::class, 'notPublic'])->name('admin.notPublic')->middleware('is_admin');
    });

    Route::get('/note', [AdminController::class, 'note'])->name('admin.note')->middleware('is_admin');

    Route::group(['prefix'=>'/blog', 'namespace' => 'Admin'], function(){

        Route::get('/', [AdminController::class, 'getBlog'])->name('admin.blog')->middleware('is_admin');
        Route::get('/delete/{$id}', [AdminController::class, 'deleteBlog'])->name('admin.blog.delete')->middleware('is_admin');
        Route::get('/new-post/', [AdminController::class, 'newBlog'])->name('admin.blog.new')->middleware('is_admin');
        Route::post('/insert/', [AdminController::class, 'insertBlog'])->name('admin.blog.insert')->middleware('is_admin');

    });

    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings')->middleware('is_admin');
    Route::post('/settings/save', [AdminController::class, 'settingsSave'])->name('admin.settings.save')->middleware('is_admin');

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
