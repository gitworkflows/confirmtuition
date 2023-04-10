@extends('layouts.app')
@section('title','Profile')
@section('content')
@php
if(Auth::user()->avatar){
$avatar_src=asset('public/uploaded/user/'. Auth::user()->avatar);
}else{
$avatar_src=asset('public/frontend/asset/images/profile/img-01.jpg');
}
@endphp
<main class="tu-main tu-bgmain">
    <div class="tu-main-section">
        <div class="container">
            <form class="tu-profilewrapper" enctype="multipart/form-data" action="{{url('edit-basic-info')}}"
                method="post">
                @csrf
                <div class="tu-boxwrapper">
                    <div class="tu-boxarea">
                        <div class="tu-boxsm">
                            <div class="tu-boxsmtitle">
                                <h4>Basic Info</h4>
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="hidden" class="form-control" value="1" placeholder="Enter Name"
                                            name="user_id" required="">
                                        <input type="text" class="form-control" value="{{auth()->user()->name}}"
                                            placeholder="Enter Name" name="name" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mobile Number <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" placeholder="Enter Mobile Number"
                                            value="{{auth()->user()->mobile}}" name="mobile" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" value="{{auth()->user()->email}}"
                                            placeholder="Enter Email" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Profile Picture</label>
                                        <input id="avatar" type="file" name="avatar" onchange="loadFile(event)">
                                        <img src="{{$avatar_src}}" id="output" style="width:80px;margin-top: 10px;">

                                        <script>
                                        var loadFile = function(event) {
                                            var output = document.getElementById('output');
                                            output.src = URL.createObjectURL(event.target.files[0]);
                                            output.onload = function() {
                                                URL.revokeObjectURL(output.src) // free memory
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