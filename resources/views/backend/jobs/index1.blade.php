@extends('backend.layouts.master')
@section('title','New Jobs')
@section('content')
<div id="content" class="content">
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <div class="panel-heading justify-content-between">
                    <h4>Job list</h4>
                    <a href="{{url('admin/jobs/new')}}" class="btn btn-primary">Add new</a>
                </div>

                <div class="panel-body table-responsive">
                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle table-responsive">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th class="text-nowrap">Job title</th>
                                <th class="text-nowrap">Tuition type</th>
                                <th class="text-nowrap">Student gender</th>
                                <th class="text-nowrap">Preferred tutor gender</th>
                                <th class="text-nowrap">Tutoring time</th>
                                <th class="text-nowrap">Tutoring days</th>
                                <th class="text-nowrap">Number of students</th>
                                <th class="text-nowrap">Salary</th>
                                <th class="text-nowrap">Subjects</th>
                                <th class="text-nowrap">Location</th>
                                <th class="text-nowrap">Created at</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $row)
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->tuition_type}}</td>
                                <td>{{$row->student_gender}}</td>
                                <td>{{$row->preferred_tutor_gender}}</td>
                                <td>{{$row->tutoring_time}}</td>
                                <td>{{$row->tutoring_days}}</td>
                                <td>{{$row->number_of_students}}</td>
                                <td>{{$row->salary}}</td>
                                <td>{{$row->subjects}}</td>
                                <td>{{$row->location}}</td>
                                <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d M Y')}}</td>
                                <td>
                                    <!-- <a href="{{url('admin/application',$row->id)}}" target="_blank" class="mb-1 btn btn-info btn-xs"> View</a> -->
                                    <a href="{{url('admin/application',$row->id)}}" target="_blank" class="mb-1 btn btn-primary btn-xs"> Edit</a>
                                    <a href="{{url('admin/application',$row->id)}}" target="_blank" class="mb-1 btn btn-danger btn-xs"> Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.o_status').on('change', function() {
            if(confirm("Are you sure you want to change this order status?")){
                var order_status = this.value;
                var order_id = $(this).data("order_id");
                $.ajax({
                    url:"{{route('astatus.change')}}",
                    type:"POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        order_status:order_status,
                        order_id:order_id,
                    },
                    success:function(response)
                    {   
                        console.log(response);
                        if(response == 'success')
                        {   
                            location.reload();
                        }
                    },
                });
            }
            else{
                return false;
            }
        });
    });
</script>
@endsection