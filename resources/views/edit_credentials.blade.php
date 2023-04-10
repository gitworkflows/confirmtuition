@extends('layouts.app')
@section('title','Profile')
@section('content')
@php
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
            <form class="tu-profilewrapper" enctype="multipart/form-data" action="{{url('edit-credentials')}}"
                method="post">
                @csrf
                <div class="tu-boxwrapper">
                    <div class="tu-boxarea">
                        <div class="tu-boxsm">
                            <div class="tu-boxsmtitle">
                                <h4>Identification Credentials</h4>
                            </div>
                        </div>
                        <div class="tu-box">
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul class="p-0">
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>SSC/ O Level Marksheets/ Certificate</label>
                                        <input id="ssc_olevel" type="file" name="ssc_olevel" onchange="loadFileSscOlevel(event)">
                                        <img src="{{@$ssc_olevel_src}}" id="ssc_olevel_output" style="width:80px;margin-top: 10px;">
                                        <script>
                                        var loadFileSscOlevel = function(event) {
                                            var ssc_olevel_output = document.getElementById('ssc_olevel_output');
                                            ssc_olevel_output.src = URL.createObjectURL(event.target.files[0]);
                                            ssc_olevel_output.onload = function() {
                                                URL.revokeObjectURL(ssc_olevel_output.src) // free memory
                                            }
                                        };
                                        </script>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>HSC/ A Level Marksheets/ Certificate</label>
                                        <input id="hsc_alevel" type="file" name="hsc_alevel" onchange="loadFileSscOlevel(event)">
                                        <img src="{{@$hsc_alevel_src}}" id="hsc_alevel_output" style="width:80px;margin-top: 10px;">
                                        <script>
                                        var loadFileSscOlevel = function(event) {
                                            var hsc_alevel_output = document.getElementById('hsc_alevel_output');
                                            hsc_alevel_output.src = URL.createObjectURL(event.target.files[0]);
                                            hsc_alevel_output.onload = function() {
                                                URL.revokeObjectURL(hsc_alevel_output.src) // free memory
                                            }
                                        };
                                        </script>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>NID/ Passport/ Birth Certificate</label>
                                        <input id="nid_passport_birth" type="file" name="nid_passport_birth" onchange="loadFileSscOlevel(event)">
                                        <img src="{{@$nid_passport_birth_src}}" id="nid_passport_birth_output" style="width:80px;margin-top: 10px;">
                                        <script>
                                        var loadFileSscOlevel = function(event) {
                                            var nid_passport_birth_output = document.getElementById('nid_passport_birth_output');
                                            nid_passport_birth_output.src = URL.createObjectURL(event.target.files[0]);
                                            nid_passport_birth_output.onload = function() {
                                                URL.revokeObjectURL(nid_passport_birth_output.src) // free memory
                                            }
                                        };
                                        </script>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Admission Slip/ University ID/ Certificate</label>
                                        <input id="slip_id" type="file" name="slip_id" onchange="loadFileSscOlevel(event)">
                                        <img src="{{@$slip_id_src}}" id="slip_id_output" style="width:80px;margin-top: 10px;">
                                        <script>
                                        var loadFileSscOlevel = function(event) {
                                            var slip_id_output = document.getElementById('slip_id_output');
                                            slip_id_output.src = URL.createObjectURL(event.target.files[0]);
                                            slip_id_output.onload = function() {
                                                URL.revokeObjectURL(slip_id_output.src) // free memory
                                            }
                                        };
                                        </script>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Others</label>
                                        <input id="others" type="file" name="others" onchange="loadFileSscOlevel(event)">
                                        <img src="{{@$others_src}}" id="others_output" style="width:80px;margin-top: 10px;">
                                        <script>
                                        var loadFileSscOlevel = function(event) {
                                            var others_output = document.getElementById('others_output');
                                            others_output.src = URL.createObjectURL(event.target.files[0]);
                                            others_output.onload = function() {
                                                URL.revokeObjectURL(others_output.src) // free memory
                                            }
                                        };
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tu-btnarea-two">
                    <a href="{{route('profile')}}" class="btn btn-outline-primary mr-2">Back to Profile</a>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection