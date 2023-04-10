@extends('backend.layouts.master')
@section('title','Home')
@section('content')
<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <h1 class="page-header">Dashboard</h1>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                <div class="stats-info">
                    <h4>TOTAL BIRTH CERTIFICATE</h4>
                    <p>{{$birth_count ?? 0}}</p>
                </div>
                <!-- <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-right"></i></a>
                </div> -->
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-info">
                <div class="stats-icon"><i class="fa fa-link"></i></div>
                <div class="stats-info">
                <h4>TOTAL DEATH CERTIFICATE</h4>
                    <p>{{$death_count ?? 0}}</p>
                </div>
                <!-- <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-right"></i></a>
                </div> -->
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-orange">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                    <h4>TOTAL MARKSHEET</h4>
                    <p>{{$number_count ?? 0}}</p>
                </div>
                <!-- <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-right"></i></a>
                </div> -->
            </div>
        </div>


        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-clock"></i></div>
                <div class="stats-info">
                    <h4>TOTAL EDUCATIONAL CERTIFICATE</h4>
                    <p>{{$certificate_count ?? 0}}</p>
                </div>
                <!-- <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-right"></i></a>
                </div> -->
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-clock"></i></div>
                <div class="stats-info">
                    <h4>TOTAL REGISTRATON CARD</h4>
                    <p>{{$registration_count ?? 0}}</p>
                </div>
                <!-- <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-right"></i></a>
                </div> -->
            </div>
        </div>

    </div>
</div>
@endsection