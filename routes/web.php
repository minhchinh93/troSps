<?php

use App\Http\Controllers\troController;
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
Route::get('/index', [troController::class, 'index'])->name('index');
// Route::get('/return', [troController::class])->name('return');
// Route::post('/trosps', [troController::class, 'trosps'])->name('trosps');
// dd('ok');
Route::post('/', [troController::class, 'trosps'])->name('trosps');
