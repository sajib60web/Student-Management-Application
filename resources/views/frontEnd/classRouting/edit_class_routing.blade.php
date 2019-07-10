@extends('frontEnd.master')

@section('title')
Add Class Routing
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Class Routing</h1>
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
                        {{ Form::open(['url'=>'/update-class_routing', 'method' =>'POST', 'enctype'=>'multipart/form-data', 'name'=>'editclassRoutings']) }}
                        <div class="form-group">
                            <label>Start-Time</label>
                            <input type="text" class="form-control" name="starttime" value="{{ $class_routings->starttime }}">
                            <input type="hidden" class="form-control" name="id" value="{{ $class_routings->id }}">
                        </div>
                        <div class="form-group">
                            <label>End-Time</label>
                            <input type="text" class="form-control" name="endtime" value="{{ $class_routings->endtime }}">
                        </div>
                        <div class="form-group">
                            <label>Select Your Weekday</label>
                            <select  class="form-control" name="daywek">
                                <option>Select Your Weekday</option>
                                <option value="1">Saturday</option>
                                <option value="2">Sunday</option>
                                <option value="3">Monday</option>
                                <option value="4">Tuesday</option>
                                <option value="5">Wednesday</option>
                                <option value="6">Thursday</option>
                                <option value="7">Friday</option>
                            </select>
                        </div>
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
                            <label>Teacher Name</label>
                            <select class="form-control" name="teacherId">
                                <option value="">Select Your Teacher</option>
                                @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id}}">{{ $teacher->teacher_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Subject Name</label>
                            <input class="form-control" type="text" name="subject_name" value="{{ $class_routings->subject_name }}">
                        </div>
                        <div class="form-group">
                            <label>Class Room Number</label>
                            <select class="form-control" name="classRoomId">
                                <option value="">Select Your Teacher</option>
                                @foreach($classRooms as $classRoom)
                                <option value="{{ $classRoom->id}}">{{ $classRoom->class_room_number}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Techers Phone Number</label>
                            <input class="form-control" type="number" name="techers_phone_number" value="{{ $class_routings->techers_phone_number }}">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="btn" value="Update Class Routing">
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
    document.forms['editclassRoutings'].elements['daywek'].value = {{$class_routings->daywek}};
    document.forms['editclassRoutings'].elements['departmentId'].value = {{$class_routings->departmentId}};
    document.forms['editclassRoutings'].elements['semester'].value = {{$class_routings->semester}};
    document.forms['editclassRoutings'].elements['teacherId'].value = {{$class_routings->teacherId}};
    document.forms['editclassRoutings'].elements['classRoomId'].value = {{$class_routings->classRoomId}};
</script>
@endsection

