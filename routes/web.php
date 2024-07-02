<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

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

// ROTTA CHE MI STAMPA LA PAGINA HOME
Route::get('/', [PageController::class, "home"])->name("home");

//ROTTA CHE MI STAMPA LA PAGINA MOVIES I DATI STANNO DENTRO PAGECONTROLLER
Route::get('/movies', [PageController::class, "movie"])->name('movie');
