<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MajorController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/features', [HomeController::class, 'services'])->name('services');
Route::get('/travel', [HomeController::class, 'contact'])->name('contact');
//database
// // untuk mengeluarkan list data
// Route::get('/student', [StudentController::class, 'index']);
// // untuk mengeluarkan form view insert
// Route::get('/student/create', [StudentController::class, 'create']);
// // untuk mengeluarkan form view update
// Route::get('/student/{id}/edit', [StudentController::class, 'edit']);
// // untuk menyimpan
// Route::post('/student', [StudentController::class, 'store']);
// // untuk edit
// Route::put('/student/{id}', [StudentController::class, 'update']);
// // untuk delete
// Route::delete('/student/{id}', [StudentController::class, 'destroy']);
//Route dibawah mewakili semua route diatas
Route::resource('student', StudentController::class);
Route::resource('major', MajorController::class);