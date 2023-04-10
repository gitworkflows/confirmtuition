@extends('layouts.app')
@section('title','Profile')
@section('content')
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" /> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<main class="tu-main tu-bgmain">
    <div class="tu-main-section">
        <div class="container">
            <form class="tu-profilewrapper" action="{{url('edit-job-preferences')}}" method="post">
                @csrf
                <div class="tu-boxwrapper">
                    <div class="tu-boxarea">
                        <div class="tu-boxsm">
                            <div class="tu-boxsmtitle">
                                <h4>Job Preferences</h4>
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
                                        <label>Categories <span class="text-danger">*</span></label>
                                        <select name="categories[]" class="form-control select2 categories" multiple
                                            data-placeholder="Select categories" required>
                                            <option value="Bangla Medium" @if(in_array('Bangla Medium',$categories))
                                                selected="selected" @endif>
                                                Bangla Medium
                                            </option>
                                            <option value="English Medium" @if(in_array('English Medium',$categories))
                                                selected="selected" @endif>
                                                English Medium
                                            </option>
                                            <option value="Religious Studies" @if(in_array('Religious
                                                Studies',$categories)) selected="selected" @endif>
                                                Religious Studies
                                            </option>
                                            <option value="Admission Test" @if(in_array('Admission Test',$categories))
                                                selected="selected" @endif>
                                                Admission Test
                                            </option>
                                            <option value="Arts" @if(in_array('Arts',$categories)) selected="selected"
                                                @endif>
                                                Arts
                                            </option>
                                            <option value="Language Learning" @if(in_array('Language
                                                Learning',$categories)) selected="selected" @endif>
                                                Language Learning
                                            </option>
                                            <option value="Test Preparation" @if(in_array('Test
                                                Preparation',$categories)) selected="selected" @endif>
                                                Test Preparation
                                            </option>
                                            <option value="Professional Skill Development" @if(in_array('Professional
                                                Skill Development',$categories)) selected="selected" @endif>
                                                Professional Skill Development
                                            </option>
                                            <option value="Special Skill Development" @if(in_array('Special Skill
                                                Development',$categories)) selected="selected" @endif>
                                                Special Skill Development
                                            </option>
                                            <option value="Uni Help" @if(in_array('Uni Help',$categories))
                                                selected="selected" @endif>
                                                Uni Help
                                            </option>
                                            <option value="Madrasa Version" @if(in_array('Madrasa Version',$categories))
                                                selected="selected" @endif>
                                                Madrasa Version
                                            </option>
                                        </select>
                                        <ul class="tu-labels tu-labels-categories">
                                            @foreach($categories as $c)
                                            <li><span>{{$c}} <a href="javascript:void(0);" data-name="categories" data-value="{{$c}}" class="removed"><i class="icon icon-x"></i></a></span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Classes <span class="text-danger">*</span></label>
                                        <select name="classes[]" class="form-control select2 classes" multiple
                                            data-placeholder="Select classes" required>
                                            <option value="Pre-Schooling">
                                                Pre-Schooling
                                            </option>
                                            <option value="Play" @if(in_array('Play',$classes)) selected="selected"
                                                @endif>
                                                Play
                                            </option>
                                            <option value="Nursery" @if(in_array('Nursery',$classes))
                                                selected="selected" @endif>
                                                Nursery
                                            </option>
                                            <option value="Class 1" @if(in_array('Class 1',$classes))
                                                selected="selected" @endif>
                                                Class 1
                                            </option>
                                            <option value="Class 2" @if(in_array('Class 2',$classes))
                                                selected="selected" @endif>
                                                Class 2
                                            </option>
                                            <option value="Class 3" @if(in_array('Class 3',$classes))
                                                selected="selected" @endif>
                                                Class 3
                                            </option>
                                            <option value="Class 4" @if(in_array('Class 4',$classes))
                                                selected="selected" @endif>
                                                Class 4
                                            </option>
                                            <option value="Class 5" @if(in_array('Class 5',$classes))
                                                selected="selected" @endif>
                                                Class 5
                                            </option>
                                            <option value="Class 6" @if(in_array('Class 6',$classes))
                                                selected="selected" @endif>
                                                Class 6
                                            </option>
                                            <option value="Class 7" @if(in_array('Class 7',$classes))
                                                selected="selected" @endif>
                                                Class 7
                                            </option>
                                            <option value="Class 8" @if(in_array('Class 8',$classes))
                                                selected="selected" @endif>
                                                Class 8
                                            </option>
                                            <option value="Class 9" @if(in_array('Class 9',$classes))
                                                selected="selected" @endif>
                                                Class 9
                                            </option>
                                            <option value="Class 10" @if(in_array('Class 10',$classes))
                                                selected="selected" @endif>
                                                Class 10
                                            </option>
                                            <option value="HSC - 1st Year" @if(in_array('HSC - 1st Year',$classes))
                                                selected="selected" @endif>
                                                HSC - 1st Year
                                            </option>
                                            <option value="HSC - 2nd Year" @if(in_array('HSC - 2nd Year',$classes))
                                                selected="selected" @endif>
                                                HSC - 2nd Year
                                            </option>
                                        </select>
                                        <ul class="tu-labels tu-labels-classes">
                                            @foreach($classes as $cl)
                                            <li><span>{{$cl}} <a href="javascript:void(0);" data-name="classes" data-value="{{$cl}}" class="removed"><i class="icon icon-x"></i></a></span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Subjects <span class="text-danger">*</span></label>
                                        <select name="subjects[]" class="form-control select2 subjects" multiple
                                            data-placeholder="Select subjects" required>
                                            <option value="Bangla" @if(in_array('Bangla',$subjects)) selected="selected"
                                                @endif>
                                                Bangla
                                            </option>
                                            <option value="English" @if(in_array('English',$subjects))
                                                selected="selected" @endif>
                                                English
                                            </option>
                                            <option value="Physics" @if(in_array('Physics',$subjects))
                                                selected="selected" @endif>
                                                Physics
                                            </option>
                                            <option value="Chemistry" @if(in_array('Chemistry',$subjects))
                                                selected="selected" @endif>
                                                Chemistry
                                            </option>
                                            <option value="Biology" @if(in_array('Biology',$subjects))
                                                selected="selected" @endif>
                                                Biology
                                            </option>
                                            <option value="General Math" @if(in_array('General Math',$subjects))
                                                selected="selected" @endif>
                                                General Math
                                            </option>
                                            <option value="Higher Math" @if(in_array('Higher Math',$subjects))
                                                selected="selected" @endif>
                                                Higher Math
                                            </option>
                                            <option value="Geagraphy" @if(in_array('Geagraphy',$subjects))
                                                selected="selected" @endif>
                                                Geagraphy
                                            </option>
                                            <option value="History" @if(in_array('History',$subjects))
                                                selected="selected" @endif>
                                                History
                                            </option>
                                            <option value="ICT" @if(in_array('ICT',$subjects)) selected="selected"
                                                @endif>
                                                ICT
                                            </option>
                                            <option value="Accouning" @if(in_array('Accouning',$subjects))
                                                selected="selected" @endif>
                                                Accouning
                                            </option>
                                            <option value="Religious Studies" @if(in_array('Religious
                                                Studies',$subjects)) selected="selected" @endif>
                                                Religious Studies
                                            </option>
                                            <option value="Business Interpeunership" @if(in_array('Business
                                                Interpeunership',$subjects)) selected="selected" @endif>
                                                Business Interpeunership
                                            </option>
                                            <option value="Agricultural Education" @if(in_array('Agricultural
                                                Education',$subjects)) selected="selected" @endif>
                                                Agricultural Education
                                            </option>
                                            <option value="Bangladesh & Global Studies" @if(in_array('Bangladesh &
                                                Global Studies',$subjects)) selected="selected" @endif>
                                                Bangladesh & Global Studies
                                            </option>
                                            <option value="Home Economics" @if(in_array('Home Economics',$subjects))
                                                selected="selected" @endif>
                                                Home Economics
                                            </option>
                                            <option value="Finance & Banking" @if(in_array('Finance &
                                                Banking',$subjects)) selected="selected" @endif>
                                                Finance & Banking
                                            </option>
                                            <option value="General Science" @if(in_array('General Science',$subjects))
                                                selected="selected" @endif>
                                                General Science
                                            </option>
                                            <option value="Civics" @if(in_array('Civics',$subjects)) selected="selected"
                                                @endif>
                                                Civics
                                            </option>
                                            <option value="Psycology" @if(in_array('Psycology',$subjects))
                                                selected="selected" @endif>
                                                Psycology
                                            </option>
                                            <option value="Management" @if(in_array('Management',$subjects))
                                                selected="selected" @endif>
                                                Management
                                            </option>
                                            <option value="All" @if(in_array('All',$subjects)) selected="selected"
                                                @endif>
                                                All
                                            </option>
                                        </select>
                                        <ul class="tu-labels tu-labels-subjects">
                                            @foreach($subjects as $sub)
                                            <li><span>{{$sub}} <a href="javascript:void(0);" data-name="subjects" data-value="{{$sub}}" class="removed"><i class="icon icon-x"></i></a></span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>City <span class="text-danger">*</span></label>
                                        <select name="city" id="city" class="form-control select2"
                                            data-placeholder="Select city" required>
                                            <option disabled hidden selected label="Select city"></option>
                                            @foreach($cities as $city)
                                            <option value="{{$city->id}}"
                                                {{ @$job_preferences->city == $city->id ? 'selected' : ''}}>
                                                {{$city->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Your Location <span class="text-danger">*</span></label>
                                        <input type="hidden" id="location_selected" value="{{ @$job_preferences->location }}" />
                                        <select name="location" id="location" class="form-control select2"
                                            data-placeholder="Select location" required>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Preferred Location <span class="text-danger">*</span></label>
                                        <input type="hidden" id="preferred_location_selected" value="{{ @$job_preferences->preferred_location }}" />
                                        <select name="preferred_location[]" id="preferred_location" class="form-control select2 preferred_location" multiple="multiple" required>
                                        </select>
                                        <ul class="tu-labels tu-labels-preferred_location">
                                            @foreach($preferred_location as $pl)
                                            <li><span>{{$pl}} <a href="javascript:void(0);" data-name="preferred_location" data-value="{{$pl}}" class="removed"><i class="icon icon-x"></i></a></span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Place of Tutoring <span class="text-danger">*</span></label>
                                        <select name="tutoring_place[]" class="form-control select2 tutoring_place" multiple
                                            data-placeholder="Select tutoring place" required>
                                            <option value="Student Home" @if(in_array('Student Home',$tutoring_place)) selected="selected"
                                                @endif>
                                                Student Home
                                            </option>
                                            <option value="My Home" @if(in_array('My Home',$tutoring_place)) selected="selected"
                                                @endif>
                                                My Home
                                            </option>
                                            <option value="Online" @if(in_array('Online',$tutoring_place)) selected="selected"
                                                @endif>
                                                Online
                                            </option>
                                        </select>
                                        <ul class="tu-labels tu-labels-tutoring_place">
                                            @foreach($tutoring_place as $tp)
                                            <li><span>{{$tp}} <a href="javascript:void(0);" data-name="tutoring_place" data-value="{{$tp}}" class="removed"><i class="icon icon-x"></i></a></span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Available Days <span class="text-danger">*</span></label>
                                        <select name="available_days[]" class="form-control select2 available_days" multiple
                                            data-placeholder="Select days" required>
                                            <option value="Saturday" @if(in_array('Saturday',$available_days)) selected="selected"
                                                @endif>
                                                Saturday
                                            </option>
                                            <option value="Sunday" @if(in_array('Sunday',$available_days)) selected="selected"
                                                @endif>
                                                Sunday
                                            </option>
                                            <option value="Monday" @if(in_array('Monday',$available_days)) selected="selected"
                                                @endif>
                                                Monday
                                            </option>
                                            <option value="Tuesday" @if(in_array('Tuesday',$available_days)) selected="selected"
                                                @endif>
                                                Tuesday
                                            </option>
                                            <option value="Wednesday" @if(in_array('Wednesday',$available_days)) selected="selected"
                                                @endif>
                                                Wednesday
                                            </option>
                                            <option value="Thursday" @if(in_array('Thursday',$available_days)) selected="selected"
                                                @endif>
                                                Thursday
                                            </option>
                                            <option value="Friday" @if(in_array('Friday',$available_days)) selected="selected"
                                                @endif>
                                                Friday
                                            </option>
                                        </select>
                                        <ul class="tu-labels tu-labels-available_days">
                                            @foreach($available_days as $ad)
                                            <li><span>{{$ad}} <a href="javascript:void(0);" data-name="available_days" data-value="{{$ad}}" class="removed"><i class="icon icon-x"></i></a></span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>From Time</label>
                                        <input type="time" name="from_time" value="{{date('H:i:s', strtotime($job_preferences->from_time))}}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>To Time</label>
                                        <input type="time" name="to_time" value="{{date('H:i:s', strtotime($job_preferences->to_time))}}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Expected Salary</label>
                                        <input type="number" name="expected_salary"
                                            value="{{@$job_preferences->expected_salary}}" class="form-control" />
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
<script>
$(document).ready(function() {
    $('.select2').select2();
    $('.categories').on("change", function(e) {
        var selected = $(".categories :selected").map((_, e) => '<li><span>' + e.value + '<a href="javascript:void(0);" data-name="categories" data-value="' + e.value + '" class="removed"><i class="icon icon-x"></i></a></span></li>')
            .get();
        $('.tu-labels-categories').html(selected);
    });
    $('.classes').on("change", function(e) {
        var selected = $(".classes :selected").map((_, e) => '<li><span>' + e.value + '<a href="javascript:void(0);" data-name="classes" data-value="' + e.value + '" class="removed"><i class="icon icon-x"></i></a></span></li>')
            .get();
        $('.tu-labels-classes').html(selected);
    });

    $('.subjects').on("change", function(e) {
        var selected = $(".subjects :selected").map((_, e) => '<li><span>' + e.value + '<a href="javascript:void(0);" data-name="subjects" data-value="' + e.value + '" class="removed"><i class="icon icon-x"></i></a></span></li>')
            .get();
        $('.tu-labels-subjects').html(selected);
    });
    
    $('.tutoring_place').on("change", function(e) {
        var selected = $(".tutoring_place :selected").map((_, e) => '<li><span>' + e.value + '<a href="javascript:void(0);" data-name="tutoring_place" data-value="' + e.value + '" class="removed"><i class="icon icon-x"></i></a></span></li>')
            .get();
        $('.tu-labels-tutoring_place').html(selected);
    });
    
    $('.available_days').on("change", function(e) {
        var selected = $(".available_days :selected").map((_, e) => '<li><span>' + e.value + '<a href="javascript:void(0);" data-name="available_days" data-value="' + e.value + '" class="removed"><i class="icon icon-x"></i></a></span></li>')
            .get();
        $('.tu-labels-available_days').html(selected);
    });
    
    $('.preferred_location').on("change", function(e) {
        var selected = $(".preferred_location :selected").map((_, e) => '<li><span>' + e.value + '<a href="javascript:void(0);" data-name="preferred_location" data-value="' + e.value + '" class="removed"><i class="icon icon-x"></i></a></span></li>')
            .get();
        $('.tu-labels-preferred_location').html(selected);
    });
    
    $(document.body).on("click", "a.removed", function(e) {
        var name = $(this).data("name");
        var value = $(this).data("value");
        var mySelector  = "." + name + " option[value='" + value + "']";
        $(mySelector).prop("selected", false);
        $(this).parent('span').parent('li').remove();
    });

    $('.removed').on("click", function(e) {
        var name = $(this).data("name");
        var value = $(this).data("value");
        var mySelector  = "." + name + " option[value='" + value + "']";
        $(mySelector).prop("selected", false);
    });
    
    var city = $('#city').val();
    var location_selected = $('#location_selected').val();
    var result = $('#preferred_location_selected').val();
    const preferred_location_selected = result.split(",");
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
                    $('#location, #preferred_location').empty();
                    $('#location, #preferred_location').append("<option value='' disabled label='Select location'>Select</option>");
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
                        
                        if(preferred_location_selected.includes(response[i]['name'])){
                            $('#preferred_location').append("<option value='" + name + "' selected='selected'>" +
                            name + "</option>");
                        }else{
                            $('#preferred_location').append("<option value='" + name + "'>" +
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