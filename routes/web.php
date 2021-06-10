<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;

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
    return redirect(route('login'));
});

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::post('/createNewTask', [HomeController::class,'createNewTask'])->name('createNewTask');

Route::post('/UpdateTask', [HomeController::class,'UpdateTask'])->name('UpdateTask');

Route::get('/users', function () {
    return view('users');
});

Route::get('/projectstate', function () {
    return view('projectstate');
});

Route::get('/courses', [CoursesController::class,'index'])->name('index');

Route::get('/ViewCourse/{id}', [CoursesController::class,'ViewCourse'])->name('ViewCourse');

Route::get('/createCourseForm', [CoursesController::class,'createCourseForm'])->name('createCourseForm') ;

Route::post('/createNewCourse', [CoursesController::class,'createNewCourse'])->name('createNewCourse');

Route::post('/editCourse', [CoursesController::class,'editCourse'])->name('editCourse');

Route::get('/editCourseForm/{id}', [CoursesController::class,'editCourseForm'])->name('editCourseForm');

Route::get('/deleteCourse/{id}', [CoursesController::class,'deleteCourse'])->name('deleteCourse');

Route::get('/projects', [ProjectController::class,'index'])->name('index');

Route::get('/ViewProject/{id}', [ProjectController::class,'ViewProject'])->name('ViewProject');

Route::get('/createProjectForm', [ProjectController::class,'createProjectForm'])->name('createProjectForm');

Route::post('/createNewProject', [ProjectController::class,'createNewProject'])->name('createNewProject');

Route::post('/editProject', [ProjectController::class,'editProject'])->name('editProject');

Route::get('/editProjectForm/{id}', [ProjectController::class,'editProjectForm'])->name('editProjectForm');

Route::get('/deleteProject/{id}', [ProjectController::class,'deleteProject'])->name('deleteProject');


Route::get('/edituser', function () {
    return view('edituser');
});

Route::get('/student_home', function () {
    return view('student_home');
});
Route::get('/student_projects', function () {
    return view('student_projects');
});

Route::get('/course', function () {
    return view('course');
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
});

Route::get('/student_survey', function () {
    return view('student_survey');
});

Auth::routes();


Auth::routes();

