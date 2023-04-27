@extends('backend.layouts.master')
@section('title','Add new job')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@php
if (isset($job) && property_exists($job, 'tutoring_time')) {
    $tutoring_time = date('H:i:s', strtotime($job->tutoring_time));
}
@endphp
<div id="content" class="content">
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        @if($job)
                            Edit job
                        @else
                            Add new job
                        @endif
                    </h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                </div>
                <form action="{{url('admin/jobs/new')}}" method="post">
                    @csrf
                    <div class="panel-body">
                        @if (\Session::has('success'))
                        <div class="alert alert-success">
                            {!! \Session::get('success') !!}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Job Title <span class="text-danger">*</span></label>
                                    <input type="hidden" name="id" value="{{@$job->id}}">
                                    <input type="text" name="name" value="{{@$job->name}}" placeholder="Enter job name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tuition Type</label>
                                    <select name="tuition_type" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Home"
                                            {{ @$job->tuition_type == 'Home' ? 'selected' : ''}}>
                                            Home
                                        </option>
                                        <option value="Online"
                                            {{ @$job->tuition_type == 'Online' ? 'selected' : ''}}>
                                            Online
                                        </option>
                                        <option value="Group"
                                            {{ @$job->tuition_type == 'Group' ? 'selected' : ''}}>
                                            Group
                                        </option>
                                        <option value="Package"
                                            {{ @$job->tuition_type == 'Package' ? 'selected' : ''}}>
                                            Package
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Student Gender <span class="text-danger">*</span></label>
                                    <select name="student_gender" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="Male"
                                            {{ @$job->student_gender == 'Male' ? 'selected' : ''}}>
                                            Male
                                        </option>
                                        <option value="Female"
                                            {{ @$job->student_gender == 'Female' ? 'selected' : ''}}>
                                            Female
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Preferred Tutor Gender</label>
                                    <select name="preferred_tutor_gender" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Male"
                                            {{ @$job->preferred_tutor_gender == 'Male' ? 'selected' : ''}}>
                                            Male
                                        </option>
                                        <option value="Female"
                                            {{ @$job->preferred_tutor_gender == 'Female' ? 'selected' : ''}}>
                                            Female
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tutoring Time</label>
                                    <input type="time" name="tutoring_time" @if(@$job->tutoring_time) value="{{$tutoring_time}}" @endif class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tutoring Days</label>
                                    <select name="tutoring_days" class="form-control">
                                        <option value="">Select</option>
                                        <option value="1"
                                            {{ @$job->tutoring_days == 1 ? 'selected' : ''}}>
                                            1
                                        </option>
                                        <option value="2"
                                            {{ @$job->tutoring_days == 2 ? 'selected' : ''}}>
                                            2
                                        </option>
                                        <option value="3"
                                            {{ @$job->tutoring_days == 3 ? 'selected' : ''}}>
                                            3
                                        </option>
                                        <option value="4"
                                            {{ @$job->tutoring_days == 4 ? 'selected' : ''}}>
                                            4
                                        </option>
                                        <option value="5"
                                            {{ @$job->tutoring_days == 5 ? 'selected' : ''}}>
                                            5
                                        </option>
                                        <option value="6"
                                            {{ @$job->tutoring_days == 6 ? 'selected' : ''}}>
                                            6
                                        </option>
                                        <option value="7"
                                            {{ @$job->tutoring_days == 7 ? 'selected' : ''}}>
                                            7
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Number of students <span class="text-danger">*</span></label>
                                    <input type="number" name="number_of_students" value="{{@$job->number_of_students}}" placeholder="Number of students" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Salary</label>
                                    <input type="number" name="salary" value="{{@$job->salary}}" placeholder="Enter salary amount" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Subjects <span class="text-danger">*</span></label>
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
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">City <span class="text-danger">*</span></label>
                                    <select name="city" id="city" class="form-control select2"
                                        data-placeholder="Select city" required>
                                        <option disabled hidden selected label="Select city"></option>
                                        @foreach($cities as $city)
                                        <option value="{{$city->id}}"
                                            {{ @$job->city == $city->id ? 'selected' : ''}}>
                                            {{$city->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Location <span class="text-danger">*</span></label>
                                    <input type="hidden" id="location_selected" value="{{ @$job->location }}" />
                                    <select name="location" id="location" class="form-control select2"
                                            data-placeholder="Select location" required>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="text-right">
                            <a href="{{url('admin/jobs')}}" class="btn btn-primary">Back to job list</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
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