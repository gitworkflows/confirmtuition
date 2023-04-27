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
                                    <input type="submit" value="Submit" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-12 col-xl-9">
                    <div class="tu-listinginfo-holder">
                        @foreach($tutors as $job)
                        @php
                        if($job->avatar){
                            $avatar_src=asset('public/uploaded/user/'.$job->avatar);
                        }else{
                            $avatar_src=asset('public/frontend/asset/images/avatar.png');
                        }
                        @endphp
                        <div class="tu-listinginfo tu-listinginfo_two">
                            <div class="tu-listinginfo_wrapper">
                                <div class="tu-listinginfo_title">
                                    <div class="tu-listinginfo-img">
                                        <figure>
                                            <img src="{{ $avatar_src }}" alt="Profile Picture">
                                        </figure>
                                        <div class="tu-listing-heading">
                                            <h5><a href="tutor-detail.html">{{$job->name}}</a>
                                        </h5>
                                            <div class="tu-listing-location">
                                                @if($job->location_name)
                                                <address><i class="icon icon-map-pin"></i>{{$job->location_name}}, {{$job->city_name}}&nbsp;&nbsp;</address>
                                                @endif
                                                <div class="tu-iconheart">
                                                    <i class="icon icon-calendar"></i><span>{{ \Carbon\Carbon::parse($job->created_at)->format('d M Y')}}</span>
                                                </div>
                                                <span class="ml-0"><em>Tutor ID: {{$job->id}}</em></span>
                                            </div>
                                        </div>
                                    </div>
                                    <table style="border:none" class="mt-2 job-info">
                                        @if($job->subjects)
                                        <tr>
                                            <th>Subjects</th>
                                            <td>: {{$job->subjects}}</td>
                                        </tr>
                                        @endif
                                        <tr>
                                            <th>Mobile</th>
                                            <td>: {{$job->mobile}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>: {{$job->email}}</td>
                                        </tr>
                                        @if($job->available_days)
                                        <tr>
                                            <th>Available days</th>
                                            <td>: {{$job->available_days}}</td>
                                        </tr>
                                        @endif
                                    </table>
                                    <!-- <a class="btn btn-primary" href="#">Apply now</a> -->
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
@endsection