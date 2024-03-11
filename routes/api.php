<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\AbscenceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::post('/auth/login', [AuthController::class,'login']);
Route::post('/auth/register', [AuthController::class,'register']);


//////Debut endpoint pour etudiant///////////////////////////

//Route::get('/auth/etudiant', [AuthController::class,'register']);
Route::get('/etudiant', [EtudiantController::class,'index']);//La route permet de se pointer sur l'index du controller
Route::get('/etudiant/creer', [EtudiantController::class,'creer']);//La route permmettant de se pointer sur la page de création d'un étudiant
Route::post('/etudiant', [EtudiantController::class,'enregistrer']);//La route pour enregistrer un étudiant dans la BDD
Route::get('/etudiant/consulter', [EtudiantController::class,'consulter']);//pour lire tous les étudiants
Route::post('/etudiant/supprimer', [EtudiantController::class,'supprimer']);//Pour supprimer
Route::get('/etudiant/{etudiant}/recuperer1', [EtudiantController::class,'recuperer']);//pour recupéerer un étudiant
Route::post('/etudiant/{etudiant}/modifier', [EtudiantController::class,'modifier']);

//////////Fin endpoint pour étudiant ////////////////////////////


////////////Début endpoint pour classe/////////////////

Route::get('classe/consulter',[ClasseController::class,'consulter']);

//Route::get('course/consulter',[CourseController::class,'consulter']);
Route::post('/classe', [ClasseController::class,'enregistrer']);//La route pour enregistrer une classe dans la BDD
Route::post('/classe/supprimer', [ClasseController::class,'supprimer']);//Pour supprimer
Route::get('/classe/{classe}/recuperer1', [ClasseController::class,'recuperer']);//pour recupéerer une classe
Route::post('/classe/{classe}/modifier', [ClasseController::class,'modifier']);


/////////////Fin endpoint pour classe//////////////////////




////////////Début endpoint pour les professeurs/////////////////

Route::get('professeur/consulter',[ProfesseurController::class,'consulter']);

//Route::get('course/consulter',[CourseController::class,'consulter']);
Route::post('/professeur', [ProfesseurController::class,'enregistrer']);//La route pour enregistrer un professeur dans la BDD
Route::post('/professeur/supprimer', [ProfesseurController::class,'supprimer']);//Pour supprimer
Route::get('/professeur/{professeur}/recuperer1', [ProfesseurController::class,'recuperer']);//pour recupéerer un prof
Route::post('/professeur/{professeur}/modifier', [ProfesseurController::class,'modifier']);


/////////////Fin endpoint pour les professeurs//////////////////////



////////////Début endpoint pour Matiere/////////////////

Route::get('matiere/consulter',[MatiereController::class,'consulter']);

//Route::get('course/consulter',[CourseController::class,'consulter']);
Route::post('/matiere', [MatiereController::class,'enregistrer']);//La route pour enregistrer une matière dans la BDD
Route::post('/matiere/supprimer', [MatiereController::class,'supprimer']);//Pour supprimer
Route::get('/matiere/{matiere}/recuperer1', [MatiereController::class,'recuperer']);//pour recupéerer une classe
Route::post('/matiere/{matiere}/modifier', [MatiereController::class,'modifier']);


/////////////Fin endpoint pour matiere//////////////////////


////////////Début endpoint pour l'abscence /////////////////

Route::get('abscence/consulter',[AbscenceController::class,'consulter']);

//Route::get('course/consulter',[CourseController::class,'consulter']);
Route::post('/abscence', [AbscenceController::class,'enregistrer']);//La route pour enregistrer une abscence dans la BDD
Route::post('/abscence/supprimer', [AbscenceController::class,'supprimer']);//Pour supprimer
Route::get('/abscence/{abscence}/recuperer1', [AbscenceController::class,'recuperer']);//pour recupéerer une abscence
Route::post('/abscence/{abscence}/modifier', [AbscenceController::class,'modifier']);


/////////////Fin endpoint pour abscence//////////////////////