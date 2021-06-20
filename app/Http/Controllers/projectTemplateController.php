<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class projectTemplateController extends Controller
{
    public function index(){
        $projects = DB::table('projecttemplatecourses')->get();
        print_r($projects);
        //return view ('projects',['projects'=>$projects]);
    }

}
