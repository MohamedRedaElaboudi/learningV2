<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CoursController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Définition des routes Web
|--------------------------------------------------------------------------
*/

// Accueil
Route::get('/', function () {
    return view('welcome');
})->name('Acceuil');

// Authentification
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Inscription
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Cours : rejoindre une classe
Route::get('/rejoindre', [CoursController::class, 'rejoindreshow'])->name('cours.rejoindreshow');
Route::post('/rejoindre', [CoursController::class, 'rejoindre'])->name('cours.rejoindre');

// Cours : voir les classes inscrites
Route::get('/mescours', [CoursController::class, 'mesCoursInscrits'])->name('cours.mescours');

Route::get('/dashprofesseur', function () {
    return view('professeur.dashprofesseur');  
});

Route::get('/ressourcesv', function () {
    return view('professeur.ressourcesv');  
});

Route::get('/classesv', function () {
    return view('professeur.classesv');  
});

Route::get('/parametre', function () {
    return view('professeur.parametre');  
});

Route::get('/tableau-de-bord', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/classes', [ClassesController::class, 'index'])->name('classes');
Route::get('/ressources', [ResourcesController::class, 'index'])->name('ressources');
Route::get('/questions', [QuestionsController::class, 'index'])->name('questions');
Route::get('/parametres', [SettingsController::class, 'index'])->name('parametres');

 