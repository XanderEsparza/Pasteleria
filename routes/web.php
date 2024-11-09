<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PastelController;

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
    return redirect()->route('pastel.index');
});

Route::get('/pastel', [PastelController::class, 'index'])->name('pastel.index');
Route::get('/pastel/create', [PastelController::class, 'create'])->name('pastel.create');
Route::post('/pastel/store', [PastelController::class, 'store'])->name('pastel.store');
Route::get('/pastel/edit/{pastel}', [PastelController::class, 'edit'])->name('pastel.edit');
Route::put('/pastel/update/{pastel}', [PastelController::class, 'update'])->name('pastel.update');
Route::get('/pastel/show/{pastel}', [PastelController::class, 'show'])->name('pastel.show');
Route::delete('/pastel/destroy/{pastel}', [PastelController::class, 'destroy'])->name('pastel.destroy');

Route::get('/imagen/{id}', [PastelController::class, 'mostrarImagen'])->name('pastel.mostrarImagen');

