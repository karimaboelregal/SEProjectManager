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

    public function ViewCourse(Request $request,$id){

        $course = DB::table('courses')->where('id',$id)->get();
        return view('course',['course'=>$course]);
 
 
     }

     public function createCourseForm(){
        return view ('createCourseForm');
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
    public function dropDownShow(Request $request){
        $items = DB::table('users')->get()->pluck('Surname','id');
        $selectID = 1;
        return view('course',['course'=>$course]);
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
        return view('editCourseForm',['course'=>$course]);

    }

    public function deleteCourse(Request $request,$id){

        $courses = DB::table('courses')->where('id',$id)->delete();
        return \redirect('/courses');
 
 
     }
}
