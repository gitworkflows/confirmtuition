<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class DashboardPagesController extends Controller
{
    public function index()
    {   
        $data['birth_count'] = Application::where('certificate_type', 'birth')->count();
        $data['death_count'] = Application::where('certificate_type', 'death')->count();
        $data['number_count'] = Application::where('certificate_type', 'number')->count();
        $data['certificate_count'] = Application::where('certificate_type', 'certificate')->count();
        $data['registration_count'] = Application::where('certificate_type', 'registration')->count();
        $data['user_count'] = Application::count();
        return view('backend.home', $data);
    }
    public function applications()
    {   
        $applications = Application::orderBy('id','DESC')->get();
        return view('backend.applications', compact('applications'));
    }
    public function application($id)
    {   
        $data['application'] = Application::find($id);
        $data['data'] = Application::find($id);
        return view('backend.application', $data);
    }
    public function invoice($id)
    {   
        $user_id = Application::find($id)->user_id;
        $data['user'] = User::where('id', $user_id)->first();
        $data['data'] = Application::find($id);
        $pdf = PDF::loadView('backend.order.invoice', $data);
        return $pdf->download('certificate.pdf');
        // return view('backend.order.invoice', $data);
    }
}
