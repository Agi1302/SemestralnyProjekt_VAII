<?php

use App\Http\Controllers\ControllerAbsolvovane;
use App\Http\Controllers\ControllerChaty;
use App\Http\Controllers\ControllerFavourite as ControllerFavouriteAlias;
use App\Http\Controllers\ControllerFerraty;
use App\Http\Controllers\ControllerOtazky;
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
    return view('hlavne.viewFerraty');
});

Route::get('/chaty', function () {
    return view('hlavne.viewChaty');
});

Route::get('/prihlasenie', function () {
    return view('hlavne.viewPrihlasenie');
});

Route::get('/registracia', function () {
    return view('viewRegistracia');
});

Route::get('/vodopady', function () {
    return view('hlavne.viewVodopady');
});

Route::get('/zobrazenieProfilovychUdajov', function () {

    if(Auth::check()){
        return view('hlavne.uzivatel.viewProfiloveUdaje');
    }
    return redirect('/')->with('status', "Najprv sa musíš prihlásiť");
});

Route::get('/zmenaNastaveni', function () {
    if(Auth::check()){
        return view('hlavne.uzivatel.viewProfiloveUdajeNastavenia');
    }
    return redirect('/')->with('status', "Najprv sa musíš prihlásiť");

});

Route::get('/zmenaHesla', function () {
    if(Auth::check()){
        return view('hlavne.uzivatel.viewProfiloveUdajeZmenaHesla');
    }
    return redirect('/')->with('status', "Najprv sa musíš prihlásiť");

});



Route::get('/upravenieDatabazy', function () {

    if(Auth::check() && Auth::user()->is_admin()) {
        return view('viewUpravenieDatabazy');

    } else {
        return redirect('/')->with('status', "Najprv sa musíš prihlásiť");
    }
});

Route::get('/uzitocneOdkazy', function () {
    return view('hlavne.vseobecne.viewUzitocneOdkazy');
});

Route::get('/Q&A', function () {
    return view('hlavne.vseobecne.viewQ&A');
});

Route::get('/Q&A', [ControllerOtazky::class, 'index']);



Route::get('/favourite/showFavorites', [App\Http\Controllers\ControllerFavourite::class, 'showFavorites'])->name('favourite.showFavorites');

//Q&A


Route::post('/pridajOtazku', [ControllerOtazky::class, 'store']);
Route::post('/editujOtazku', [ControllerOtazky::class, 'pridajOdpoved']);


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


//zobrazenieEditovaciehoView
Route::get('/viewEditovaniePrispevkuVrcholu/{id}', [ControllerVrchol::class, 'editacia']);
Route::get('/viewEditovaniePrispevkuChaty/{id}', [ControllerChaty::class, 'editacia']);
Route::get('/viewEditovaniePrispevkuFerraty/{id}', [ControllerFerraty::class, 'editacia']);
Route::get('/viewEditovaniePrispevkuVodopady/{id}', [ControllerVodopady::class, 'editacia']);

//editovanie prispevkov             --UPDATE--
Route::post('/vrcholyEditacia', [ControllerVrchol::class, 'ulozEditaciu']);
Route::post('/ferratyEditacia', [ControllerFerraty::class, 'ulozEditaciu']);
Route::post('/chatyEditacia', [ControllerChaty::class, 'ulozEditaciu']);
Route::post('/vodopadyEditacia', [ControllerVodopady::class, 'ulozEditaciu']);


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


//prihlasovacie vecicky
Route::post('/zaregistruj', [ControllerRegistracia::class, 'zaregistruj']);

Route::post('/update-password', [ControllerRegistracia::class, 'updatePassword'])->name('update-password');
Route::post('/update-user', [ControllerRegistracia::class, 'updateUser'])->name('update-user');
Route::post('/prihlasenie', [ControllerPrihlasenie::class, 'prihlasenie']);
Route::get('/odhlasenie', [ControllerPrihlasenie::class, 'odhlasenie']);


//oblubene prispevky, ajax-post
Route::post('/favourite/pridanieOdobranieFavourite/{vrchol_id}', [ControllerFavouriteAlias::class, 'pridanieOdobranieFavourite'])->name('favourite.pridanieOdobranieFavourite');
Route::post('/absolvovane/pridanieOdobranieAbsolvovane/{vrchol_id}', [ControllerAbsolvovane::class, 'pridanieOdobranieAbsolvovane'])->name('absolvovane.pridanieOdobranieAbsolvovane');

Route::get('/oblubenePrispevky', [ControllerFavouriteAlias::class, "showFavorites"]);
Route::get('/absolvovanePrispevky', [ControllerAbsolvovane::class, "showAbsolvovane"]);


