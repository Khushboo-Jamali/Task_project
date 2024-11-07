<?php

use App\Http\Controllers\studentController;
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
Route::get('index', function () {
    return view('index');
});
Route::get('shop', function () {
    return view('layout.shop');
});
Route::get('services', function () {
    return view('layout.services');
});
Route::get('about', function () {
    return view('layout.about');
});
Route::get('contact', [studentController::class, 'layout']);
Route::post('data', [studentController::class, 'insert']);
Route::get('showdata', [studentController::class, 'showdata']);
Route::get('delete/{id}', [studentController::class, 'delete']);
Route::get('edit/{id}', [studentController::class, 'edit']);
Route::post('update/{id}', [studentController::class, 'update']);
// Route::get('contact', function () {
//     return view('layout.contact');
// });
Route::get('blog', function () {
    return view('layout.blog');
});
