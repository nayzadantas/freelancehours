<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

Route::get('/', [ ProjectsController::class, 'index' ])->name('projects.index');

Route::get('/project/{project}',[ ProjectsController::Class, 'show' ] )->name('projects.show');
