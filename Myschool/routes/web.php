<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\ClasseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// route pour la page d'authentification
Route::get('/',[EleveController::class,'authentification']);
// route pour le dashoard d'acceuil
Route::get('/eleve',[EleveController::class,'index'])->name('dashboard');
// route de l'inscription
Route::get('eleve/create',[EleveController::class,'create'])->name('createEleve');
// afficher tout les élèves
Route::get('/create/list',[EleveController::class,'getAll'])->name('readEleve');
// route pour les eleves par classe
Route::get('list/classes',[ClasseController::class,'getByClass'])->name('listByClass');
// pour afficher les classes et scolarité
Route::get('/classes/scolarite',[ClasseController::class,'index'])->name('classes');

