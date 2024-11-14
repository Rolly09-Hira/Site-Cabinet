<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ExternalisationController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\servextController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;






Route::get('/', [ HomeController::class, 'home'] )
     ->name('app_home');

Route::get('/about', [ HomeController::class, 'about'])
     ->name('app_about');

Route::get('/service',[ HomeController::class,'service' ])
     ->name('app_service');
Route::get('service/bachelierr',[HomeController::class, 'servicebachelier'])
     ->name('service.bachelier');

Route::post('proces_inscrire',[EtudiantController::class, 'AddEtudiant'])->name('Etudiant.registerproces');
Route::post('proces_information',[ExternalisationController::class, 'AddExternalisation'])->name('ajout.externalisation');
Route::get('inscrire',[EtudiantController::class, 'inscrire'])->name('Etudiant.inscrire');





Route::group(['prefix' => ''],function(){
    //guest middleware
    Route::group(['middleware' => 'guest'],function(){
        Route::get('login',[LoginController::class, 'index'])->name('account.login');
        Route::post('authenticate',[LoginController::class, 'authenticate'])->name('account.authenticate');
    });
    //Authenticate middleware
    Route::group(['middleware' => 'auth'],function(){
        Route::get('logout',[LoginController::class, 'logout'])->name('account.logout');
        Route::get('dashboard',[DashboardController::class, 'index'])->name('account.dashboard');


    });
});

Route::group(['prefix' => 'admin'],function(){
    //guest middleware pour admin
    Route::group(['middleware' => 'admin.guest'],function(){
        Route::get('login',[AdminController::class, 'index'])->name('admin.login');
        Route::post('authenticate',[AdminController::class, 'authenticate'])->name('admin.authenticate');


    });
    //Authenticate middleware pour admin
    Route::group(['middleware' => 'admin.auth'],function(){
        Route::get('dashboard',[AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout',[AdminController::class, 'logout'])->name('admin.logout');
        Route::get('user',[CrudController::class, 'listeUser'])->name('admin.liste');
        Route::get('Etudiant',[EtudiantController::class, 'listEtudiant'])->name('admin.listeEtudiant');
        Route::get('register',[UserController::class, 'register'])->name('account.register');
        Route::get('delete/{id}',[EtudiantController::class, 'deleteEtudiant'])->name('process_delete');
        Route::get('deleteuser/{id}',[UserController::class, 'deleteUser'])->name('process_userdelete');
        Route::get('affichage/{id}',[UserController::class, 'AfficheUser'])->name('Affichage-user');
        Route::get('affichage_etudiant/{id}',[EtudiantController::class, 'AfficheEtudiant'])->name('Affichage-etudiant');
        Route::get('affichage_etudiant/{id}',[EtudiantController::class, 'AfficheEtudiant'])->name('Affichage-etudiant');
        Route::post('Form-modification',[EtudiantController::class, 'EditEtudiant'])->name('Modifier-etudiant');
        Route::get('Modifier_etudiant/{id}',[EtudiantController::class, 'formmodifier'])->name('Modifier-etudiant-form');
        Route::post('process-register',[UserController::class, 'processregistre'])->name('account.processRegistre');
        Route::get('client/Externalisation',[ExternalisationController::class, 'listExternalisation'])->name('admin.listeExternalisation');
        Route::get('client/{id}',[ExternalisationController::class, 'Externalisation'])->name('admin.PageExternalisation');
        Route::get('/chart', [ChartController::class, 'index']);
        //Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);
        Route::get('userEdit/{id}',[CrudController::class, 'edituser'])->name('admin.userEdit');
        Route::post('userEditprocess',[CrudController::class, 'updateUser'])->name('admin.userEditprocess');


        //formation
        Route::post('proces_ajoutformation',[FormationController::class, 'processajoutformation'])->name('formation.ajoutproces');
        Route::get('Ajout-formation',[FormationController::class, 'ajoutformation'])->name('formation.ajout');
        Route::get('Listeformation',[FormationController::class, 'listFormation'])->name('admin.listeformation');
        Route::get('deleteformation/{id}',[FormationController::class, 'deleteFormation'])->name('process_deleteformation');
        //matiere
        Route::post('proces_ajoutMatiere',[FormationController::class, 'processajoutmat'])->name('matiere.ajoutproces');
        Route::get('Ajout-matiere',[FormationController::class, 'ajoutMatiere'])->name('matiere.ajout');
        Route::get('ListeMatiere',[FormationController::class, 'listMatiere'])->name('admin.listematiere');
        Route::get('deletematiere/{id}',[FormationController::class, 'deleteMatiere'])->name('process_deletematiere');
        //gestion de service d'externalisation
        Route::get('gestionservice',[servextController::class, 'gestionservext'])->name('gestionserv');
        Route::post('ajoutduservice',[servextController::class, 'ajoutservext'])->name('ajoutservice');
    });
});



