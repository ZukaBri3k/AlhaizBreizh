<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\AccountController;

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
    return view('welcome');
});

Route::get('/devis-proprio', function () {
    return view('/devis/devis-proprio');
})->name('devis-proprio');
Route::get('/devis_proprio', function () {
    return view('/devis/devis-proprio2');
})->name('devis-proprio2');

Route::get('/devis-client', function () {
    return view('/devis/devis-client');
})->name('devis-client');

Route::get('/paiement', function () {
    return view('/page_paiement');
})->name('paiement');

Route::get('/devis', function () {
    return view('/devis/index');
})->name('devis-page');

Route::get('/creation_logement', function () {
    return view('creer_logement');
})->name('creer_logement');


Route::prefix('/logement')->group(function() {

    Route::get('/{id}/details', function(Request $req, $id) {
        return view('details_logement', ['id_logement' => $id]);
    })->where('id', '[0-9]+')->name('details');
});

Route::prefix('/account')->group(function () {
    Route::get('client_pop_up/register', function () {return view('Compte/inscription_client_pop_up');})->name('inscription_client_pop');
    Route::get('proprietaire_pop_up/register', function () {return view('Compte/inscription_proprietaire_pop_up');})->name('inscription_proprio_pop');
    Route::get('proprietaire/register', function () {return view('inscription_proprio');})->name('inscription_proprio');
    Route::get('client/register', function () {return view('inscription_client');})->name('inscription_client');
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('client/profil', function () {return view('Compte/MonCompteClient');})->name('myClientAccount')->middleware(['auth', 'isClient']);
    Route::get('proprietaire/profil', function () {return view('Compte/MonCompteProprietaire');})->name('myProprietaireAccount')->middleware(['auth', 'isProprietaire']);
    Route::get('admin/profil', AccountController::class)->name('myAdminAccount')->middleware(['auth', 'isAdmin']);
    Route::get('updateAccount', [AccountController::class, 'updateAccount'])->name('updateAccount')->middleware('auth');
});

