<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\student_profileController; 
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\loginControl;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\DiscussionController;


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

Route::get('/login', [loginControl::class,'showLogin'])->name('showLogin');


Route::post('/login', [loginControl::class,'doLogin'])->name('doLogin');
Route::get('/logout', [loginControl::class,'logout'])->name('logout');


Route::get('/users', function () {
    return view('users');
});


Route::get('/users', [UsersController::class,'index'])->name('index');
Route::get('/edituser/{id}', [UsersController::class,'editUser'])->name('editUser');


Route::get('/student_team', [TeamController::class,'index'])->name('student_team');

Route::post('/AcceptInvitation', [TeamController::class,'AcceptInvitation'])->name('AcceptInvitation');

Route::post('/InviteStudent', [TeamController::class,'InviteStudent'])->name('InviteStudent');

Route::post('/CreateTeam', [TeamController::class,'CreateTeam'])->name('CreateTeam');

Route::get('/EnrolledStudents/{id}', [CoursesController::class,'EnrolledStudents'])->name('EnrolledStudents');

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::post('/createNewTask', [HomeController::class,'createNewTask'])->name('createNewTask');

Route::post('/UpdateTask', [HomeController::class,'UpdateTask'])->name('UpdateTask');


Route::get('/projectstate', function () {
    return view('projectstate');
});

Route::get('/', function () {
    return view('login');
});


//surveys
Route::get('/surveys', function () {
    return view('surveys');
});
Route::get('/surveys/{id}', [SurveyController::class,'SurveyFromCourse'])->name('SurveyFromCourse');

Route::get('/surveybuild', function () {
    return view('surveybuild');
});

Route::get('/student_survey', function () {
    return view('student_survey');
});


Route::get('/surveyinsights', function () {
    return view('surveyinsights');
});

Route::get('/createTemplate', [ProjectController::class,'projTempPage'])->name('projTempPage');
Route::post('/createTemplate', [ProjectController::class,'insertProjTemp'])->name('insertProjTemp');

Route::get('/ViewSurvey/{id}', [SurveyController::class,'ViewSurvey'])->name('ViewSurvey');
Route::get('/ViewSurveyInsights/{id}', [SurveyController::class,'ViewSurveyInsights'])->name('ViewSurveyInsights');
Route::post('/InsertSurvey', [SurveyController::class,'InsertSurvey'])->name('InsertSurvey');

Route::post('/store', [DiscussionController::class,'store'])->name('store');

Route::get('/courses', [CoursesController::class,'index'])->name('index');

Route::get('/ViewCourse/{id}', [CoursesController::class,'ViewCourse'])->name('ViewCourse');

Route::get('/ViewStudentCourse/{id}', [CoursesController::class,'ViewStudentCourse'])->name('ViewStudentCourse');


Route::get('InsertAnswer',[SurveyController::class,'InsertAnswer']);
Route::post('InsertAnswer', [SurveyController::class,'InsertAnswer'])->name('InsertAnswer');

Route::get('/createCourseForm', [CoursesController::class,'createCourseForm'])->name('createCourseForm');

Route::post('/createNewCourse', [CoursesController::class,'createNewCourse'])->name('createNewCourse');

Route::post('/editCourse', [CoursesController::class,'editCourse'])->name('editCourse');

Route::get('/editCourseForm/{id}', [CoursesController::class,'editCourseForm'])->name('editCourseForm');

Route::get('/deleteCourse/{id}', [CoursesController::class,'deleteCourse'])->name('deleteCourse');

Route::get('/projects', [ProjectController::class,'index'])->name('index');
Route::get('/student_projects', [ProjectController::class,'showStudent'])->name('showStudent');
Route::get('/project_template/{id}', [ProjectController::class,'projTemp'])->name('projTemp');


Route::get('/ViewProject/{id}', [ProjectController::class,'ViewProject'])->name('ViewProject');
Route::get('/ViewStudentProject/{id}', [ProjectController::class,'ViewStudentProject'])->name('ViewStudentProject');

Route::get('/createProjectForm', [ProjectController::class,'createProjectForm'])->name('createProjectForm');

Route::post('/createNewProject', [ProjectController::class,'createNewProject'])->name('createNewProject');

Route::post('/editProject', [ProjectController::class,'editProject'])->name('editProject');

Route::get('/editProjectForm/{id}', [ProjectController::class,'editProjectForm'])->name('editProjectForm');

Route::get('/deleteProject/{id}', [ProjectController::class,'deleteProject'])->name('deleteProject');


Route::get('/editProfile', [student_profileController::class,'editprofile'])->name('editprofile');

Route::get('/student_profile', [student_profileController::class,'index'])->name('index');


Route::get('/student_home', [CoursesController::class,'viewStudentCourses'])->name('viewStudentCourses');


Route::get('/course', function () {
    return view('course');
});

Route::get('/student_course', function () {
    return view('student_course');
});

Route::get('/student_project', function () {
    return view('student_project');
});



//showing errors uncommenting for now
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
