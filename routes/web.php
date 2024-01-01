<?php

use App\Http\Controllers\ControllerChaty;
use App\Http\Controllers\ControllerFavourite as ControllerFavouriteAlias;
use App\Http\Controllers\ControllerFerraty;
use App\Http\Controllers\ControllerPrihlasenie;
use App\Http\Controllers\controllerRegistracia;
use App\Http\Controllers\ControllerVodopady;
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

Route::get('/ferraty', function () {
    return view('viewFerraty');
});

Route::get('/chaty', function () {
    return view('viewChaty');
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

Route::get('/upravenieDatabazy', function () {
    return view('viewUpravenieDatabazy');
});


Route::get('/favourite/showFavorites', [App\Http\Controllers\ControllerFavourite::class, 'showFavorites'])->name('favourite.showFavorites');
Route::get('/viewEditovaniePrispevku/{id}', [ControllerVrchol::class, 'editacia']);


//pridavanie prispevkov             --CREATE
Route::post('/pridajPrispevok', [ControllerVrchol::class, 'store']);
Route::post('/pridajPrispevokChaty', [ControllerChaty::class, 'store']);
Route::post('/pridajPrispevokFerraty', [ControllerFerraty::class, 'store']);
Route::post('/pridajPrispevokVodopady', [ControllerVodopady::class, 'store']);


//vypisyKarticiek                   --READ--
Route::get('/', [ControllerVrchol::class, "ziskanieVrcholov"]);
Route::get('/ferraty', [ControllerFerraty::class, "ziskanieFerrat"]);
Route::get('/vodopady', [ControllerVodopady::class, "ziskanieVodopadov"]);
Route::get('/chaty', [ControllerChaty::class, "ziskanieChat"]);


//editovanie prispevkov             --UPDATE--
Route::post('/vrcholyEditacia', [ControllerVrchol::class, 'ulozEditaciu']);
Route::post('/ferratyEditacia', [ControllerFerraty::class, 'ulozEditaciu'])->name('ferratyEditacia');
Route::post('/vodopadyEditacia', [ControllerVodopady::class, 'ulozEditaciu'])->name('vodopadyEditacia');
Route::post('/chatyEditacia', [ControllerChaty::class, 'ulozEditaciu'])->name('chaatyEditacia');


//mazanie prispevkov                --DELETE--
Route::delete('/vrchol/{id}', [ControllerVrchol::class, 'destroy']);
Route::delete('/ferrata/{id}', [ControllerFerraty::class, 'destroy']);
Route::delete('/chata/{id}', [ControllerChaty::class, 'destroy']);
Route::delete('/vodopad/{id}', [ControllerVodopady::class, 'destroy']);


//ziskanie turistickejOblasti:
Route::get('/vrcholyVysokeTatry', [ControllerVrchol::class, "ziskanieVrcholovVysokychTatier"]);
Route::get('/vrcholyNizkeTatry', [ControllerVrchol::class, "ziskanieVrcholovNizkychTatier"]);
Route::get('/vrcholyVelkaFatra', [ControllerVrchol::class, "ziskanieVrcholovVelkejFatry"]);
Route::get('/vrcholyMalaFatra', [ControllerVrchol::class, "ziskanieVrcholovMalejFatry"]);


//ziskanie oblubenych prispevkov


//prihlasovacie vecicky
Route::post('/zaregistruj', [ControllerRegistracia::class, 'zaregistruj']);
Route::post('/prihlasenie', [ControllerPrihlasenie::class, 'prihlasenie']);
Route::get('/odhlasenie', [ControllerPrihlasenie::class, 'odhlasenie']);





//oblubene prispevky
Route::post('/favourite/pridanieOdobranieFavourite/{vrchol}', [ControllerFavouriteAlias::class, 'pridanieOdobranieFavourite'])->name('favourite.pridanieOdobranieFavourite');
Route::get('/oblubenePrispevky', [ControllerFavouriteAlias::class, "showFavorites"]);


