<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function tutors(){
        $data['users'] = User::where('role', 3)->orderBy('id', 'DESC')->get();
        return view('backend.member.tutors', $data);
    }
    
    public function tutorlist(){
        $data['tutors'] = DB::table('users')
        ->leftJoin('job_preferences', 'users.id', 'job_preferences.user_id')
        ->leftJoin('city', 'job_preferences.city', 'city.id')
        ->leftJoin('location', 'job_preferences.location', 'location.id')
        ->select('users.*', 'job_preferences.*', 'city.name as city_name', 'location.name as location_name')
        ->where('users.role', 2)
        ->orderBy('id', 'DESC')
        ->get();
        // return $data['tutors'];
        return view('tutors', $data);
    }
}
