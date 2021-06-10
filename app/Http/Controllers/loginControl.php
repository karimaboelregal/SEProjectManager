<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class loginControl extends Controller {
    public function doLogin(Request $request){
        $email = $request->input('Email');
        $password = $request->input('password');
        $user = DB::table('users')->where('Email',$email)->join('role', 'role.id', '=', 'users.RoleId')->where('Password', $password)->get();
        if ($user->isEmpty()) {
            return view('login', [
                'errorMessage' => 'error too long']);
        } else {
            \Session::put('loggedIn', 1);
            \Session::put('userData', $user[0]);
            if (($user[0]->Name) == "Professor"){
                return redirect('home');
            } else {
                return redirect('student_home');
            }
        }

    }
    public function showLogin() {
        return view ('login');
    }
    public function logout() {
        \Session::put('loggedIn', 0);
        \Session::put('userData', NULL);
        return redirect('login');
    }
}
