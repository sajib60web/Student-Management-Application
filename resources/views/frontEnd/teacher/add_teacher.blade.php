@extends('frontEnd.master')

@section('title')
Add Teacher
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Teacher</h1>
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
                        {{ Form::open(['url'=>'/save-teacher', 'method' =>'POST', 'enctype'=>'multipart/form-data']) }}
                        <div class="form-group">
                            <label>Teacher Name</label>
                            <input class="form-control" type="text" name="teacher_name" placeholder="Teacher Name">
                        </div>
                        <div class="form-group">
                            <label>Education/Background</label>
                            <textarea class="form-control" type="text" name="education" placeholder="Education/Background"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input class="form-control" type="number" name="phone_number" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label>E-mail Address</label>
                            <input class="form-control" type="email" name="emailaddress" placeholder="E-mail Address">
                        </div>
                        <div class="form-group">
                            <label>Gender</label><br>
                            <input type="radio" name="gender" value="1"> Mail
                            <input type="radio" name="gender" value="2"> Femail 
                            <input type="radio" name="gender" value="3"> Other
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" id="editor" type="text" name="address" placeholder="Address"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" accept="image/*">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="btn" value="Add Teacher">
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection

