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

Route::get('/',[EleveController::class,'authentification']);
Route::get('/eleve',[EleveController::class,'index'])->name('dashboard');
// route pour le dashoard d'acceuil
Route::get('eleve/create',[EleveController::class,'create'])->name('createEleve');
// Route::post('eleve/create',[EleveController::class,'store'])->name('storeEleve');
Route::get('/create/list',[EleveController::class,'getAll'])->name('readEleve');
Route::get('list/classes',[ClasseController::class,'index'])->name('classes');