<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $userid = \Session::get('userData')->userid;

        // get team info 
        $teams = DB::table('team')->select('team.id','team.Name as teamName','courses.Name')->join('courses', 'courses.id', '=', 'team.CourseId')->where('LeaderId',$userid)->get();
        
        // get student team invitations
        $team_invitations = DB::table('invitations')->select('invitations.id','invitations.InvitorId','users.Surname as InvitorName','users.UniversityId','users.Preference')
        ->join('users', 'users.id', '=', 'invitations.InvitorId')
        ->where('InvitedId',$userid)->where('Status',0)->get();
        
        // get accepted student
        $team_acceptance = DB::table('invitations')->select('invitations.id','users.Surname as InvitorName','users.UniversityId','users.Preference')
        ->join('users', 'users.id', '=', 'invitations.InvitorId')
        ->where('InvitedId',$userid)->where('Status',1)->get();

        return view ('student_team',['teams'=>$teams,'team_invitations'=>$team_invitations,'team_acceptance'=>$team_acceptance]);
    }

    public function AcceptInvitation(Request $request){

        $invitedid = \Session::get('userData')->userid;
        $invitorid = $request->input('invitorid');

        DB::table('invitations')->where('InvitorId',$invitorid)->where('InvitedId',$invitedid)->update([
            'Status'=>1,
        ]);

        return \redirect('/student_team');
    }

    public function InviteStudent(Request $request){
        // list of students enrolled in course
        $invitedid = $request->input('userId');
        $invitorid = \Session::get('userData')->userid;

        DB::table('invitations')->insert([
            'Status'=>0,
            'InvitorId' =>$invitorid,
            'InvitedId'=>$invitedid,
        ]);

        return \redirect('/student_home');
    }

    public function CreateTeam(Request $request){
        // list of students enrolled in course
        $invitedid = $request->input('userId');
        $invitorid = \Session::get('userData')->userid;

        DB::table('invitations')->insert([
            'Status'=>0,
            'InvitorId' =>$invitorid,
            'InvitedId'=>$invitedid,
        ]);

        return \redirect('/student_home');
    }
}
