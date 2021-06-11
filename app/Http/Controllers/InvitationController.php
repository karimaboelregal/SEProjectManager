<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Home;

class InvitationController extends Controller
{
    public function index()
    {
        $invitations = DB::table('invitations')->get();
        return view('student_team',['invitations'=>$invitations]);
    }
}
