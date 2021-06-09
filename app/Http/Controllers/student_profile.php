<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student_profile extends Controller
{
    
    public function viewprofile(Request $request,$id){

        $info = DB::table('users')->where('id',$id)->get();
        return view('users',['users'=>$info]);
 
 
     }
     public function editprofile(Request $request){

        $id = $request->input('id');
        $name = $request->input('Surname');
        $email = $request->input('Email');
        $pref = $request->input('Preference');
        $phone = $request->input('Phone');
        $Gpa = $request->input('skills');
        $skill = $request->input('Gpa');
        

        DB::table('users')->where('id',$id)->update([
            'Surname'=>$name,
            'Email' =>$email,
            'Prefrence'=>$pref,
            'Phone' => $phone,
            'Gpa' =>$Gpa,
            'skills'=>$skill,
            
        ]);

        return \redirect('/projects');
    }

}
