<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!\Session::get('loggedIn')) {
            return redirect('/login');
        }
        $courses = DB::table('courses')->get();
        $projects = DB::table('project')->get();
        $professors = DB::table('users')->where('RoleId',1)->get();
        $students = DB::table('users')->where('RoleId',3)->get();
        $userid = \Session::get('userData')->userid;
        $TODO_List = DB::table('user_todo')->where('Active',1)->where('UserId',$userid)->get();
        $Done_List = DB::table('user_todo')->where('Active',0)->where('UserId',$userid)->get();
        $TotalCourses = $courses->count();
        $TotalProjects = $projects->count();
        $TotalProffesors = $professors->count();
        $TotalStudents = $students->count();
        return view('home',['Done_List'=>$Done_List,'TODO_List'=>$TODO_List,'TotalCourses'=>$TotalCourses,'TotalProjects'=>$TotalProjects,'TotalProffesors'=>$TotalProffesors,'TotalStudents'=>$TotalStudents]);
    }

    public function createNewTask(Request $request){

        $task = $request->input('TaskName');
        $active = 1;
        $userid = \Session::get('userData')->userid;

        DB::table('user_todo')->insert([
            'UserId' =>$userid,
            'Active'=>$active,
            'TODO_Description' =>$task,
            'created_at' => \Carbon\Carbon::now(),
        ]);

        return \redirect('/home');
    }

    public function UpdateTask(Request $request) {
        $validated = $request->validate(['Todo' => 'required',]);

        $tasks = $request->get('Todo');
        $active =0;
        foreach ($tasks as $task){
            DB::table('user_todo')->where('id',$task)->update([
                'Active'=>$active,
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
        return \redirect('/home');
    }
}
