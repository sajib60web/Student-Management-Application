@extends('frontEnd.master')

@section('title')
View Student Payment
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View Student Payment</h1>
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
                        {{ Form::open(['url'=>'/update-student-payment', 'method' =>'POST', 'enctype'=>'multipart/form-data','name'=>'viewStudentPayment']) }}
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
                            <label>Month</label>
                            <input class="form-control" readonly type="text" name="month" value="{{$student_payments->month }}">
                        </div>
                        <div class="form-group">
                            <label>Month Rate</label>
                            <input class="form-control" readonly type="text" name="month_rate" value="{{$student_payments->month_rate }}">
                        </div>
                        <div class="form-group">
                            <label>Total Tk</label>
                            <input class="form-control" readonly type="text" name="total" value="{{$student_payments->total }}">
                        </div>
                        <div class="form-group">
                            <label>Payment Tk</label>
                            <input class="form-control" readonly type="text" name="payment" value="{{$student_payments->payment }}">
                        </div>
                        <div class="form-group">
                            <label>Due Tk</label>
                            <input class="form-control" readonly type="text" name="due" value="{{$student_payments->due }}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" type="text" readonly name="description">
                                                {{$student_payments->description }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Due Date</label>
                            <input class="form-control" readonly type="text" name="date" value="{{$student_payments->date }}">
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
    document.forms['viewStudentPayment'].elements['departmentId'].value = {{$student_payments->departmentId}};
</script>
@endsection


