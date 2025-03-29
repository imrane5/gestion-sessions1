<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SessionController; 
use App\Http\Controllers\LoginController;

/* gestion des sessions */ 
Route::get('/session', function () { return view('session'); }); 

Route::get('/session/store', [SessionController::class, 'storeSession'])->name('session.store'); 
Route::get('/get-session', [SessionController::class, 'getSession'])->name('session.get'); 
Route::get('/session/delete', [SessionController::class, 'deleteSession'])->name('session.delete'); 
Route::get('/session/clear', [SessionController::class, 'clearAllSessions'])->name('session.clear'); 
Route::get('/session/regenerate', [SessionController::class, 'regenerateSession'])->name('session.regenerate'); 
Route::get('/session/increment', [SessionController::class, 'incrementCounter'])->name('session.increment'); 
Route::get('/session/decrement', [SessionController::class, 'decrementCounter'])->name('session.decrement'); 
Route::get('/logout', [SessionController::class, 'logout'])->name('logout'); 
// Traiter la connexion 
Route::post('/login', [LoginController::class, 'login']); 
// Afficher le formulaire de connexion 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
