<?php

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

Route::get('/', function () {
    return redirect("/login");
});

/*
Auth routes
*/
Auth::routes(["register" => false]);
Route::middleware(['auth'])->group(function () {
    Route::get('/home', "DashboardController@home");

});

/*
Info cards
*/
Route::get('/report-a-malfunction', function() { return view("infocard.malfunction"); });