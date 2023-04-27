@extends('layouts.app')
@section('title','Profile')
@section('content')
<main class="tu-bgmain tu-main">
    <section class="tu-main-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <aside class="tu-asidewrapper">
                        <a href="javascript:void(0)" class="tu-dbmenu"><i class="icon icon-chevron-left"></i></a>
                        <div class="tu-aside-menu">
                            <form>
                                <div class="form-group">
                                    <label>Posted date from</label>
                                    <input type="date" name="posted_date_from" value="{{request()->posted_date_from}}" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Posted date to</label>
                                    <input type="date" name="posted_date_to" value="{{request()->posted_date_to}}" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Tuition Type</label>
                                    <select name="tuition_type" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Home"
                                            {{ request()->tuition_type == 'Home' ? 'selected' : ''}}>
                                            Home
                                        </option>
                                        <option value="Online"
                                            {{ request()->tuition_type == 'Online' ? 'selected' : ''}}>
                                            Online
                                        </option>
                                        <option value="Group"
                                            {{ request()->tuition_type == 'Group' ? 'selected' : ''}}>
                                            Group
                                        </option>
                                        <option value="Package"
                                            {{ request()->tuition_type == 'Package' ? 'selected' : ''}}>
                                            Package
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">City</label>
                                    <select name="city" id="city" class="form-control select2"
                                        data-placeholder="Select city">
                                        <option disabled hidden selected label="Select city"></option>
                                        @foreach($cities as $city)
                                        <option value="{{$city->id}}">
                                            {{$city->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Location</label>
                                    <input type="hidden" id="location_selected" value="{{ @$job->location }}" />
                                    <select name="location" id="location" class="form-control select2"
                                            data-placeholder="Select location">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Student Gender</label>
                                    <select name="student_gender" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Male"
                                            {{ request()->student_gender == 'Male' ? 'selected' : ''}}>
                                            Male
                                        </option>
                                        <option value="Female"
                                            {{ request()->student_gender == 'Female' ? 'selected' : ''}}>
                                            Female
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Preferred Tutor Gender</label>
                                    <select name="preferred_tutor_gender" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Male"
                                            {{ request()->preferred_tutor_gender == 'Male' ? 'selected' : ''}}>
                                            Male
                                        </option>
                                        <option value="Female"
                                            {{ request()->preferred_tutor_gender == 'Female' ? 'selected' : ''}}>
                                            Female
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-12 col-xl-9">
                    <div class="tu-listinginfo-holder">
                        @foreach($jobs as $job)
                        <div class="tu-listinginfo tu-listinginfo_two">
                            <div class="tu-listinginfo_wrapper">
                                <div class="tu-listinginfo_title">
                                    <div class="tu-listinginfo-img">
                                        <div class="tu-listing-heading">
                                            <h5><a href="tutor-detail.html">{{$job->name}}</a>
                                        </h5>
                                            <div class="tu-listing-location">
                                                <address><i class="icon icon-map-pin"></i>{{$job->location_name}}</address>
                                                <span><em>Job ID: {{$job->id}}</em></span>
                                                <div class="tu-iconheart">
                                                    <i class="icon icon-calendar"></i><span>{{ \Carbon\Carbon::parse($job->created_at)->format('d M Y')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table style="border:none" class="mt-2 job-info">
                                        <tr>
                                            <th>Subjects</th>
                                            <td>: {{$job->subjects}}</td>
                                        </tr>
                                        <tr>
                                            <th>Salary</th>
                                            <td>: {{$job->salary}} ৳</td>
                                        </tr>
                                        <tr>
                                            <th>Student</th>
                                            <td>: {{$job->student_gender}}</td>
                                        </tr>
                                        <tr>
                                            <th>Preferred Teacher</th>
                                            <td>: {{$job->preferred_tutor_gender}}</td>
                                        </tr>
                                        <tr>
                                            <th>Number of Students</th>
                                            <td>: {{$job->number_of_students}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tuition Type</th>
                                            <td>: {{$job->tuition_type}}</td>
                                        </tr>
                                        @if($job->tutoring_time)
                                        <tr>
                                            <th>Tutoring Time</th>
                                            <td>: {{ \Carbon\Carbon::parse($job->tutoring_time)->format('h:i a')}}</td>
                                        </tr>
                                        @endif
                                        <tr>
                                            <th>Tutoring Days</th>
                                            <td>: {{$job->tutoring_days}} Days/Week</td>
                                        </tr>
                                    </table>
                                    @auth
                                        <a class="btn btn-primary" href="#">Apply now</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- <nav class="tu-pagination">
                        <ul>
                            <li class="tu-pagination-prev"><a href="javascript:void(0)"><i class="icon icon-chevron-left"></i></a> </li>
                            <li><a href="javascript:void(0)">1</a> </li>
                            <li><a href="javascript:void(0)">2</a> </li>
                            <li><a href="javascript:void(0)">3</a> </li>
                            <li class="active"><a href="javascript:void(0)">4</a> </li>
                            <li><a href="javascript:void(0)">...</a> </li>
                            <li><a href="javascript:void(0)">60</a> </li>
                            <li class="tu-pagination-next"><a href="javascript:void(0)"><i class="icon icon-chevron-right"></i></a> </li>
                        </ul>
                    </nav> -->
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" /> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
        var city = $('#city').val();
        var location_selected = $('#location_selected').val();
        getLocation(city);
        $('#city').on("change", function(e) {
            var city = $(this).val();
            getLocation(city);
        });
        function getLocation(city){
            if(city > 0){
                $.ajax({
                    url: '{{ url('get-location') }}/' + city,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        var len = response.length;
                        $('#location').empty();
                        $('#location').append("<option value=''>Select</option>");
                        for (var i = 0; i < len; i++) {
                            var id = response[i]['id'];
                            var name = response[i]['name'];
                            if(location_selected == response[i]['id']){
                                $('#location').append("<option value='" + id + "' selected='selected'>" +
                                name + "</option>");
                            }else{
                                $('#location').append("<option value='" + id + "'>" +
                                name + "</option>");
                            }
                        }
                    }
                });
            }
        }
    });
</script>
@endsection