@extends('layouts.app')
@section('title','Profile')
@section('content')
@php
if(Auth::user()->avatar){
$avatar_src=asset('public/uploaded/user/'. Auth::user()->avatar);
}else{
$avatar_src=asset('public/frontend/asset/images/profile/img-01.jpg');
}

if(Auth::user()->ssc_olevel){
$ssc_olevel_src=asset('public/uploaded/user/'. Auth::user()->ssc_olevel);
}else{
$ssc_olevel_src=asset('public/frontend/asset/images/profile/img-01.jpg');
}

if(Auth::user()->hsc_alevel){
$hsc_alevel_src=asset('public/uploaded/user/'. Auth::user()->hsc_alevel);
}else{
$hsc_alevel_src=asset('public/frontend/asset/images/profile/img-01.jpg');
}

if(Auth::user()->nid_passport_birth){
$nid_passport_birth_src=asset('public/uploaded/user/'. Auth::user()->nid_passport_birth);
}else{
$nid_passport_birth_src=asset('public/frontend/asset/images/profile/img-01.jpg');
}

if(Auth::user()->slip_id){
$slip_id_src=asset('public/uploaded/user/'. Auth::user()->slip_id);
}else{
$slip_id_src=asset('public/frontend/asset/images/profile/img-01.jpg');
}

if(Auth::user()->others){
$others_src=asset('public/uploaded/user/'. Auth::user()->others);
}else{
$others_src=asset('public/frontend/asset/images/profile/img-01.jpg');
}
@endphp
<main class="tu-main tu-bgmain">
    <div class="tu-main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tu-profilewrapper">
                        <div class="tu-boxwrapper">
                            <div class="tu-boxarea">
                                <div class="tu-box">
                                    <div class="row w-100">
                                        <div class="col-lg-4">
                                            <figure>
                                                <img src="{{ $avatar_src }}" style="height:120px" alt="Profile Picture">
                                            </figure>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="mb-1">ID: {{auth()->user()->id ?? 'Not Given'}}</p>
                                            <p class="mb-1">Name: {{auth()->user()->name ?? 'Not Given'}}</p>
                                            <p class="mb-1" style="color: #2b2a2a;">Email:
                                                {{auth()->user()->email ?? 'Not Given'}}</p>
                                            <p class="mb-1">Phone: {{auth()->user()->mobile ?? 'Not Given'}}</p>
                                            <p class="mb-1">Profile Completed: 10%</p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="mb-1">Quiz Mark: N/A</p>
                                            <p class="mb-1">Address:
                                                {{auth()->user()->address ?? 'Not Given'}}</p>
                                            <p class="mb-1"><a href="{{route('change.password')}}"
                                                    class="btn btn-outline-primary">Change
                                                    Password</a></p>
                                            <p class="mb-1"><a href="{{route('edit.basic.info')}}"
                                                        class="btn btn-outline-primary">Edit
                                                        Basic Info</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tu-boxwrapper mt-3">
                        <div class="tu-boxarea">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tu-boxsm">
                                        <div class="tu-boxsmtitle justify-content-between">
                                            <h4>Personal Information</h4>
                                            <a href="{{route('edit.personal.info')}}"
                                                class="btn btn-outline-primary">Edit</a>
                                        </div>
                                    </div>
                                    <div class="tu-box">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="p-0">
                                                    <li><strong>Email :
                                                        </strong>{{auth()->user()->email ?? 'Not Given'}}</li>
                                                    <li><strong>Additional Contact number :
                                                        </strong>{{$personal_info->additional_number ?? 'Not Given'}}
                                                    </li>
                                                    <li><strong>Address : </strong>Not
                                                        Given
                                                    </li>
                                                    <li><strong>Gender :
                                                        </strong>{{$personal_info->gender ?? 'Not Given'}}
                                                    </li>
                                                    <li><strong>Date of Birth :
                                                        </strong>{{$personal_info->date_of_birth ?? 'Not Given'}}
                                                    </li>
                                                    <li><strong>Religion :
                                                        </strong>{{$personal_info->religion ?? 'Not Given'}}
                                                    </li>
                                                    <li><strong>Identity Type : </strong>
                                                        {{$personal_info->id_card_type ?? 'Not Given'}} </li>

                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="p-0">
                                                    <li><strong>Nationality :
                                                        </strong>{{$personal_info->nationality ?? 'Not Given'}}
                                                    </li>
                                                    <li><strong>Facebook ID :
                                                        </strong>{{$personal_info->facebook_link ?? 'Not Given'}}
                                                    </li>
                                                    <li><strong>LInkedin ID :
                                                        </strong>{{$personal_info->linkedin_link ?? 'Not Given'}}
                                                    </li>
                                                    <li><strong>Father's Name :
                                                        </strong>{{$personal_info->fathers_name ?? 'Not Given'}}
                                                    </li>
                                                    <li><strong>Father's Number :
                                                        </strong>{{$personal_info->fathers_number ?? 'Not Given'}}
                                                    </li>
                                                    <li><strong>Mother's Name :
                                                        </strong>{{$personal_info->mothers_name ?? 'Not Given'}}
                                                    </li>
                                                    <li><strong>Mother's Number :
                                                        </strong>{{$personal_info->mothers_number ?? 'Not Given'}}
                                                    </li>
                                                    <li><strong>Overview :
                                                        </strong>{{$personal_info->overview ?? 'Not Given'}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tu-boxsm">
                                        <div class="tu-boxsmtitle justify-content-between">
                                            <h4>Job Preferences</h4>
                                            <a href="{{route('edit.job.preferences')}}"
                                                class="btn btn-outline-primary">Edit</a>
                                        </div>
                                    </div>
                                    <div class="tu-box">
                                        <ul class="p-0">
                                            <li><strong>Available Days:</strong> {{$job_preferences->available_days ?? 'Not Given'}}</li>
                                            <li><strong>Time:</strong> {{$job_preferences->from_time ? date('h:i a', strtotime($job_preferences->from_time)) : 'Not Given'}} - {{$job_preferences->from_time ? date('h:i a', strtotime($job_preferences->to_time)) : 'Not Given'}}</li>
                                            <li><strong>City:</strong> {{$job_preferences->city_name ?? 'Not Given'}}</li>
                                            <li><strong>Location:</strong> {{$job_preferences->location_name ?? 'Not Given'}}</li>
                                            <li><strong>Expected Salary: </strong>{{$job_preferences->expected_salary ?? 'Not Given'}}</li>
                                            <li><strong>Preferred Location:</strong>{{$job_preferences->preferred_location ?? 'Not Given'}}</li>
                                            <li><strong>Preferred Categories : </strong>{{$job_preferences->categories ?? 'Not Given'}}</li>
                                            <li><strong>Preferred Classes : </strong>{{$job_preferences->classes ?? 'Not Given'}}</li>
                                            <li><strong>Preferred Subjects : </strong>{{$job_preferences->subjects ?? 'Not Given'}}</li>
                                            <li><strong>Place of Tutoring : </strong><span>{{$job_preferences->tutoring_place ?? 'Not Given'}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tu-boxwrapper mt-3">
                        <div class="tu-boxarea">
                            <div class="tu-boxsm">
                                <div class="tu-boxsmtitle justify-content-between">
                                    <h4>Educational Information</h4>
                                    <a href="{{route('edit.educational.information')}}"
                                        class="btn btn-outline-primary">Edit</a>
                                </div>
                            </div>
                            <div class="tu-box pt-0">
                                <div class="row">
                                    <!-- Edication 1 -->
                                    @foreach($educational_information as $ei)
                                    <div class="col-md-6 mt-4">
                                        <div class="card">
                                            <div class="card-header">
                                                {{ $loop->iteration }}. {{$ei->level_of_education}}
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <ul class="p-0">
                                                            <li><strong>Institute Name:</strong> {{$ei->institute ?? 'Not Given'}}</li>
                                                            <li><strong>Exam / Degree:</strong> {{$ei->degree_title ?? 'Not Given'}}</li>
                                                            <li><strong>Group:</strong> {{$ei->group ?? 'Not Given'}}</li>
                                                            <li><strong>Curriculum:</strong> {{$ei->curriculum ?? 'Not Given'}}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul class="p-0">
                                                            <li><strong>ID Card No:</strong> {{$ei->id_card ?? 'Not Given'}}</li>
                                                            <li><strong>Result:</strong> {{$ei->result ?? 'Not Given'}}</li>
                                                            <li><strong>Year of Passing:</strong> {{$ei->passing_year ?? 'Not Given'}}</li>
                                                            <li><strong>Academic Year:</strong> {{$ei->from_date ?? 'Not Given'}} - {{$ei->to_date ?? 'Not Given'}}</li>                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tu-boxwrapper mt-3">
                        <div class="tu-boxarea">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tu-boxsm">
                                        <div class="tu-boxsmtitle justify-content-between">
                                            <h4>Identification Credentials</h4>
                                            <a href="{{route('edit.credentials')}}"
                                                class="btn btn-outline-primary">Edit</a>
                                        </div>
                                    </div>
                                    <div class="tu-box">
                                        <div class="row text-center text-lg-start">
                                            <div class="col-lg-4 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-fluid img-thumbnail" src="{{ $ssc_olevel_src }}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-fluid img-thumbnail" src="{{ $hsc_alevel_src }}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-fluid img-thumbnail" src="{{ $nid_passport_birth_src }}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-fluid img-thumbnail" src="{{ $slip_id_src }}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-6">
                                                <a href="#" class="d-block mb-4 h-100">
                                                <img class="img-fluid img-thumbnail" src="{{ $others_src }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tu-boxsm">
                                        <div class="tu-boxsmtitle">
                                            <h4>Emergency Information</h4>
                                        </div>
                                    </div>
                                    <div class="tu-box">
                                        <ul class="p-0">
                                            <li><strong>Name :
                                                </strong>{{$personal_info->emergency_contact_person_name ?? 'Not Given'}}
                                            </li>
                                            <li><strong>Relation :
                                                </strong>{{$personal_info->emergency_contact_person_number ?? 'Not Given'}}
                                            </li>
                                            <li><strong>Contact Number :
                                                </strong>{{$personal_info->relation_with_emergency_contact_person ?? 'Not Given'}}
                                            </li>
                                            <li><strong>Address :
                                                </strong>{{$personal_info->emergency_contact_person_address ?? 'Not Given'}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tu-boxwrapper mt-3">
                        <div class="tu-boxarea">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tu-boxsm">
                                        <div class="tu-boxsmtitle">
                                            <h4>Experience Information</h4>
                                        </div>
                                    </div>
                                    <div class="tu-box">
                                        <ul class="p-0">
                                            <li><strong>Total : </strong>5</li>
                                            <li><strong>Details : </strong>More than 5 years experience</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tu-boxsm">
                                        <div class="tu-boxsmtitle">
                                            <h4>Quiz</h4>
                                        </div>
                                    </div>
                                    <div class="tu-box">
                                        <ul class="p-0">
                                            <li><strong>Exam Name : </strongNot Given </li>
                                            <li><strong>Result : </strongNot Given </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection