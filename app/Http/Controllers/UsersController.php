<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Models\User;

class UsersController extends Controller {
    public function index() {
        $users = User::select('users.id', 'Email','Surname','RoleId','role.Name')->join('role', 'role.id', '=', 'users.RoleId')->get();
        return view ('users',['users'=>$users]);
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
        $path = $request->file('file')->store('temp');
        Excel::import(new UsersImport, $path);
        //echo $path;
        //print_r($request);
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
