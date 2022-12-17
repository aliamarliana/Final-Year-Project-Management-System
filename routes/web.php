<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;

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

Route::get("/",[homeControl::class,'index']);
Route::get("/redirect",[homeControl::class,"redirectFunct"]);
Route::get("/list-of-project",[adminControl::class,'list']);
Route::get("/add-project",[adminControl::class,'add']);
Route::post("/store-project",[adminControl::class,'store']);
Route::get('delete/{id}',[adminControl::class,'delete']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
