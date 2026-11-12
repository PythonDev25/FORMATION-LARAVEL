<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return "MENU DU JOUR";
});

Route::redirect('/', '/menu');


Route::get('/produit/{phone}', function ($phone) {
    return "voulez vous acheter le ". $phone;
});
Route::get('/produits/{phone?}', function(?string $phone = "") {
    return "voulez vous acheter " .$phone;
});

Route::post('/produit', function () {
    return "vous avez acheté le produit";
});

Route::match(['put', 'patch'], '/produits/{id}', function ($id) {
    return "vous avez modifié le produit ". $id;
});

Route::delete('/produits/{id}', function ($id) {
    return "vous avez supprimé le produit ". $id;
});

Route::any('/produits/all', function () {
    return "vous avez accédé à la liste des produits";
});