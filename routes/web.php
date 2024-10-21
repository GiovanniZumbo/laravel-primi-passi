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
    $navLinks = [
        ["name" => "Home", "url" => "/"],
        ["name" => "Chi Siamo", "url" => "chiSiamo"],
        ["name" => "Prodotti", "url" => "prodotti"],
    ];

    $content = "Home page del sito.";

    return view('home', compact("title", "navLinks", "content"));
});



Route::get('/chiSiamo', function () {

    $title = "Chi siamo";
    $navLinks = [
        ["name" => "Home", "url" => "/"],
        ["name" => "Chi Siamo", "url" => "chiSiamo"],
        ["name" => "Prodotti", "url" => "prodotti"],

    ];

    $content = "La nostra missione è quella di creare soluzioni innovative alla portata di tutti.";

    return view('chiSiamo', compact("title", "navLinks", "content"));
});


Route::get('/prodotti', function () {

    $title = "I nostri prodotti";
    $navLinks = [
        ["name" => "Home", "url" => "/"],
        ["name" => "Chi Siamo", "url" => "chiSiamo"],
        ["name" => "Prodotti", "url" => "prodotti"],

    ];

    $content = "I nostri prodotti.";

    return view('prodotti', compact("title", "navLinks", "content"));
});
