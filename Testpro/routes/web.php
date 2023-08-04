<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\postController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::post('/register',[UserController::class ,'register']);
Route::post('/logout',[UserController::class ,'logout']);
Route::post('/login',[UserController::class ,'login']);
//blog post routes
Route::post('/create-post',[postController::class ,'createPost']);

?>
