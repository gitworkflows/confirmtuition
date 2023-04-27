<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function jobs()
    {   
        $jobs = DB::table('jobs')
            ->leftJoin('location', 'jobs.location', 'location.id')
            ->select('jobs.*', 'location.name as location_name')
            ->orderBy('id', 'DESC')
            ->get();
        return view('backend.jobs.index', compact('jobs'));
    }
    public function newJob(Request $request)
    {   
        $data['job'] = DB::table('jobs')->find($request->id);
        $data['cities'] = DB::table('city')->get();
        if($data['job']){
            $data['subjects'] = explode(',', $data['job']->subjects);
        }else{
            $data['subjects'] = [];
        }
        return view('backend.jobs.create', $data);
    }
    public function storeJob(Request $request)
    {   
        // return $request->all();
        $data['name'] = $request->name;
        $data['tuition_type'] = $request->tuition_type;
        $data['student_gender'] = $request->student_gender;
        $data['preferred_tutor_gender'] = $request->preferred_tutor_gender;
        if($request->tutoring_time){
            $data['tutoring_time'] = $request->tutoring_time; 
        }
        $data['tutoring_days'] = $request->tutoring_days; 
        $data['number_of_students'] = $request->number_of_students; 
        $data['salary'] = $request->salary; 
        $data['subjects'] = implode(",", $request->subjects);
        $data['city'] = $request->city; 
        $data['location'] = $request->location; 
        $data['created_by'] = auth()->user()->id;
        $data['created_at'] = Carbon::now();
        $job = DB::table('jobs')->find($request->id);
        if($job){
            DB::table('jobs')->where('id', $request->id)->update($data);
            return redirect()->back()->with('success', 'Job updated successfully!');
        }else{
            DB::table('jobs')->insert($data);
            return redirect()->back()->with('success', 'Job added successfully!');
        }
    }
    public function joblist(Request $request)
    {   
        // return request()->posted_date_from;
        $query = DB::table('jobs')
            ->leftJoin('location', 'jobs.location', 'location.id')
            ->select('jobs.*', 'location.name as location_name');
        if (request()->posted_date_from != null) {
            $query = $query->where('jobs.created_at', '>=', request()->posted_date_from);
        }
        if (request()->posted_date_to != null) {
            $query = $query->where('jobs.created_at', '<=' , request()->posted_date_to);
        }
        if (request()->tuition_type != null) {
            $query = $query->where('jobs.tuition_type', request()->tuition_type);
        }
        if (request()->student_gender != null) {
            $query = $query->where('jobs.student_gender', request()->student_gender);
        }
        if (request()->preferred_tutor_gender != null) {
            $query = $query->where('jobs.preferred_tutor_gender', request()->preferred_tutor_gender);
        }
        
        $data['jobs'] = $query->orderBy('id', 'DESC')->get();
        $data['cities'] = DB::table('city')->get();
        return view('jobs', $data);
    }
}
