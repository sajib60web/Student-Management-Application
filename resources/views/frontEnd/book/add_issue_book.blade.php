@extends('frontEnd.master')

@section('title')
Add Issue Book
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Issue Book</h1>
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
                        {{ Form::open(['url'=>'/save-issue-book', 'method' =>'POST', 'enctype'=>'multipart/form-data']) }}
                        <div class="form-group">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="student_name" placeholder="Enter Student Name">
                        </div>
                        <div class="form-group">
                            <label>Roll/ID</label>
                            <input type="number" class="form-control" name="roll_id" placeholder="Enter Roll/ID">
                        </div>
                        <div class="form-group">
                            <label>Phone No</label>
                            <input type="number" class="form-control" name="phone_no" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label>Department Name</label>
                            <select class="form-control" name="departmentId">
                                <option value="">Select Your Departments</option>
                                @foreach($departments as $department)
                                <option value="{{ $department->id}}">{{ $department->full_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Book Name</label>
                            <select class="form-control" name="bookId">
                                <option value="">Select Your Book Name</option>
                                @foreach($books as $book)
                                <option value="{{ $book->id}}">{{ $book->subject_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Today Date</label>
                            <input class="form-control" type="text" name="tody_date" placeholder="Enter Author Name">
                        </div>
                        <div class="form-group">
                            <label>Return Date</label>
                            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="btn" value="Add Issue Book">
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

