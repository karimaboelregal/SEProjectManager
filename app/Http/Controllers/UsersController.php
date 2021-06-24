<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller {
    public function index() {
        $users = User::select('users.id', 'Email','Surname','RoleId','role.Name')->join('role', 'role.id', '=', 'users.RoleId')->get();
        $course = DB::table('courses')->get();
        return view ('users',['users'=>$users, 'courses'=>$course]);
    }

    public function deleteusers(Request $request) {
        print_r(Input::all());
        #print_r ($request->all());
        #print_r ($request->input('delete'));
        //User::find($request->input('deleteThis'))->delete();
        #Session::get
    }
    public function deleteAll() {
        User::whereNotNull('id')->delete();
        return \redirect('/users');
    }
    public function download() {
        return Excel::download(new UsersExport, 'user data.csv');
        #return \redirect('/users');
    }

    public function profilepicture(Request $request) {
        $path = $request->file('file')->store('public/profiles');
        $s = Storage::exists('public/profiles/'.\Session::get("userData")->userid.'.jpg');
        if ($s) {
            Storage::delete('public/profiles/'.\Session::get("userData")->userid.'.jpg');
        }
        Storage::move($path, 'public/profiles/'.\Session::get("userData")->userid.'.jpg');
        Storage::delete($path);
        return \redirect('/profile');
    }
    public function editedProfile(Request $request) {
        $id = \Session::get("userData")->userid;
        DB::table('users')->where('id',$id)->update([
            'Surname'=>$request->input('surnameInput'),
            'Email' =>$request->input('emailInput'),
            'Phone'=>$request->input('phoneInput'),
            'Preference' => $request->input('prefInput'),
            'UniversityId' =>$request->input('UniversityId'),
            'GPA'=>$request->input('gpaInput')
        ]);
        $user = DB::table('users')->select('users.id as userid','role.Name','users.*')->where('users.id',$id)->join('role', 'role.id', '=', 'users.RoleId')->get();
        \Session::put("userData", $user[0]);
        return \redirect('/profile');
    }
    public function storeUserSub(Request $request) {
        $courses = DB::table('courses')->select("id", "Name")->get();
        \Session::put("course_taken", $courses[0]->id);
        unset($courses[0]);
        foreach ($courses as $c) {
            echo $request->input($c->Name);
            if ($request->input($c->Name) == 1) {
                \Session::put("course_taken", \Session::get("course_taken").", ".$c->id);
            }
        }
        $path = $request->file('file')->store('temp');
        Excel::import(new UsersImport, $path);
        return redirect ('/users');

    }

    public function editUser(Request $request,$id) {
        $users = DB::table('users')->select('users.id', 'Email','Surname','RoleId','role.Name')->join('role', 'role.id', '=', 'users.RoleId')->where('users.id',$id)->get();
        $roles = DB::table('role')->get();
        return view('edituser',['users'=>$users],['roles'=>$roles]);
    }

    public function fileImport(Request $request) {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return back();
    }

    public function fileExport() 
    {
        return Excel::download(new UsersExport, 'users-collection.xlsx');
    }   

}
