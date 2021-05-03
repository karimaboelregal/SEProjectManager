<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/projects', function () {
    return view('projects');
});
<<<<<<< HEAD
Route::get('/edituser', function () {
    return view('edituser');
=======
Route::get('/student_home', function () {
    return view('student_home');
});

Route::get('/student_profile', function () {
    return view('student_profile');
});

Route::get('/student_team', function () {
    return view('student_team');
});

Route::get('/student_course', function () {
    return view('student_course');
});

Route::get('/student_project', function () {
    return view('student_project');
>>>>>>> fe0242646e5f824fd728d4120766f25f970360ac
});

Auth::routes();


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
