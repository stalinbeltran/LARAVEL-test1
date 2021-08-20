<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome1');
});

Route::get('/{id}', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::group(['prefix' => 'admin'], function () {
    Route::get('users', function ()    {
        // Matches The "/admin/users" URL        
        return view('users');
    });
    Route::get('welcome', function ()    {
        // Matches The "/admin/users" URL        
        return view('welcome ');
    });
});

# Using Request
Route::get('username/{name}', function (Request $request) {
    return view('welcome ');
});
Route::redirect('/', '/admin/users', 301);
Route::view('/welcomeSpecial', 'welcome', ['name' => 'Taylor']);
Route::get("/page", function(){
    return View::make("dir.page");
 });
 