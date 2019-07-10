@extends('frontEnd.master')

@section('title')
Add Department
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Department</h1>
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
                    <div class="col-lg-6 col-lg-offset-1 well">
                        {{ Form::open(['url'=>'/save-Department', 'method' =>'POST', 'enctype'=>'multipart/form-data']) }}
                        <div class="form-group">
                            <label>Short Name</label>
                            <input class="form-control" type="text" name="short_name" placeholder="Short Name">
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input class="form-control" type="text" name="full_name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label>Department Code</label>
                            <input class="form-control" type="number" name="department_code" placeholder="Department Code">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="btn" value="Add Department">
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



