@extends('frontEnd.master')

@section('title')
Payment
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Payment</h1>
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
                        {{ Form::open(['url'=>'/update-student-payment', 'method' =>'POST', 'enctype'=>'multipart/form-data','name'=>'payment']) }}
                        <div class="form-group">
                            <label>Full Name</label>
                            <input class="form-control" type="text" name="current_date" readonly value="<?php echo date("m/d/20y") ?>">
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input class="form-control" readonly type="text" name="name" value="{{$student_payments->name }}">
                        </div>
                        <div class="form-group">
                            <label>Roll/ID</label>
                            <input class="form-control" readonly type="number" name="roll_id" value="{{$student_payments->roll_id }}">
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <select class="form-control" readonly name="departmentId">
                                <option value="">Select Your Depar                                        tments</option>
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
                            <label>Month Rate</label>
                            <input class="form-control" readonly type="text" name="month_rate" value="{{$student_payments->month_rate }}">
                        </div>
                        <div class="form-group">
                            <label>Total Month</label>
                            <input class="form-control" type="text" name="month" placeholder="Enter The Total Month">
                        </div>
                        <div class="form-group">
                            <label>Total Tk</label>
                            <input class="form-control" type="text" name="total" placeholder="Enter The Total Taka">
                        </div>
                        <div class="form-group">
                            <label>Due Tk</label>
                            <input class="form-control" type="text" name="due" placeholder="Enter The Due Taka">
                        </div>
                        <div class="form-group">
                            <label>Due Date</label>
                            <input class="form-control" type="text" name="date" placeholder="Enter The Due Date">
                        </div>
                        <div class="form-group">
                            <label>Mode</label>
                            <select class="form-control" name="mode">
                                <option>Select Your Mode</option>
                                <option value="1">Paid</option>
                                <option value="0">UnPaid</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <a href="{{url('/student-payment-list')}}" class="btn btn-success">Student Payment List</a>
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
    document.forms['payment'].elements['departmentId'].value = {{$student_payments->departmentId}};
</script>
@endsection




