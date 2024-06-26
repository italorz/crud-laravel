<?php

use App\Http\Controllers\CorretorController;
use App\Models\Corretor;
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

Route::resource('corretores', CorretorController::class);
Route::get('/corretores/create', [CorretorController::class, 'create'])->name('corretores.create');
Route::post('/corretores', [CorretorController::class, 'store'])->name('corretores.store');
Route::delete('/corretores/{id}', [CorretorController::class, 'delete'])->name('corretores.destroy');
Route::redirect('/','corretores');



