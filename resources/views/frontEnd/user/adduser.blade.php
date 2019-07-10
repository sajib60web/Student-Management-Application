@extends('frontEnd.master')

@section('title')
Add User
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add User</h1>
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
                        {{ Form::open(['url'=>'/user-Registration', 'method' =>'POST', 'enctype'=>'multipart/form-data']) }}
                        <div class="form-group">
                            <label>Full Name</label>
                            <input class="form-control" type="text" name="admin_name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label>E-mail address</label>
                            <input class="form-control" type="email" name="admin_email" placeholder="E-mail address">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="admin_password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Access Lavel</label>
                            <select class="form-control" name="access_lavel">
                                <option value="">Select Your Access Lavel</option>
                                <option value="1">Admin</option>
                                <option value="2">Account</option>
                                <option value="3">Library</option>
                                <option value="4">Editor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="btn" value="Add User">
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

