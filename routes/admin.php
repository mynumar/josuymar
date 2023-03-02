<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\admin\InvitacioneController;

Route::resource('', HomeController::class)->names('admin');
Route::resource('invitaciones', InvitacioneController::class)->names('admin.invitaciones');