<?php

use App\Http\Controllers\ControllerChaty;
use App\Http\Controllers\ControllerFavourite as ControllerFavouriteAlias;
use App\Http\Controllers\ControllerPrihlasenie;
use App\Http\Controllers\controllerRegistracia;
use App\Http\Controllers\ControllerVrchol;
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


Route::get('/chaty', function () {
    return view('viewChaty');
});

Route::get('/ferraty', function () {
    return view('viewFerraty');
});

Route::get('/forum', function () {
    return view('viewForum');
});

Route::get('/prihlasenie', function () {
    return view('viewPrihlasenie');
});

Route::get('/registracia', function () {
    return view('viewRegistracia');
});

Route::get('/vodopady', function () {
    return view('viewVodopady');
});

Route::get('/zobrazenieProfilovychUdajov', function () {
    return view('viewProfiloveUdaje');
});


Route::get('/zmenaNastaveni', function () {
    return view('viewProfiloveUdajeNastavenia');
});

Route::get('/zmenaHesla', function () {
    return view('viewProfiloveUdajeZmenaHesla');
});


Route::get('/favourite/showFavorites', [App\Http\Controllers\ControllerFavourite::class, 'showFavorites'])->name('favourite.showFavorites');










Route::get('/viewEditovaniePrispevku/{id}', [ControllerVrchol::class, 'editacia']);



Route::get('/upravenieDatabazy', function () {
    return view('viewUpravenieDatabazy');
});

Route::get('/odhlasenie', [ControllerPrihlasenie::class, 'odhlasenie']);
Route::get('/', [ControllerVrchol::class, "ziskanieVrcholov"]);
Route::get('/oblubenePrispevky', [ControllerFavouriteAlias::class, "showFavorites"]);





Route::post('/zaregistruj', [ControllerRegistracia::class, 'zaregistruj']);
Route::post('/prihlasenie', [ControllerPrihlasenie::class, 'prihlasenie']);
Route::post('/pridajPrispevok', [ControllerVrchol::class, 'store'])->name('vrcholy.store');

Route::post('/pridajPrispevokChaty', [ControllerChaty::class, 'store']);



Route::post('/vrcholyEditacia', [ControllerVrchol::class, 'ulozEditaciu'])->name('vrcholyEditacia');


Route::post('/favourite/pridanieOdobranieFavourite/{vrchol}', [ControllerFavouriteAlias::class, 'pridanieOdobranieFavourite'])->name('favourite.pridanieOdobranieFavourite');
Route::delete('/vrchol/{id}', [ControllerVrchol::class, 'destroy']);



