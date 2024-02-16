<?php

use Illuminate\Support\Facades\Route;


Route::get('/posts', [ Alexey\Posts\Http\Controllers\PostsController::class, 'index'] );