<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;

class UsersController extends Controller {
    public function index(){
        $users = DB::table('users')->get();
        return view ('users',['users'=>$users]);
    }

    public function viewUser(Request $request,$id){
        $project = DB::table('users')->where('id',$id)->get();
        return view('users',['users'=>$project]);
    }

}
