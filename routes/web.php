<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

//ブログ一覧画面を表示
Route::get('/', [BlogController::class, 'showList'])->name('blogs');

