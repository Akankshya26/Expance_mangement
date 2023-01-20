<?php

use App\Http\Controllers\TestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('login', [TestController::class, 'index']);
Route::get('signup', [TestController::class, 'showsignup']);
Route::get('fpwd', [TestController::class, 'forgot']);
Route::get('rpsw', [TestController::class, 'rpass']);
Route::get('dashbord', [TestController::class, 'dashbord']);
