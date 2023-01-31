<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SidebarController;
use App\Models\Movie;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{id}', [MovieController::class, 'show']);

Route::get('/add', function () {
    return view('add');
});
Route::post('/add', [MovieController::class, 'store']);
Route::post('/movies/add',[CommentController::class, 'store']);

Route::get('/genres/{genre}', [GenresController::class, 'show']);
Route::get('/genres', [GenresController::class, 'index']);
Route::get('/genres', [SidebarController::class, 'index']);
Route::get('/', [SidebarController::class, 'index2']);


