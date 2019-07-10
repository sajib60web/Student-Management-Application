@extends('frontEnd.master')

@section('title')
Add Class Room
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Class Room</h1>
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
                        {{ Form::open(['url'=>'/save-class-room', 'method' =>'POST', 'enctype'=>'multipart/form-data']) }}
                        <div class="form-group">
                            <label>Room Number</label>
                            <input class="form-control" type="text" name="class_room_number" placeholder="Room Number">
                        </div>
                        <div class="form-group">
                            <label>Total Site</label>
                            <input class="form-control" type="text" name="class_room_site" placeholder="Total Site">
                        </div>
                        <div class="form-group">
                            <label>Room Type</label>
                            <select class="form-control" name="class_room_type">
                                <option value="">Select Your Room Type</option>
                                <option value="1">Theory</option>
                                <option value="2">Lab</option>
                                <option value="3">Seminar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="btn" value="Add Class Room">
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

