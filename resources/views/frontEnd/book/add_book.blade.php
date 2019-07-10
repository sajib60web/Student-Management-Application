@extends('frontEnd.master')

@section('title')
Add Book
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Book</h1>
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
                        {{ Form::open(['url'=>'/save-book', 'method' =>'POST', 'enctype'=>'multipart/form-data']) }}
                        <div class="form-group">
                            <label>Subject Name</label>
                            <input type="text" class="form-control" name="subject_name" placeholder="Enter Subject Name">
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
                            <label>Author Name</label>
                            <input class="form-control" type="text" name="author_name" placeholder="Enter Author Name">
                        </div>
                        <div class="form-group">
                            <label>Total Book</label>
                            <input class="form-control" type="number" name="total_book" placeholder="Enter Total Book">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="btn" value="Add Book">
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

