<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RieltorController;
//use App\Http\Controllers\HomeController;

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

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin');


// Home page
Route::get('/', function () {
    return view('welcome');
});

// Pages
Route::get('/contact', function () { return view('pages.contact'); });
Route::get('/about-us', function () { return view('pages.about'); });

Route::get('/blog/{slug}', function () { return view('pages.about'); });
Route::get('/obekt/{slug}', 'RieltorController@showObekt');

Auth::routes();

// Auth access to Dashboard Rieltor
Route::group(['prefix'=>'manage/rieltor', 'namespace' => 'Admin'], function(){

    Route::get('/dashboard', 'RieltorController@index')->name('home');
    Route::get('/my-note', 'RieltorController@getNote')->name('mynote');
    Route::post('/insert', 'RieltorController@insertNote')->name('note.insert');
    Route::get('/my-note/delete/{$id}', 'RieltorController@deleteNote')->name('note.delete');

    Route::group(['prefix'=>'/my-note', 'namespace' => 'Admin'], function(){
//        Route::get('/', 'RieltorController@getNote')->name('rieltor.mynote');
//        Route::post('/insert', 'RieltorController@insertNote')->name('rieltor.note.insert');
//        Route::get('/delete/{$id}', 'RieltorController@deleteNote')->name('rieltor.note.delete');
    });

    Route::get('/my-real-estate/{category}', 'RieltorController@viewObekt')->name('rieltor.view');
});

// Auth access to Dashboard Admin
Route::group(['prefix'=>'manage/admin', 'namespace' => 'Admin'], function(){

    Route::get('/dashboard', 'AdminController@indexAdmin')->name('admin.home')->middleware('is_admin');
    Route::get('/rieltors', [AdminController::class, 'indexRieltor'])->name('admin.rieltors')->middleware('is_admin');

    Route::group(['prefix'=>'manage/admin/blog', 'namespace' => 'Admin'], function(){

    });
});
