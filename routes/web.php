<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudInsertController;
use App\Http\Controllers\StudViewController;
use App\Http\Controllers\StudUpdateController;
use App\Http\Controllers\StudDeleteController;


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

Route::pattern('id', '\d+');
/*
Route::get('/', function () {
    return view('welcome1');
});*/

Route::get('/{id}', function () {
    return view('welcome');
});
/*
Route::get('/login', function () {
    return view('login');
})->name('login');
*/
/*Route::group(['prefix' => 'admin'], function () {
    Route::get('users', function ()    {
        // Matches The "/admin/users" URL        
        return view('users', ["name"=> "Stalin"]);
    });
    Route::get('welcome', function ()    {
        // Matches The "/admin/users" URL        
        return view('welcome ');
    });
});*/

# Using Request
Route::get('username/{name}', function (Request $request) {
    return view('welcome ');
});
//Route::redirect('/admin/users', '/', 301);    //redirect permanente
Route::view('/welcomeSpecial', 'welcome', ['name' => 'Taylor']);
Route::get("/page", function(){
    return View::make("dir.page");
 });

 Route::get('insert', [StudInsertController::class, 'insertform']);
 Route::post('create', [StudInsertController::class, 'insert']);
 Route::get('view-records', [StudViewController::class, 'index']);

 Route::get('edit-records', [StudUpdateController::class, 'index']);
 Route::get('edit/{id}', [StudUpdateController::class, 'show']);
 Route::post('edit/{id}', [StudUpdateController::class, 'edit']);

 
 Route::get('delete-records', [StudDeleteController::class, 'index']);
 Route::get('delete/{id}', [StudDeleteController::class, 'destroy']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();
