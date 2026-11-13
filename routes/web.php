<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route classique
Route::get('/menu', function () {
    return "MENU DU JOUR";
});

//la methode redirect
Route::redirect('/', '/menu');

//route avec parametre
Route::get('/produit/{phone}', function ($phone) {
    return "voulez vous acheter le ". $phone;
});

//root avec des parametre optionnel
Route::get('/produits/{phone?}', function(?string $phone = "") {
    return "voulez vous acheter " .$phone;
});
//les differentes methodes http

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

//les prefixes avec la methode 'prefix'

Route::prefix('MENU')->group(function(){
Route::get('/menu du jour', function(){
    return "MENU DU JOUR";
});

Route::get('/menu promo', function(){
    return "MENU PROMO";
})-> name('menu2');

});