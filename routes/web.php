<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\AccountController;
use \App\Http\Controllers\Logement;
use \App\Http\Controllers\Devis;
use \App\Http\Controllers\Welcome;
use \App\Http\Controllers\CalController;


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

Route::get('/', [Welcome::class, "affichage"])->name('accueil');

Route::prefix('/devis')->group(function () {

    Route::get('/proprietaire', [Devis::class, "devisProprietaire"])->name('devis-proprio')->middleware(['auth', 'isProprietaire']);
    Route::get('/devis', [Devis::class, "devisProprietaire2"])->name('devis')->middleware(['auth', 'isProprietaire']);   
    Route::get('/client', [Devis::class, "devisClient"])->name('devis-client')->middleware(['auth', 'isClient']);
    Route::get('/creation/{id_client}', [Devis::class, "creationDevis"])->where('id_client', '[0-9]+')->name('devis-page')->middleware(['auth', 'isProprietaire']);
    Route::post('/enregDB/{id_client}', [Devis::class, "creerDevisDB"])->where('id_client', '[0-9]+')->name('devis-store')->middleware();
    Route::get('user-refuser',[Devis::class,'refusDevis'])->name('devis.refuser')->middleware(['auth', 'isClient']);;
    Route::get('user-valider',[Devis::class,'validationDevis'])->name('devis.valider')->middleware(['auth', 'isClient']);;
    Route::get('user-demander',[Devis::class,'demandeDevis'])->name('devis.demander')->middleware(['auth', 'isClient']);;
    Route::get('/infosdevis',[Devis::class,'infosDevis'])->name('infosDevis')->middleware(['auth', 'isProprietaire']);;
});

Route::get('/paiement', function () {
    return view('/page_paiement');
})->name('paiement');

Route::prefix('/logement')->group(function() {

    Route::get('/{id}/details', [Logement::class, 'getInfoLogement'])->where('id', '[0-9]+')->name('details');
    Route::get('/{id}/details_previsu', [Logement::class, 'getInfoLogementPrevisu'])->where('id', '[0-9]+')->name('details_previsu')->middleware(['auth', 'isProprietaire']);

    Route::get('/mes-logements', [Logement::class, 'getLogementsProprietaire'])->name('mes_logements')->middleware(['auth', 'isProprietaire']);
    Route::post('/mise_en_ligne_logement', [Logement::class, 'ajouterLogementDB'])->name('mise_en_ligne_logement')->middleware(['auth', 'isProprietaire']);
});

Route::prefix('/account')->group(function () {
    Route::get('client_pop_up/register', [AccountController::class, "inscriptionClientPopUp"])->name('inscription_client_pop');
    Route::get('proprietaire_pop_up/register', [AccountController::class, "inscriptionProprietairePopUp"])->name('inscription_proprio_pop');
    Route::get('proprietaire/register', [AccountController::class, "inscriptionProprietaire"])->name('inscription_proprio');
    Route::get('client/register', [AccountController::class, "inscriptionClient"])->name('inscription_client');
    Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('genereCle', [AccountController::class, 'generationCle'])->name('genereCle')->middleware(['auth', 'isClient']);
    Route::get('deleteCle/{cle}', [AccountController::class, 'deleteCle'])->name('deleteCle')->middleware(['auth', 'isClient']);
    Route::get('/client/profil', [AccountController::class, "compteClient"])->name('myClientAccount')->middleware(['auth', 'isClient']);
    Route::get('/client/profil/{id}#api_chemin', [AccountController::class, "compteClient"])->name('myClientAccountAPI')->middleware(['auth', 'isClient']);
    
    Route::get('proprietaire/profil/{id}', [AccountController::class, "compteProprietaire"])->name('myProprietaireAccount')->middleware(['auth', 'isProprietaire']);
    Route::get('proprietaire/profil/{id}#api_chemin', [AccountController::class, "compteProprietaire"])->name('myProprietaireAccountAPI')->middleware(['auth', 'isProprietaire']);
    Route::post('genereClePro', [AccountController::class, "generationClePro"])->name('genereClePro')->middleware(['auth', 'isProprietaire']);
    Route::get('deleteCle/{cle}', [AccountController::class, 'deleteClePro'])->name('deleteClePro')->middleware(['auth', 'isProprietaire']);

    Route::get('admin/profil', AccountController::class)->name('myAdminAccount')->middleware(['auth', 'isAdmin']);
    Route::get('updateAccount', [AccountController::class, 'updateAccount'])->name('updateAccount')->middleware('auth');
    Route::get('client_register', [AccountController::class,'client_register'])->name('client_register');
    route::get('proprio_register',[AccountController::class,'proprio_register'])->name('proprio_register');
});

Route::get('test', [Logement::class, 'ajouterLogementDB']);


Route::get('/testcal', function () {
    return view('/calendrier/calendrier');
})->name('calendrier');

Route::post('/ajouter-evenements',[CalController::class,'ajouterEvenementsDB'])->name('ajouter-evenements');
