<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return "MENU DU JOUR";
});

Route::get('/produit/{phone}', function ($phone) {
    return "voulez vous acheter le ". $phone;
});

Route::get('/produits/{phone?}', function(?string $phone = "pas de tel") {
    return "voulez vous acheter " .$phone;
});

