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

    Route::post('/demande_devis',[Devis::class,'demande_devis'])->name('demande_devis')->middleware(['auth', 'isClient']);

    Route::get('/infosdevis',[Devis::class,'infosDevis'])->name('infosDevis')->middleware(['auth', 'isProprietaire']);

    Route::get('user-refuser/{id_devis}/{id_reserv}',[Devis::class,'refusDevis'])->name('refuserDevis')->middleware(['auth', 'isProprietaire']);;
    Route::get('user-valider/{id_devis}',[Devis::class,'validationDevis'])->name('validerDevis')->middleware(['auth', 'isProprietaire']);;

});

Route::get('/paiement', function () {
    return view('/page_paiement');
})->name('paiement');

Route::prefix('/logement')->group(function() {

    Route::get('/{id}/details', [Logement::class, 'getInfoLogement'])->where('id', '[0-9]+')->name('details');
    Route::get('/{id}/details_previsu', [Logement::class, 'getInfoLogementPrevisu'])->where('id', '[0-9]+')->name('details_previsu')->middleware(['auth', 'isProprietaire']);

    Route::get('/mes-logements', [Logement::class, 'getLogementsProprietaire'])->name('mes_logements')->middleware(['auth', 'isProprietaire']);
    Route::get('/mes-logements-client', [Logement::class, 'getLogementsClient'])->name('mes_logements_client')->middleware(['auth', 'isClient']);
    Route::get('/mes-logements#sectionLogement', [Logement::class, 'getLogementsProprietaire'])->name('mes_logementsLogement')->middleware(['auth', 'isProprietaire']);
    Route::get('/mes-logements#sectionDevis', [Logement::class, 'getLogementsProprietaire'])->name('mes_logementsDevis')->middleware(['auth', 'isProprietaire']);

    Route::get('/mise_en_ligne_logement', [Logement::class, 'mise_en_ligne_logement'])->name('mise_en_ligne_logement')->middleware(['auth', 'isProprietaire']);
    Route::post('/creation_base_logement', [Logement::class, 'ajouterLogementDB'])->name('creation_logement')->middleware(['auth', 'isProprietaire']);
    Route::get('/setHL/{id}', [Logement::class, 'setLogementHorsLigne'])->name('setHL')->middleware(['auth', 'isProprietaire']);

    Route::get('/delLogement/{id}', [Logement::class, 'delLogement'])->name('delLogement')->middleware(['auth', 'isProprietaire']);
    Route::get('/updateLogement/{id}', [Logement::class, 'updateLogement'])->name('updateLogement')->middleware(['auth', 'isProprietaire']);
    Route::post('/updateLogementBDD/{id}', [Logement::class, 'updateLogementBDD'])->name('updateLogementBDD')->middleware(['auth', 'isProprietaire']);

    Route::post('/creation_avis', [Logement::class, 'creationAvis'])->name('creation_avis')->middleware(['auth', 'isClient']);
    Route::get('/{id}/details#id_hr', [Logement::class, 'getInfoLogement'])->where('id', '[0-9]+')->name('retourAvis');
});

Route::prefix('/account')->group(function () {
    Route::get('client_pop_up/register', [AccountController::class, "inscriptionClientPopUp"])->name('inscription_client_pop');
    Route::get('proprietaire_pop_up/register', [AccountController::class, "inscriptionProprietairePopUp"])->name('inscription_proprio_pop');
    Route::get('proprietaire/register', [AccountController::class, "inscriptionProprietaire"])->name('inscription_proprio');
    Route::get('client/register', [AccountController::class, "inscriptionClient"])->name('inscription_client');
    Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('genereCle', [AccountController::class, 'generationCle'])->name('genereCle')->middleware(['auth', 'isClient']);
    Route::get('deleteCle', [AccountController::class, 'deleteCle'])->name('deleteCle')->middleware(['auth', 'isClient']);
    Route::get('/client/profil/{id}', [AccountController::class, "compteClient"])->name('myClientAccount')->middleware(['auth', 'isClient']);
    Route::get('/client/profil/{id}#api_chemin', [AccountController::class, "compteClient"])->name('myClientAccountAPI')->middleware(['auth', 'isClient']);
    Route::get('/client/profil/{id}#encreIcal', [AccountController::class, "compteClient"])->name('myClientAccountIcal')->middleware(['auth', 'isClient']);
    
    Route::get('proprietaire/profil/{id}', [AccountController::class, "compteProprietaire"])->name('myProprietaireAccount')->middleware(['auth', 'isProprietaire']);
    Route::get('proprietaire/profil/{id}#api_chemin', [AccountController::class, "compteProprietaire"])->name('myProprietaireAccountAPI')->middleware(['auth', 'isProprietaire']);
    Route::post('genereClePro', [AccountController::class, "generationClePro"])->name('genereClePro')->middleware(['auth', 'isProprietaire']);
    Route::get('deleteClePro', [AccountController::class, 'deleteClePro'])->name('deleteClePro')->middleware(['auth', 'isProprietaire']);

    Route::get('admin/profil', AccountController::class)->name('myAdminAccount')->middleware(['auth', 'isAdmin']);
    Route::get('updateAccount', [AccountController::class, 'updateAccount'])->name('updateAccount')->middleware('auth');
    Route::post('client_register', [AccountController::class,'client_register'])->name('client_register');
    route::post('proprio_register',[AccountController::class,'proprio_register'])->name('proprio_register');

    Route::get('deleteClient', [AccountController::class, 'deleteClient'])->name('deleteClient')->middleware(['auth', 'isClient']);
    Route::get('deleteProprietaire', [AccountController::class, 'deleteProprietaire'])->name('deleteProprietaire')->middleware(['auth', 'isProprietaire']);

    Route::get('modifierClient', [AccountController::class, 'modifierClient'])->name('modifierClient')->middleware(['auth', 'isClient']);
    Route::post('modificationsClient', [AccountController::class, 'modificationsClient'])->name('modificationsClient')->middleware(['auth', 'isClient']);

    Route::get('modifierProprietaire', [AccountController::class, 'modifierProprietaire'])->name('modifierProprietaire')->middleware(['auth', 'isProprietaire']);
    Route::post('modificationsProprietaire', [AccountController::class, 'modificationsProprietaire'])->name('modificationsProprietaire')->middleware(['auth', 'isProprietaire']);
});

Route::post('test', [Logement::class, 'ajouterLogementDB']);


Route::get('/testcal', function () {
    return view('/calendrier/calendrier');
})->name('calendrier');

Route::post('/ajouter-evenements',[CalController::class,'ajouterEvenementDB'])->name('ajouter-evenements');
Route::post('/enregistrerEvenement',[CalController::class,'enregistrerEvenement'])->name('enregistrerEvenement');


Route::get('/mentions_legales', function () {
    return view('/mentions_legales');
})->name('mentions_legales');

Route::get('/cgu_cgv', function () {
    return view('/cgu_cgv');
})->name('cgu_cgv');

Route::get("/spawnLink", function () {
    Artisan::call('storage:link');
});

Route::get("/naps", function () {
    return view('naps');
})->name('naps');

Route::fallback(function() {
    return view('404');
 });

 Route::get('/createIcal', [CalController::class, 'createIcal'])->name('createIcal')->middleware(['auth']);
 Route::get('/getIcal/{token}', [CalController::class, 'getIcal'])->name('getIcal');
 Route::get('/delIcal/{token}', [CalController::class, 'delIcal'])->name('delIcal');