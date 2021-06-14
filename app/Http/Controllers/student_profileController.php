<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class student_profileController extends Controller
{
    
    public function index(){
        $userid = \Session::get('userData')->userid;
        $userinfo = DB::table('users')->where('id',$userid)->get();
        
        return view('student_profile',['userinfo'=>$userinfo]);
     }
     public function editprofile(Request $request){

        $id = $request->input('id');
        $name = $request->input('Surname');
        $email = $request->input('Email');
        $pref = $request->input('Preference');
        $phone = $request->input('Phone');
        $Gpa = $request->input('skills');
        $skill = $request->input('Gpa');
        $image = $request ->input('image');

        DB::table('users')->where('id',$id)->update([
            'Surname'=>$name,
            'Email' =>$email,
            'Prefrence'=>$pref,
            'Phone' => $phone,
            'Gpa' =>$Gpa,
            'skills'=>$skill,
            
        ]);

        return \redirect('/student_profile');
    }

}
