@extends('layouts.app')
@section('title','Profile')
@section('content')
<main class="tu-main tu-bgmain">
    <div class="tu-main-section">
        <div class="container">
            <div class="tu-profilewrapper">
                <div class="tu-boxwrapper">
                    <div class="tu-boxarea">
                        <div class="tu-boxsm">
                            <div class="tu-boxsmtitle">
                                <h4>Basic Info</h4>
                            </div>
                        </div>
                        <div class="tu-box">
                            <fieldset>
                                <div class="tu-themeform__wrap">
                                    <div class="form-group-wrap">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Name <span class="text-danger">*</span></label>
                                                    <input type="hidden" class="form-control" value="1"
                                                        placeholder="Enter Name" name="user_id" required="">
                                                    <input type="text" class="form-control"
                                                        value="{{auth()->user()->name}}" placeholder="Enter Name"
                                                        name="name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Role <span class="text-danger">*</span></label>
                                                    <select name="role" class="form-control" required>
                                                        <option value="2"
                                                            {{ auth()->user()->role == 2 ? 'selected' : ''}}>Tutor
                                                        </option>
                                                        <option value="3"
                                                            {{ auth()->user()->role == 3 ? 'selected' : ''}}>Guardian
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Mobile Number <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control"
                                                        placeholder="Enter Mobile Number"
                                                        value="{{auth()->user()->mobile}}" name="mobile" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Email Address <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control"
                                                        value="{{auth()->user()->email}}" placeholder="Enter Email"
                                                        name="email" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Current Password</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Enter Password" name="currentPassword">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Mew Password</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Enter Password" name="newPassword">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Enter Password" name="confirmPassword">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Profile Picture</label>
                                                    <input id="avatar" type="file"
                                                        class="@error('avatar') is-invalid @enderror" name="avatar"
                                                        value="{{ old('avatar') }}" autocomplete="avatar">

                                                    <img src="{{asset('public/frontend/asset/images/profile/img-01.jpg')}}"
                                                        style="width:80px;margin-top: 10px;">

                                                    @error('avatar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="tu-boxwrapper mt-2">
                    <div class="tu-boxarea">
                        <div class="tu-boxsm">
                            <div class="tu-boxsmtitle">
                                <h4>Personal Details</h4>
                            </div>
                        </div>
                        <div class="tu-box">
                            <fieldset>
                                <div class="tu-themeform__wrap">
                                    <div class="form-group-wrap">
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
                                                    <input type="number" class="form-control"
                                                        placeholder="Enter Mobile Number"
                                                        value="{{@$personal_info->additional_number}}"
                                                        name="additional_number">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>ID Card Type <span class="text-danger">*</span></label>
                                                    <select name="id_card_type" class="form-control" required>
                                                        <option value="NID"
                                                            {{ @$personal_info->id_card_type == 'NID' ? 'selected' : ''}}>
                                                            NID
                                                        </option>
                                                        <option value="Student"
                                                            {{ @$personal_info->id_card_type == 'Student' ? 'selected' : ''}}>
                                                            Student
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>ID Card No <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control"
                                                        placeholder="Enter ID Card No"
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
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter facebook link"
                                                        value="{{@$personal_info->facebook_link}}" name="facebook_link">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Youtube Link <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter youtube link"
                                                        value="{{@$personal_info->youtube_link}}" name="youtube_link">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Fathers Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Fathers Name"
                                                        value="{{@$personal_info->fathers_name}}" name="fathers_name">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Fathers Number <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Fathers Number"
                                                        value="{{@$personal_info->fathers_number}}"
                                                        name="fathers_number">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Mothers Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Mothers Name"
                                                        value="{{@$personal_info->mothers_name}}" name="mothers_name">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Mothers Number <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Mothers Number"
                                                        value="{{@$personal_info->mothers_number}}"
                                                        name="mothers_number">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Overview <span class="text-danger">*</span></label>
                                                    <textarea rowspan="3" class="form-control"
                                                        placeholder="Enter Mothers Number"
                                                        name="overview">{{@$personal_info->overview}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="tu-boxwrapper mt-2">
                    <div class="tu-boxarea">
                        <div class="tu-boxsm">
                            <div class="tu-boxsmtitle">
                                <h4>Job Preferences</h4>
                            </div>
                        </div>
                        <div class="tu-box">
                            <fieldset>
                                <div class="tu-themeform__wrap">
                                    <div class="form-group-wrap">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Preferable Categories <span
                                                            class="text-danger">*</span></label>
                                                    <select name="gender" class="form-control">
                                                        <option value="Bangla Medium">
                                                            Bangla Medium
                                                        </option>
                                                        <option value="English Medium">
                                                            English Medium
                                                        </option>
                                                        <option value="Religious Studies">
                                                            Religious Studies
                                                        </option>
                                                        <option value="Admission Test">
                                                            Admission Test
                                                        </option>
                                                        <option value="Arts">
                                                            Arts
                                                        </option>
                                                        <option value="Language Learning">
                                                            Language Learning
                                                        </option>
                                                        <option value="Test Preparation">
                                                            Test Preparation
                                                        </option>
                                                        <option value="Professional Skill Development">
                                                            Professional Skill Development
                                                        </option>
                                                        <option value="Special Skill Development">
                                                            Special Skill Development
                                                        </option>
                                                        <option value="Uni Help">
                                                            Uni Help
                                                        </option>
                                                        <option value="Madrasa Version">
                                                            Madrasa Version
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Additional Number <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control"
                                                        placeholder="Enter Mobile Number"
                                                        value="{{@$personal_info->additional_number}}"
                                                        name="additional_number">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>ID Card Type <span class="text-danger">*</span></label>
                                                    <select name="id_card_type" class="form-control" required>
                                                        <option value="NID"
                                                            {{ @$personal_info->id_card_type == 'NID' ? 'selected' : ''}}>
                                                            NID
                                                        </option>
                                                        <option value="Student"
                                                            {{ @$personal_info->id_card_type == 'Student' ? 'selected' : ''}}>
                                                            Student
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>ID Card No <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control"
                                                        placeholder="Enter ID Card No"
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
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter facebook link"
                                                        value="{{@$personal_info->facebook_link}}" name="facebook_link">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Youtube Link <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter youtube link"
                                                        value="{{@$personal_info->youtube_link}}" name="youtube_link">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Fathers Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Fathers Name"
                                                        value="{{@$personal_info->fathers_name}}" name="fathers_name">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Fathers Number <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Fathers Number"
                                                        value="{{@$personal_info->fathers_number}}"
                                                        name="fathers_number">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Mothers Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Mothers Name"
                                                        value="{{@$personal_info->mothers_name}}" name="mothers_name">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Mothers Number <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Mothers Number"
                                                        value="{{@$personal_info->mothers_number}}"
                                                        name="mothers_number">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Overview <span class="text-danger">*</span></label>
                                                    <textarea rowspan="3" class="form-control"
                                                        placeholder="Enter Mothers Number"
                                                        name="overview">{{@$personal_info->overview}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="tu-btnarea-two">
                    <span>Save & update the latest changes to the live</span>
                    <a href="profile-setting-b.html" class="tu-primbtn-lg tu-primbtn-orange">Save & update</a>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection