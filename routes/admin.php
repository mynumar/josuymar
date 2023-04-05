<?php

use App\Http\Controllers\Admin\ConfirmacioneController;
use App\Http\Controllers\Admin\DeseoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InvitacioneController;

Route::resource('', HomeController::class)->names('admin');
Route::resource('invitaciones', InvitacioneController::class)->names('admin.invitaciones');
Route::resource('confirmaciones', ConfirmacioneController::class)->names('admin.confirmaciones');
Route::resource('deseos', DeseoController::class)->names('admin.deseos');

Route::post('invitaciones/importInvitaciones', [InvitacioneController::class, 'importInvitaciones'])->name('admin.invitaciones.importInvitaciones');
