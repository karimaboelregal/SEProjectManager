<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = DB::table('team')->select('team.id','team.Name as teamName','courses.Name')->join('courses', 'courses.id', '=', 'team.CourseId')->get();
        return view ('student_team',['teams'=>$teams]);
    }
}
