<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


// Route::get('/products', function () {
//     return view('show');
// });

Route::get('/students', function () {
    return view('students.index');
});
// Route::resource('products', ProductController::class);

Route::resource('products', 'App\Http\Controllers\ProductController');
Route::resource('students', 'App\Http\Controllers\StudentController');


