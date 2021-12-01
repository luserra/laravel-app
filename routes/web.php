<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecetaController;


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

Route::get('/', HomeController::class)->name('home');

Route::resource('recipes', RecetaController::class); // Forma de crear rutas más simplificada / resources trae todas las rutas que creo en RecetaController

Route::view('about', 'about')->name('about'); // view se utiliza para generar una vista sin usar la DB

Route::get('contact', [ContactController::class, 'index'])->name('contact.index'); // toma la función index de ContactoController
 
Route::post('contact', [ContactController::class, 'store'])->name('contact.store'); // toma la función store de ContactoController


/* 
/// Crear rutas de a una: (lo suplanté con ::resources) ///
Route::get('recipes', [RecetaController::class, 'index'])->name('recipes.index');

Route::get('recipes/create', [RecetaController::class, 'create'])->name('recipes.create');

Route::post('recipes', [RecetaController::class, 'store'])->name('recipes.store');

Route::get('recipes/{id}', [RecetaController::class, 'show'])->name('recipes.show');

Route::get('recipes/{id}/edit', [RecetaController::class, 'edit'])->name('recipes.edit');

Route::put('recipes/{recipe}', [RecetaController::class, 'update'])->name('recipes.update');

Route::delete('recipes/{recipe}', [RecetaController::class, 'destroy'])->name('recipes.destroy'); */