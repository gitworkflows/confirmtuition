@extends('layouts.app')
@section('title','Profile')
@section('content')
<main class="tu-main tu-bgmain">
    <div class="tu-main-section">
        <div class="container">
            <form class="tu-profilewrapper" enctype="multipart/form-data" action="{{url('edit-personal-info')}}"
                method="post">
                @csrf
                <div class="tu-boxwrapper">
                    <div class="tu-boxarea">
                        <div class="tu-boxsm">
                            <div class="tu-boxsmtitle">
                                <h4>Personal Details</h4>
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
                                        <label>Gender <span class="text-danger">*</span></label>
                                        <select name="gender" class="form-control">
                                            <option value="Male"
                                                {{ @$personal_info->gender == 'Male' ? 'selected' : ''}}>
                                                Male
                                            </option>
                                            <option value="Female"
                                                {{ @$personal_info->gender == 'Female' ? 'selected' : ''}}>
                                                Female
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Additional Number <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" placeholder="Enter Mobile Number"
                                            value="{{@$personal_info->additional_number}}" name="additional_number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ID Card Type <span class="text-danger">*</span></label>
                                        <select name="id_card_type" class="form-control" required>
                                            <option value="Birth Certificate No"
                                                {{ @$personal_info->id_card_type == 'Birth Certificate No' ? 'selected' : ''}}>
                                                Birth Certificate No
                                            </option>
                                            <option value="National ID"
                                                {{ @$personal_info->id_card_type == 'National ID' ? 'selected' : ''}}>
                                                National ID
                                            </option>
                                            <option value="Passport No"
                                                {{ @$personal_info->id_card_type == 'Passport No' ? 'selected' : ''}}>
                                                Passport No
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ID Card No <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" placeholder="Enter ID Card No"
                                            value="{{@$personal_info->id_card_no}}" name="id_card_no">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Date of Birth <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control"
                                            value="{{@$personal_info->date_of_birth}}" name="date_of_birth">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Religion <span class="text-danger">*</span></label>
                                        <select name="religion" class="form-control" required>
                                            <option value="Islam"
                                                {{ @$personal_info->religion == 'Islam' ? 'selected' : ''}}>
                                                Islam
                                            </option>
                                            <option value="Hindu"
                                                {{ @$personal_info->religion == 'Hindu' ? 'selected' : ''}}>
                                                Hindu
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nationality <span class="text-danger">*</span></label>
                                        <select name="nationality" class="form-control" required>
                                            <option value="Bangladeshi"
                                                {{ @$personal_info->nationality == 'Bangladeshi' ? 'selected' : ''}}>
                                                Bangladeshi
                                            </option>
                                            <option value="Indian"
                                                {{ @$personal_info->nationality == 'Indian' ? 'selected' : ''}}>
                                                Indian
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Facebook Link <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter facebook link"
                                            value="{{@$personal_info->facebook_link}}" name="facebook_link">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Linkedin Link <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter youtube link"
                                            value="{{@$personal_info->linkedin_link}}" name="linkedin_link">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Fathers Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Fathers Name"
                                            value="{{@$personal_info->fathers_name}}" name="fathers_name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Fathers Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Fathers Number"
                                            value="{{@$personal_info->fathers_number}}" name="fathers_number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mothers Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Mothers Name"
                                            value="{{@$personal_info->mothers_name}}" name="mothers_name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mothers Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Mothers Number"
                                            value="{{@$personal_info->mothers_number}}" name="mothers_number">
                                    </div>
                                </div>
                                <!-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <textarea rowspan="3" class="form-control" placeholder="Enter Address"
                                            name="address">{{@$personal_info->address}}</textarea>
                                    </div>
                                </div> -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Overview <span class="text-danger">*</span></label>
                                        <textarea rowspan="3" class="form-control" placeholder="Enter Overview"
                                            name="overview">{{@$personal_info->overview}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tu-boxsm">
                            <div class="tu-boxsmtitle">
                                <h4>Emergency Contact Information</h4>
                            </div>
                        </div>
                        <div class="tu-box">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Name of Emergency Contact Person<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Name"
                                            value="{{@$personal_info->emergency_contact_person_name}}"
                                            name="emergency_contact_person_name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Number of Emergency Contact Person<span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control" placeholder="Enter Number"
                                            value="{{@$personal_info->emergency_contact_person_number}}"
                                            name="emergency_contact_person_number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Relation with Emergency Contact Person<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Ex: Uncle"
                                            value="{{@$personal_info->relation_with_emergency_contact_person}}"
                                            name="relation_with_emergency_contact_person">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Address of Emergency Contact Person <span
                                                class="text-danger">*</span></label>
                                        <textarea rowspan="3" class="form-control" placeholder="Enter Address"
                                            name="emergency_contact_person_address">{{@$personal_info->emergency_contact_person_address}}</textarea>
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