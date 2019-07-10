@extends('frontEnd.master')

@section('title')
Edit Student
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Student</h1>
    </div>
    <h2 class="text-success">{{Session::get('message')}}</h2>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-1 well">
                        {{ Form::open(['url'=>'/update-student', 'method' =>'POST', 'enctype'=>'multipart/form-data','name'=>'editStudent']) }}
                        <div class="form-group">
                            <label>Department</label>
                            <select class="form-control" name="departmentId">
                                <option value="">Select Your Departments</option>
                                @foreach($departments as $department)
                                <option value="{{ $department->id}}">{{ $department->full_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input class="form-control" type="text" name="fullName" value="{{ $students->fullName }}">
                            <input class="form-control" type="hidden" name="id" value="{{ $students->id }}">
                        </div>
                        <div class="form-group">
                            <label>Roll/ID</label>
                            <input class="form-control" type="number" name="roll_id" value="{{ $students->roll_id }}">
                        </div>
                        <div class="form-group">
                            <label>Semester</label><br>
                            <input type="radio" name="semester" value="1"> 1st 
                            <input type="radio" name="semester" value="2"> 2nd 
                            <input type="radio" name="semester" value="3"> 3rd 
                            <input type="radio" name="semester" value="4"> 4th 
                            <input type="radio" name="semester" value="5"> 5th 
                            <input type="radio" name="semester" value="6"> 6th 
                            <input type="radio" name="semester" value="7"> 7th
                        </div>
                        <div class="form-group">
                            <label>Date Of Bath</label>
                            <input class="form-control" id="date" name="date" type="text" value="{{ $students->date }}"/>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input class="form-control" type="number" name="phone_number" value="{{ $students->phone_number }}">
                        </div>
                        <div class="form-group">
                            <label>E-mail Address</label>
                            <input class="form-control" type="email" name="emailaddress" value="{{ $students->emailaddress }}">
                        </div>
                        <div class="form-group">
                            <label>Gender</label><br>
                            <input type="radio" name="gender" value="1"> Mail 
                            <input type="radio" name="gender" value="2"> Femail 
                            <input type="radio" name="gender" value="3"> Other
                        </div>
                        <div class="form-group">
                            <label>Guardian Name</label>
                            <input class="form-control" type="text" name="guardian_name" value="{{ $students->guardian_name }}">
                        </div>
                        <div class="form-group">
                            <label>Guardian Phone</label>
                            <input class="form-control" type="number" name="guardian_phone" value="{{ $students->guardian_phone }}">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" id="editor" type="text" name="address">
                                 {{ $students->address }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label><br>
                            <img src="{{asset($students->image)}}" height="80px" width="80px">
                            <input type="hidden" name="old_image" value="{{($students->image) }}">
                            <input type="file" name="image" accept="image/*">
                            
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="btn" value="Add Student">
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
<script type="text/javascript">
    document.forms['editStudent'].elements['departmentId'].value = {{$students->departmentId}};
    document.forms['editStudent'].elements['semester'].value = {{$students->semester}};
    document.forms['editStudent'].elements['gender'].value = {{$students->gender}};
</script>
@endsection

