<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
    return view('homepage');
});
Route::get('/', function () {
    return "Hello from page1";
});
Route::get('/', [PagesController::class, 'pageCheck']);
Route::get('/contact_us', [PagesController::class, 'pageContact']);
Route::get('product/service', [PagesController::class, 'pageService']);
Route::get('/teams', [PagesController::class, 'pageTeams']);
Route::get('/aboutus', [PagesController::class, 'pageAbout']);

