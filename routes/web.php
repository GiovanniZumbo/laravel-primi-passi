<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $title = "Homepage Sito";
    $navLink = "/chiSiamo";
    $nameLink = "Chi Siamo";

    return view('home', compact("title", "navLink", "nameLink"));
});



Route::get('/chiSiamo', function () {

    $title = "Chi siamo";
    $navLink = "/";
    $nameLink = "Home";

    return view('chiSiamo', compact("title", "navLink", "nameLink"));
});
