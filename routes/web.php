<?php

use App\Http\Controllers\PetController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
//creaciom de las rutas :)
//Route::view('/{ruta a llamar}', '{visata que llama}', {datos o info}) ;
Route::view('/', 'Welcome')->name('home');

//ruta para adoptar mascotas
//aqui usamo el metodo get y le pasamos lo siguiente:
//Route::GET('/{ruta a llamar}', [nombre del controlador, funcion]) ;
Route::get('/adopt', [PetController::class, 'index'])->name('pets.index');

//mostrar mascotas
Route::get('/adopt/{pet}', [PetController::class, 'show'])->name('pets.show');
Route::get('/adopt/{pet}/form', [PetController::class, 'form'])->name('pets.adopt');

//ruta para subir mascotas en adopcion
Route::view('/adoption', 'adoption')->name('adoption');

//creacion de mascotas
Route::get('/adoption/create', [PetController::class, 'create'])->name('pets.create')->middleware('auth');
Route::post('/adoption', [PetController::class, 'store'])->name('pets.store');

//edicion de mascotas
Route::get('/adopt/{pet}/edit', [PetController::class, 'edit'])->name('pets.edit');
Route::patch('/adopt/{pet}', [PetController::class, 'update'])->name('pets.update');

//eliminar mascotas
Route::delete('/adopt/{pet}', [PetController::class, 'destroy'])->name('pets.destroy');
//ruta de informacion
Route::view('/about', 'about');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);