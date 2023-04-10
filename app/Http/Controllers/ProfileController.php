<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use DB;

class ProfileController extends Controller
{
    public function updateBasicInfo(Request $request)
    {
        // return $request->all();
        $users = User::find(auth()->user()->id);
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
        return redirect()->back()->with('success', 'Basic info updated successfully!');
    }
    public function updateCredentials(Request $request)
    {
        // return $request->all();
        $users = User::find(auth()->user()->id);
        // Default image
        $sscOlevelImage = $request->file('ssc_olevel');
        if ($sscOlevelImage) {
            $imageName = time() . '_' . uniqid() . '.' . $sscOlevelImage->getClientOriginalExtension();
            $sscOlevelImage->move('public/uploaded/user/', $imageName);
            $users->ssc_olevel = $imageName;
        }
        // Default image
        $hscAlevelImage = $request->file('hsc_alevel');
        if ($hscAlevelImage) {
            $imageName = time() . '_' . uniqid() . '.' . $hscAlevelImage->getClientOriginalExtension();
            $hscAlevelImage->move('public/uploaded/user/', $imageName);
            $users->hsc_alevel = $imageName;
        }
        // Default image
        $nidPassportBirthImage = $request->file('nid_passport_birth');
        if ($nidPassportBirthImage) {
            $imageName = time() . '_' . uniqid() . '.' . $nidPassportBirthImage->getClientOriginalExtension();
            $nidPassportBirthImage->move('public/uploaded/user/', $imageName);
            $users->nid_passport_birth = $imageName;
        }
        // Default image
        $slipId = $request->file('slip_id');
        if ($slipId) {
            $imageName = time() . '_' . uniqid() . '.' . $slipId->getClientOriginalExtension();
            $slipId->move('public/uploaded/user/', $imageName);
            $users->slip_id = $imageName;
        }
        // Default image
        $others = $request->file('others');
        if ($others) {
            $imageName = time() . '_' . uniqid() . '.' . $others->getClientOriginalExtension();
            $others->move('public/uploaded/user/', $imageName);
            $users->others = $imageName;
        }
        $users->save();
        return redirect()->back()->with('success', 'Identification credentials updated successfully!');
    }
    public function addEducation(Request $request){
        // return $request->all();
        $educational_information = DB::table('educational_information')
                                    ->where('educational_information_id', $request->educational_information_id)
                                    ->where('user_id', auth()->user()->id)
                                    ->first();
        $data['user_id'] = auth()->user()->id;
        $data['level_of_education'] = $request->level_of_education;
        $data['degree_title'] = $request->degree_title;
        $data['group'] = $request->group;
        $data['institute'] = $request->institute; 
        $data['current_institute'] = $request->current_institute; 
        $data['curriculum'] = $request->curriculum; 
        $data['id_card'] = $request->id_card; 
        $data['result'] = $request->result; 
        $data['passing_year'] = $request->passing_year; 
        $data['from_date'] = $request->from_date; 
        $data['to_date'] = $request->to_date; 
        if(!$educational_information){
            DB::table('educational_information')->insert($data);
            return redirect()->back()->with('success', 'Personal Details added successfully!');
        }else{
            DB::table('educational_information')
                ->where('educational_information_id', $request->educational_information_id)
                ->where('user_id', auth()->user()->id)
                ->limit(1)
                ->update($data); 
            return redirect()->back()->with('success', 'Personal Details updated successfully!');
        }
    }
    public function removeEducation($id)
    {
        $deleted = DB::table('educational_information')
                    ->where('educational_information_id', $id)
                    ->where('user_id', auth()->user()->id)
                    ->delete();
        if($deleted){
            return redirect()->back()->with('success', 'Educational Information deleted successfully!');
        }else{
            return redirect()->back()->with('success', 'NA!');
        }
    }
    public function updatePersonalInfo(Request $request)
    {
        // return $request->all();
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
        return redirect()->back()->with('success', 'Personal Details updated successfully!');
    }
    public function updateJobPreferences(Request $request)
    {
        // return $request->all();
        $job_preferences = DB::table('job_preferences') ->where('user_id', auth()->user()->id) ->first();
        $data['user_id'] = auth()->user()->id;
        $data['categories'] = implode(",", $request->categories);
        $data['classes'] = implode(",", $request->classes);
        $data['subjects'] = implode(",", $request->subjects);
        $data['tutoring_place'] = implode(",", $request->tutoring_place);
        $data['available_days'] = implode(",", $request->available_days);
        $data['preferred_location'] = implode(",", $request->preferred_location);
        $data['city'] = $request->city;
        $data['location'] = $request->location;
        $data['from_time'] = $request->from_time;
        $data['to_time'] = $request->to_time;
        $data['expected_salary'] = $request->expected_salary;
        if(!$job_preferences){
            DB::table('job_preferences')->insert($data);
        }else{
            DB::table('job_preferences') ->where('user_id', auth()->user()->id) ->limit(1) ->update($data); 
        }
        return redirect()->back()->with('success', 'Job preferences updated successfully!');
    }
    public function changePassword(Request $request)
    {
        // return $request->all();
        $user = User::find(auth()->user()->id);
        $validator = Validator::make($request->all(), [
            'currentPassword' => ['required', function ($attribute, $value, $fail) use ($user) {
                if (!\Hash::check($value, $user->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }],
            'newPassword' => ['required', 'string', 'min:8'],
            'confirmPassword' => ['same:newPassword'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        if ($validator->passes()) {
            $user->password = \Hash::make($request->newPassword);
            $user->save();
            return redirect()->back()->with('success', 'Password updated successfully!');
        }
    }
}