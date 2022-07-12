<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/contacts/create', [ContactsController::class, 'create']);
Route::post('/contacts', [ContactsController::class, 'store']);

Route::resource('articles', ArticleController::class);

Route::get('/admin/feedback', [AdminController::class, 'feedback']);
