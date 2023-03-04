<?php

use App\Http\Controllers\DeseoController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/confirmar-asistencia', [HomeController::class, 'confirmarAsistencia'])->name('confirmar-asistencia');

Route::resource('historia', HistoriaController::class)->names('historia');
Route::resource('deseos', DeseoController::class)->names('deseos');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
