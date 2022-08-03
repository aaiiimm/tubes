<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

// Route definition...
Route::get('/aggregrate/{rss_id}', [NewsController::class, 'aggregrate']);
Route::get('/', [App\Http\Controllers\FeedController::class, 'index']);

Route::get('/Europe', function () {
    return view('Europe');
});
Route::get('/Europe', [App\Http\Controllers\EuropeController::class, 'index']);

Route::get('/Health', function () {
    return view('Health');
});
Route::get('/Health', [App\Http\Controllers\HealthController::class, 'index']);

Route::get('/Hongkong', function () {
    return view('Hongkong');
});
Route::get('/Hongkong', [App\Http\Controllers\HongkongController::class, 'index']);

Route::get('/rafifeed', function () {
    return view('rafifeed');
});


Route::get('/pokemon', function () {
    return view('pokemon');
});
Route::get('/show/{pokemon_name}', [NewsController::class, 'show']);