@extends('frontEnd.master')

@section('title')
Update Student Payment
@endsection

@section('mainContent')
<style>
    li:hover {background-color: #C8C8C8 ;}
    .blue {color: green;}
    .b{ margin-bottom:90px;}
    .hpad{text-align: center;background: green;padding: 10px;}
    .form-group{margin-bottom: 20px}
</style>
<script type="text/javascript">
    function calc() {
        var month = document.getElementById('month').value;
        var month_rate = document.getElementById('month_rate').value;

        document.getElementById('total').value = month * month_rate;
        document.getElementById('sub_total').value = month * month_rate;

        var total = document.getElementById('total').value;
        var payment = document.getElementById('payment').value;

        document.getElementById('due').value = total - payment;
    }
</script>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Update Student Payment</h1>
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
                    <div class="col-lg-10 col-lg-offset-1 well">
                        <div class="row form-group" style="">
                            <div class="col-md-12" id="mobile_numbers">
                                <h3 class="hpad">Update Student Payment</h3>
                            </div>
                        </div>
                        {{ Form::open(['url'=>'/update-student-payment', 'method' =>'POST', 'enctype'=>'multipart/form-data','name'=>'editStudentPayment']) }}
                        <div class="row form-group">
                            <label class="col-md-2 control-label">Roll/ID:</label>
                            <div class="col-md-2">
                                <input class="form-control" type="text" name="roll_id" value="{{ $student_payments->roll_id }}">
                                <input class="form-control" type="hidden" name="id" value="{{ $student_payments->id }}">
                            </div>
                            <label class="col-md-1 control-label">Date:</label>
                            <div class="col-md-2">
                                <input class="form-control" type="text" name="current_date" readonly value="<?php echo date("m/d/20y") ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-8"></div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-1 control-label">Name:</label>  
                            <div class="col-md-3">
                                <input class="form-control" type="text" name="name" value="{{ $student_payments->name }}">
                            </div>
                            <label style="margin-right: 25px;" class="col-md-1 control-label">Department:</label>  
                            <div class="col-md-3">
                                <select class="form-control" name="departmentId">
                                    <option value="">Select Your Departments</option>
                                    @foreach($departments as $department)
                                    <option value="{{ $department->id}}">{{ $department->full_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-md-1 control-label">Month:</label>
                            <div class="col-md-2">
                                <input class="form-control" type="text" name="month" id="month" onkeyup="calc()" value="{{ $student_payments->month }}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-8" id="mobile_numbers"></div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-2 control-label">Month Rate:</label>  
                            <div class="col-md-2">
                                <input class="form-control" type="text" name="month_rate" id="month_rate" onkeyup="calc()"  value="{{ $student_payments->month_rate }}">
                            </div>
                            <label class="col-md-1 control-label">Total:</label> 
                            <div class="col-md-2">
                                <input readonly class="form-control" type="text" name="total"  id="total" onkeyup="calc()" value="{{ $student_payments->total }}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-8" id="mobile_numbers"></div>
                        </div>
                        <div class="row form-group"> 
                            <label class="col-md-1 control-label">Payment:</label>  
                            <div class="col-md-2">
                                <input class="form-control" type="text" name="payment" id="payment" onkeyup="calc()" value="{{ $student_payments->payment }}">
                            </div>

                            <label class="col-md-2 control-label">Description :</label>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <textarea class="form-control" name="description">
                                        {{ $student_payments->description }}
                                    </textarea>
                                </div>
                            </div>
                            <label class="col-md-2 control-label">Sub Total :</label>  
                            <div class="col-md-2">
                                <input readonly class="form-control" type="text" id="sub_total" name="sub_total" value="{{ $student_payments->sub_total }}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-8" id="mobile_numbers"></div>
                        </div>
                        <div class="row form-group">
                            <label class="col-md-1 control-label">Due:</label>  
                            <div class="col-md-2">
                                <input readonly class="form-control" type="text" name="due"  id="due" value="{{ $student_payments->due }}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-8" id="mobile_numbers"></div>
                        </div>
                        <div class="row form-group">
                            <label style="margin-right: 25px;" class="col-md-1 control-label">Mode:</label>  
                            <div class="col-md-3">
                                <select class="form-control" name="mode">
                                    <option>Select Your Mode</option>
                                    <option value="1">Paid</option>
                                    <option value="0">UnPaid</option>
                                </select>
                            </div>
                            <label class="col-md-2 control-label">Due Date :</label>  
                            <div class="col-md-2">
                                <input class="form-control" type="text" name="date"  value="{{ $student_payments->date }}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-8" id="mobile_numbers"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 text-center">
                                <input class="btn btn-large btn-success" type="submit" name="btn" value="Update Student Payment">
                                <input class="btn btn-large btn-danger" type="reset" value="Reset">
                            </div>
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
    document.forms['editStudentPayment'].elements['departmentId'].value = {{$student_payments->departmentId}};
    document.forms['editStudentPayment'].elements['mode'].value = {{$student_payments->mode }};
</script>
@endsection

