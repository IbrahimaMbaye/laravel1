<?php
namespace App\http\Controllers;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\CustomAuthController;

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

Route::get('/ajouter/candidat',[CandidatController::class, 'index']);
Route::get('/liste/candidat',[CandidatController::class, 'liste']);
Route::get('/ajouter/electeur',[electeurController::class, 'index']);
Route::post('/enregistrer/candidat',[CandidatController::class, 'store']) ->name('store.candidat');
Route::post('/enregistrer/electeur',[electeurController::class, 'store']) ->name('store.electeur');
Route::get('/login',[CustomAuthController::class, 'login']);
Route::get('/registration',[CustomAuthController::class, 'registration']);
Route::post('/register-user',[CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class, 'dashboard']);