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
        $teams = DB::table('team')->select('team.id','team.Name as teamName','courses.Name')
        ->join('courses', 'courses.id', '=', 'team.CourseId')
        ->join('team_members', 'team_members.TeamId', '=', 'team.id')
        ->where('team_members.TeamMemberId',$userid)->get();
        
        // get student team invitations
        $team_invitations = DB::table('invitations')->select('invitations.id','invitations.InvitorId','users.Surname as InvitorName','users.UniversityId','users.Preference')
        ->join('users', 'users.id', '=', 'invitations.InvitorId')
        ->where('InvitedId',$userid)->where('Status',0)->get();
        
        // get accepted student
        // $team_acceptance = DB::table('invitations')->select('invitations.id','users.Surname as InvitorName','users.UniversityId','users.Preference')
        // ->join('users', 'users.id', '=', 'invitations.InvitorId')
        // ->where('InvitedId',$userid)->where('Status',1)->get();

        $team_acceptance = DB::table('users')
        ->join('team_members', 'team_members.TeamMemberId', '=', 'users.id')
        ->join('team', 'team.id', '=', 'team_members.TeamId')->get();

        return view ('student_team',['teams'=>$teams,'team_invitations'=>$team_invitations,'team_acceptance'=>$team_acceptance]);
    }

    public function AcceptInvitation(Request $request){

        $invitedid = \Session::get('userData')->userid;
        $invitorid = $request->input('invitorid');
        $teamid = $request->input('teamid');

        DB::table('invitations')->where('InvitorId',$invitorid)->where('InvitedId',$invitedid)->update([
            'Status'=>1,
        ]);

        DB::table('team_members')->insert([
            'TeamMemberId'=>$invitorid,
            'TeamId'=>$teamid,
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

        return redirect()->back();
    }

    public function CreateTeam(Request $request){
        // list of students enrolled in course
        $courseid = $request->input('courseid2');
        $teamname = $request->input('TeamName');
        $leaderid = \Session::get('userData')->userid;

        DB::table('team')->insert([
            'CourseId'=>$courseid,
            'LeaderId' =>$leaderid,
            'Name' =>$teamname,
        ]);

        $id = DB::getPdo()->lastInsertId();;

        DB::table('team_members')->insert([
            'TeamId'=>$id,
            'TeamMemberId' =>$leaderid,
        ]);

        return redirect()->back();
    }
}
