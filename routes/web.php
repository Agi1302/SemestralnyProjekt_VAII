<?php

use App\Http\Controllers\ControllerPrihlasenie;
use App\Http\Controllers\controllerRegistracia;
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
    return view('viewHlavnaStranka');
});

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



Route::post('/zaregistruj', [ControllerRegistracia::class, 'zaregistruj']);
Route::post('/prihlasenie', [ControllerPrihlasenie::class, 'prihlasenie']);
Route::get('/odhlasenie', [ControllerPrihlasenie::class, 'odhlasenie']);
