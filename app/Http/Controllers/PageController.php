<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use Auth;
use PDF;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function application_form()
    {
        return view('application_form');
    }
    public function application_store(Request $request)
    {
        // return $request->all();
        $user = new User;
        $user->role = 2;
        $user->name = $request->correct_name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
        $user->save();


        $app_submit = new Application;
        $app_submit->reg_number = $request->reg_number;
        $app_submit->birth_reg_number = $request->birth_reg_number;
        $app_submit->death_reg_number = $request->death_reg_number;
        $app_submit->incorrect_name = $request->incorrect_name;
        $app_submit->correct_name = $request->correct_name;
        $app_submit->efemale = $request->efemale;
        $app_submit->father = $request->father;
        $app_submit->mother = $request->mother;
        $app_submit->mobile = $request->mobile;
        $app_submit->email = $request->email ?? auth()->user()->email;
        $app_submit->address = $request->address;
        $app_submit->essc = $request->essc;
        $app_submit->birthdate = $request->birthdate;
        $app_submit->birthplace = $request->birthplace;
        $app_submit->deathhdate = $request->deathhdate;
        $app_submit->deathplace = $request->deathplace;
        $app_submit->emale = $request->emale;
        $app_submit->app_photo = $request->app_photo;
        $app_submit->certificate_type = $request->certificate_type;
        $app_submit->exam = $request->exam;
        $app_submit->exam_name = $request->exam_name;
        $app_submit->year = $request->year;
        $app_submit->institute = $request->institute;
        $app_submit->board = $request->board;
        $app_submit->country = $request->country;
        $app_submit->group = $request->group;
        $app_submit->result = $request->result;
        $app_submit->sub1 = $request->sub1;
        $app_submit->sub2 = $request->sub2;
        $app_submit->sub3 = $request->sub3;
        $app_submit->sub4 = $request->sub4;
        $app_submit->sub5 = $request->sub5;
        $app_submit->sub6 = $request->sub6;
        $app_submit->sub7 = $request->sub7;
        $app_submit->sub8 = $request->sub8;
        $app_submit->sub9 = $request->sub9;
        $app_submit->sub10 = $request->sub10;
        $app_submit->sub11 = $request->sub11;
        $app_submit->sub12 = $request->sub12;
        // Default image
        $defaultImage = $request->file('app_photo');
        if ($defaultImage) {
            $imageName = time() . '_' . uniqid() . '.' . $defaultImage->getClientOriginalExtension();
            $defaultImage->move(base_path('public/uploaded/product'), $imageName);
            $app_submit->app_photo = '/uploaded/product/' . $imageName;
        }
        $defaultImagebc = $request->file('birth_certificate');
        if ($defaultImagebc) {
            $imageName = time() . '_' . uniqid() . '.' . $defaultImagebc->getClientOriginalExtension();
            $defaultImagebc->move(base_path('public/uploaded/product'), $imageName);
            $app_submit->birth_certificate = '/uploaded/product/' . $imageName;
        }
        $defaultImagerc = $request->file('reg_card');
        if ($defaultImagerc) {
            $imageName = time() . '_' . uniqid() . '.' . $defaultImagerc->getClientOriginalExtension();
            $defaultImagerc->move(base_path('public/uploaded/product'), $imageName);
            $app_submit->reg_card = '/uploaded/product/' . $imageName;
        }
        $defaultImagebt = $request->file('board_testimonial');
        if ($defaultImagebt) {
            $imageName = time() . '_' . uniqid() . '.' . $defaultImagebt->getClientOriginalExtension();
            $defaultImagebt->move(base_path('public/uploaded/product'), $imageName);
            $app_submit->board_testimonial = '/uploaded/product/' . $imageName;
        }
        $defaultImagesc = $request->file('ssc_certificate');
        if ($defaultImagesc) {
            $imageName = time() . '_' . uniqid() . '.' . $defaultImagesc->getClientOriginalExtension();
            $defaultImagesc->move(base_path('public/uploaded/product'), $imageName);
            $app_submit->ssc_certificate = '/uploaded/product/' . $imageName;
        }
        $defaultImagems = $request->file('marksheet');
        if ($defaultImagems) {
            $imageName = time() . '_' . uniqid() . '.' . $defaultImagems->getClientOriginalExtension();
            $defaultImagems->move(base_path('public/uploaded/product'), $imageName);
            $app_submit->marksheet = '/uploaded/product/' . $imageName;
        }
        $defaultImagebc = $request->file('death_certificate');
        if ($defaultImagebc) {
            $imageName = time() . '_' . uniqid() . '.' . $defaultImagebc->getClientOriginalExtension();
            $defaultImagebc->move(base_path('public/uploaded/product'), $imageName);
            $app_submit->death_certificate = '/uploaded/product/' . $imageName;
        }
        $defaultImagebc = $request->file('citizen_certificate');
        if ($defaultImagebc) {
            $imageName = time() . '_' . uniqid() . '.' . $defaultImagebc->getClientOriginalExtension();
            $defaultImagebc->move(base_path('public/uploaded/product'), $imageName);
            $app_submit->citizen_certificate = '/uploaded/product/' . $imageName;
        }
        $defaultImageac = $request->file('admit_card');
        if ($defaultImageac) {
            $imageName = time() . '_' . uniqid() . '.' . $defaultImageac->getClientOriginalExtension();
            $defaultImageac->move(base_path('public/uploaded/product'), $imageName);
            $app_submit->admit_card = '/uploaded/product/' . $imageName;
        }
        $app_submit->user_id = $user->id;
        $app_submit->save();
        $lastId = $app_submit->id;

        return redirect()->back()->with('success', 'Application Received Successfully! Store your application id - ' . $lastId);
    }
    public function birth(Request $request)
    {
        $type = 'birth';
        return view('application_form', compact('type'));
    }
    public function death(Request $request)
    {
        $type = 'death';
        return view('application_form', compact('type'));
    }
    public function number(Request $request)
    {
        $type = 'number';
        return view('application_form', compact('type'));
    }
    public function admit(Request $request)
    {
        $type = 'admit';
        return view('application_form', compact('type'));
    }
    public function certificate(Request $request)
    {
        $type = 'certificate';
        return view('application_form ', compact('type'));
    }
    public function registration(Request $request)
    {
        $type = 'registration';
        return view('application_form', compact('type'));
    }
    public function status(Request $request)
    {
        return view('status');
    }
    public function reset(Request $request)
    {
        return view('reset');
    }
    public function complain(Request $request)
    {
        return view('complain');
    }
    public function jobs(Request $request)
    {
        return view('jobs');
    }
    public function profile()
    {   
        $data['personal_info'] = DB::table('personal_info') ->where('user_id', auth()->user()->id) ->first();
        $data['job_preferences'] = DB::table('job_preferences') ->where('user_id', auth()->user()->id) ->first();
        $data['educational_information'] = DB::table('educational_information') ->where('user_id', auth()->user()->id) ->get();
        $city = DB::table('city')->find($data['job_preferences']->city);
        $data['job_preferences']->city_name = $city->name;
        $location = DB::table('location')->find($data['job_preferences']->location);
        $data['job_preferences']->location_name = $location->name;
        return view('profile', $data);
    }
    public function editProfile()
    {   
        $data['personal_info'] = DB::table('personal_info') ->where('user_id', auth()->user()->id) ->first();
        return view('edit_profile', $data);
    }
    public function editBasicInfo()
    {   
        $data['personal_info'] = DB::table('personal_info') ->where('user_id', auth()->user()->id) ->first();
        return view('edit_basic_info', $data);
    }
    public function editCredentials()
    {   
        $data['personal_info'] = DB::table('personal_info') ->where('user_id', auth()->user()->id) ->first();
        return view('edit_credentials', $data);
    }
    public function editPersonalInfo()
    {   
        $data['personal_info'] = DB::table('personal_info') ->where('user_id', auth()->user()->id) ->first();
        return view('edit_personal_info', $data);
    }
    public function editJobPreferences ()
    {   
        $data['personal_info'] = DB::table('personal_info') ->where('user_id', auth()->user()->id) ->first();
        $data['job_preferences'] = DB::table('job_preferences') ->where('user_id', auth()->user()->id) ->first();
        $data['cities'] = DB::table('city')->get();
        $data['categories'] = explode(',', $data['job_preferences']->categories);
        $data['classes'] = explode(',', $data['job_preferences']->classes);
        $data['subjects'] = explode(',', $data['job_preferences']->subjects);
        $data['tutoring_place'] = explode(',', $data['job_preferences']->tutoring_place);
        $data['available_days'] = explode(',', $data['job_preferences']->available_days);
        $data['preferred_location'] = explode(',', $data['job_preferences']->preferred_location);
        return view('edit_job_preferences ', $data);
    }
    public function getLocation($city_id){
        $locations = DB::table('location')->where('city_id', $city_id)->get();
        return response()->json($locations);
    }
    public function editEducationalInformation()
    {   
        $data['personal_info'] = DB::table('personal_info')->where('user_id', auth()->user()->id)->first();
        $data['educational_information'] = DB::table('educational_information')->where('user_id', auth()->user()->id)->get();
        $data['editData'] = DB::table('educational_information')->where('educational_information_id', request()->id)->first();
        return view('edit_educational_information ', $data);
    }
    public function changePasword()
    {   
        $data['personal_info'] = DB::table('personal_info')->where('user_id', auth()->user()->id) ->first();
        return view('change_password', $data);
    }
    public function astatuschange(Request $request)
    {
        $order_id = $request->order_id;
        $order_status = $request->order_status;
        $order = Application::find($order_id);
        $order->status = $order_status;
        $order->save();
        return response()->json('success');
    }
    public function admchange(Request $request)
    {
        $application = Application::find($request->application_id);
        $application->delivery_method = $request->dm;
        $application->save();
        return response()->json('success');
    }
    public function userUpddate(Request $request)
    {
        // return $request->all();
        $users = User::find(auth()->user()->id);
        if($request->currentPassword && $request->newPassword && $request->confirmPassword){
            $request->validate([
                'currentPassword' => ['required'],
                'newPassword' => ['required'],
                'confirmPassword' => ['same:newPassword'],
            ]);
            $users->password = Hash::make($request->newPassword);
        } 
        $users->role = $request->role;
        $users->name = $request->name;
        $users->mobile = $request->mobile;
        $users->email = $request->email;
        // Default image
        $defaultImage = $request->file('avatar');
        if ($defaultImage) {
            $imageName = time() . '_' . uniqid() . '.' . $defaultImage->getClientOriginalExtension();
            $defaultImage->move('public/uploaded/user/', $imageName);
            $users->avatar = $imageName;
        }
        $users->save();
        $personal_info = DB::table('personal_info') ->where('user_id', auth()->user()->id) ->first();
        $data['user_id'] = auth()->user()->id;
        $data['gender'] = $request->gender;
        $data['additional_number'] = $request->additional_number;
        $data['id_card_type'] = $request->id_card_type;
        $data['id_card_no'] = $request->id_card_no; 
        $data['date_of_birth'] = $request->date_of_birth; 
        $data['religion'] = $request->religion; 
        $data['nationality'] = $request->nationality; 
        $data['facebook_link'] = $request->facebook_link; 
        $data['linkedin_link'] = $request->linkedin_link; 
        $data['overview'] = $request->overview; 
        $data['fathers_name'] = $request->fathers_name; 
        $data['fathers_number'] = $request->fathers_number; 
        $data['mothers_name'] = $request->mothers_name; 
        $data['mothers_number'] = $request->mothers_number; 
        $data['emergency_contact_person_name'] = $request->emergency_contact_person_name; 
        $data['emergency_contact_person_number'] = $request->emergency_contact_person_number; 
        $data['relation_with_emergency_contact_person'] = $request->relation_with_emergency_contact_person; 
        $data['emergency_contact_person_address'] = $request->emergency_contact_person_address; 
        if(!$personal_info){
            DB::table('personal_info')->insert($data);
        }else{
            DB::table('personal_info') ->where('user_id', auth()->user()->id) ->limit(1) ->update($data); 
        }
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
    public function applications(Request $request)
    {
        $data['applications'] = Application::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();
        // dd($data['applications']);
        return view('applications', $data);
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
    public function invoicedetails($id)
    {   
        $user_id = Application::find($id)->user_id;
        $data['user'] = User::where('id', $user_id)->first();
        $data['data'] = Application::find($id);
        $pdf = PDF::loadView('backend.order.invoice', $data);
        // return $pdf->download('certificate.pdf');
        return view('backend.order.invoice', $data);
    }
    public function check_status(Request $request)
    {
        $app_id = $request->app_id;
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email',$email)->first();
        if (Hash::check($password, $user->password)) {
            $application = Application::where('id',$app_id)->where('user_id',$user->id)->first();
            if($application->status == 0){
                $application_status = 'Your application status: Pending';
            }else if($application->status == 1){
                $application_status = 'Your application status: Processing';
            }else if($application->status == 2){
                $application_status = 'Your application status: Completed';
            }else if($application->status == 3){
                $application_status = 'Your application status: Cancelled';
            }else{
                $application_status = 'Application Not Found!';
            }
            return response()->json($application_status);
        }
    }
}