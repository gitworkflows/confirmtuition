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
                            <div class="tu-boxsmtitle justify-content-between">
                                <h4>Educational Information</h4>
                                <a href="{{ request()->fullUrlWithQuery(['m' => 'add','id' => '']) }}"
                                    class="btn btn-outline-primary">Add new</a>
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
                            <table>
                                <thead>
                                    <th>
                                        Exam / Degree Title
                                    </th>
                                    <th>
                                        Concentration / Major / Group
                                    </th>
                                    <th>
                                        Institute Name
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($educational_information as $ei)
                                    <tr>
                                        <td>
                                            {{$ei->degree_title}}
                                        </td>
                                        <td>
                                            {{$ei->group}}
                                        </td>
                                        <td>
                                            {{$ei->institute}}
                                        </td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-success btn-sm rounded-0" href="{{ request()->fullUrlWithQuery(['m' => 'edit','id' => $ei->educational_information_id]) }}"><i class="fa fa-edit"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-danger btn-sm rounded-0" onclick="return confirm('Are you sure you want to delete this information?')" href="{{ url('remove-education', $ei->educational_information_id) }}"><i class="fa fa-trash"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if(request()->m == 'add' || request()->m == 'edit')                       
                        <div class="tu-boxarea">
                            <form class="tu-profilewrapper" action="{{url('add-education')}}" method="post">
                                @csrf
                                <div class="tu-boxsm">
                                    <div class="tu-boxsmtitle">
                                        <h4>
                                            @if(request()->m == 'edit')
                                                Edit Details
                                            @else
                                                Add Details
                                            @endif
                                        </h4>
                                    </div>
                                </div>
                                <div class="tu-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Level of Education <span class="text-danger">*</span></label>
                                                <input type="hidden" name="educational_information_id" value="{{request()->id}}" />
                                                <input type="hidden" name="mode" value="{{request()->m}}" />
                                                <select name="level_of_education" class="form-control" required>
                                                    <option value="" selected disabled hidden>
                                                        Select
                                                    </option>
                                                    <option value="Secondary" {{ @$editData->level_of_education == 'Secondary' ? 'selected' : ''}}>
                                                        Secondary
                                                    </option>
                                                    <option value="Higher Secondary" {{ @$editData->level_of_education == 'Higher Secondary' ? 'selected' : ''}}>
                                                        Higher Secondary
                                                    </option>
                                                    <option value="Diploma" {{ @$editData->level_of_education == 'Diploma' ? 'selected' : ''}}>
                                                        Diploma
                                                    </option>
                                                    <option value="Bachelor/Honours/Degree" {{ @$editData->level_of_education == 'Bachelor/Honours/Degree' ? 'selected' : ''}}>
                                                        Bachelor/Honours/Degree
                                                    </option>
                                                    <option value="Masters" {{ @$editData->level_of_education == 'Masters' ? 'selected' : ''}}>
                                                        Masters
                                                    </option>
                                                    <option value="Doctoral" {{ @$editData->level_of_education == 'Doctoral' ? 'selected' : ''}}>
                                                        Doctoral
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Exam / Degree Title<span class="text-danger">*</span></label>
                                                <input type="text" name="degree_title" class="form-control" value="{{ @$editData->degree_title }}" required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Concentration / Major / Group <span class="text-danger">*</span></label>
                                                <input type="text" name="group" value="{{@$editData->group}}" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Institute <span class="text-danger">*</span></label>
                                                <input type="text" name="institute" value="{{@$editData->institute}}" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Curriculum <span class="text-danger">*</span></label>
                                                <select name="curriculum" class="form-control" required>
                                                    <option value="" selected disabled hidden>
                                                        Select
                                                    </option>
                                                    <option value="Bangla Version" {{ @$editData->curriculum == 'Bangla Version' ? 'selected' : ''}}>
                                                        Bangla Version
                                                    </option>
                                                    <option value="English Version" {{ @$editData->curriculum == 'English Version' ? 'selected' : ''}}>
                                                        English Version
                                                    </option>
                                                    <option value="Ed-Excel" {{ @$editData->curriculum == 'Ed-Excel' ? 'selected' : ''}}>
                                                        Ed-Excel
                                                    </option>
                                                    <option value="Cambridge" {{ @$editData->curriculum == 'Cambridge' ? 'selected' : ''}}>
                                                        Cambridge
                                                    </option>
                                                    <option value="IB" {{ @$editData->curriculum == 'IB' ? 'selected' : ''}}>
                                                        IB
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ID Card</label>
                                                <input type="number" name="id_card" value="{{ @$editData->id_card}}" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Result</label>
                                                <input type="number" name="result" min="0" step="any" value="{{ @$editData->result}}" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Year of Passing</label>
                                                <input type="number" name="passing_year" min="1980" max="2023" value="{{ @$editData->passing_year}}" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>From Date</label>
                                                <input type="date" name="from_date" value="{{@$editData->from_date}}" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>To Date</label>
                                                <input type="date" name="to_date" value="{{@$editData->to_date}}" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tu-btnarea-two card-footer">
                                    <a href="{{route('profile')}}" class="btn btn-outline-primary mr-2">Back to Profile</a>
                                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection