<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\AccountController;
use \App\Http\Controllers\Logement;
use \App\Http\Controllers\Devis;

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
})->name('accueil');

Route::prefix('/devis')->group(function () {

    Route::get('/proprietaire', [Devis::class, "devisProprietaire"])->name('devis-proprio')->middleware(['auth', 'isProprietaire']);
    Route::get('/devis', [Devis::class, "devisProprietaire2"])->name('devis')->middleware(['auth', 'isProprietaire']);   
    Route::get('/client', [Devis::class, "devisClient"])->name('devis-client')->middleware(['auth', 'isClient']);
    Route::get('/creation/{id_client}', [Devis::class, "creationDevis"])->where('id_client', '[0-9]+')->name('devis-page')->middleware(['auth', 'isProprietaire']);
    Route::post('/enregDB/{id_client}', [Devis::class, "creerDevisDB"])->where('id_client', '[0-9]+')->name('devis-store')->middleware();
    Route::get('user-refuser',[Devis::class,'refusDevis'])->name('devis.refuser')->middleware(['auth', 'isClient']);;
    Route::get('user-valider',[Devis::class,'validationDevis'])->name('devis.valider')->middleware(['auth', 'isClient']);;
    Route::get('user-demander',[Devis::class,'demandeDevis'])->name('devis.demander')->middleware(['auth', 'isClient']);;
});

Route::get('/paiement', function () {
    return view('/page_paiement');
})->name('paiement');

Route::prefix('/logement')->group(function() {

    Route::get('/{id}/details', [Logement::class, 'getInfoLogement'])->where('id', '[0-9]+')->name('details');

    Route::get('/creation/{page}', [Logement::class, "creation"])->where('page', '[0-7]')->name('creer_logement')->middleware(['auth', 'isProprietaire']);
});

Route::prefix('/account')->group(function () {
    Route::get('client_pop_up/register', [AccountController::class, "inscriptionClientPopUp"])->name('inscription_client_pop');
    Route::get('proprietaire_pop_up/register', [AccountController::class, "inscriptionProprietairePopUp"])->name('inscription_proprio_pop');
    Route::get('proprietaire/register', [AccountController::class, "inscriptionProprietaire"])->name('inscription_proprio');
    Route::get('client/register', [AccountController::class, "inscriptionClient"])->name('inscription_client');
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('client/profil', [AccountController::class, "compteClient"])->name('myClientAccount')->middleware(['auth', 'isClient']);
    Route::get('proprietaire/profil', [AccountController::class, "compteProprietaire"])->name('myProprietaireAccount')->middleware(['auth', 'isProprietaire']);
    Route::get('admin/profil', AccountController::class)->name('myAdminAccount')->middleware(['auth', 'isAdmin']);
    Route::get('updateAccount', [AccountController::class, 'updateAccount'])->name('updateAccount')->middleware('auth');
});

Route::get('test', [Logement::class, 'ajouterLogementDB']);
Route::get('test1', [AccountController::class,'ajoute_personne'])->name('yolo');
