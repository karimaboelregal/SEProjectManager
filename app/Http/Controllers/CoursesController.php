<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index(){
        $courses = DB::table('courses')
        ->join('users', 'users.id', '=', 'courses.InstructorId')
        ->select('courses.*', 'users.Surname as instructor_name')
        ->get();
        return view ('courses',['courses'=>$courses]);
    }

    public function ViewCourse(Request $request,$id=1){

        $courseObj = DB::table('courses')->where('courses.id',$id)->get();
        $surveysObj = DB::table('survey')
        ->join('courses','courses.id','=','survey.CourseId')
        ->select('survey.id','survey.SurveyName')
        ->get();

        $courseInfo = array("courseObj"=>$courseObj,"surveysObj"=> $surveysObj);
        $temps = DB::table('projecttemplate')
        ->join('projecttemplatecourses', 'projecttemplatecourses.projectTempID', '=', 'projecttemplate.id')
        ->where('projecttemplatecourses.courseID', '=', $id)
        ->get();
        return view('course',['courseInfo'=>$courseInfo], ['projTemps'=>$temps]);
 
 
     }

     public function ViewStudentCourse(Request $request,$id){

        $courseObj = DB::table('courses')->where('courses.id',$id)->get();
        $surveysObj = DB::table('survey')
        ->join('courses','courses.id','=','survey.CourseId')
        ->select('survey.id','survey.SurveyName')
        ->get();

        $userid = \Session::get('userData')->userid;

        $invite_students = DB::table('users')
        ->select('users.id as userId','users.Surname', 'users.UniversityId','users.Preference')
        ->join('course_taken','course_taken.StudentId','=','users.id')
        ->where('RoleId',3)
        ->where('users.id','<>',$userid)
        ->where('course_taken.CourseId',$id)
        ->get();
        $courseInfo = array("courseObj"=>$courseObj,"surveysObj"=> $surveysObj);
        //the below query will malfucntion because of using wild cards
        $temps = DB::table('projecttemplate')
        ->join('projecttemplatecourses', 'projecttemplatecourses.projectTempID', '=', 'projecttemplate.id')
        ->join('project','projecttemplate.id','=','project.ProjectTemplateId')
        ->join('team','team.id','=','project.TeamId')
        ->join('team_members','team.id','=','team_members.TeamId')
        ->where('projecttemplatecourses.courseID', '=', $id)
        ->where('team.LeaderId','=',$userid)
        ->orWhere('team.id' ,'=',$userid)
        ->groupby('project.id','projecttemplate.id','projecttemplate.templateName','projecttemplate.description')
        ->select('projecttemplate.*','project.id as projectid')
        ->get();
        return view('student_course',['courseInfo'=>$courseInfo,'invite_students'=>$invite_students],['projTemps'=>$temps]);
 
     }

     public function createCourseForm(){
        $users = DB::table('users')->get();
        return view ('createCourseForm',['users'=>$users]);
    }

     public function createNewCourse(Request $request){
        $name = $request->input('Name');
        $description = $request->input('Description');
        $code = $request->input('Code');
        $instructor_id = $request->input('instructor_id');

        DB::table('courses')->insert([
            'Name'=>$name,
            'Description' =>$description,
            'Code'=>$code,
            'InstructorId' => $instructor_id
        ]);

        return \redirect('/courses');
    }

    public function editCourse(Request $request){

        $id = $request->input('id');
        $name = $request->input('Name');
        $description = $request->input('Description');
        $code = $request->input('Code');
        $instructor_id = $request->input('instructor_id');

        DB::table('courses')->where('id',$id)->update([
            'Name'=>$name,
            'Description' =>$description,
            'Code'=>$code,
            'InstructorId' => $instructor_id
        ]);

        return \redirect('/courses');
    }

    public function editCourseForm(Request $request,$id){

        $course = DB::table('courses')->where('id',$id)->get();
        $users = DB::table('users')->get();
        return view('editCourseForm',['course'=>$course,'users'=>$users]);

    }

    public function deleteCourse(Request $request,$id){

        $courses = DB::table('courses')->where('id',$id)->delete();
        return \redirect('/courses');
 
 
     }
     public function viewStudentCourses(){
        if (!\Session::get('loggedIn')) {
            return redirect('/login');
        }
        $courses = DB::table('course_taken')
        ->join('courses', 'courses.id', '=', 'course_taken.CourseId')
        ->join('users', 'users.id', '=', 'courses.InstructorId')
        ->select('courses.*', 'users.Surname as InstructorName')
        ->where('course_taken.StudentId', '=', \Session::get("userData")->userid)
        ->get();
        return view ('student_home', ['courses'=>$courses]);
    }
}
