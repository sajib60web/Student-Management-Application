@extends('frontEnd.master')

@section('title')
Student Payment List
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Student Payment List</h1>
    </div>
    <h2 class="text-success">{{Session::get('message')}}</h2>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Advanced Tables
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Roll/ID</th>
                            <th>Total Tk</th>
                            <th>Payment</th>
                            <th>Due Tk</th>
                            <th>Mode</th>
                            <th>Current Date</th>
                            <th>Due Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @php($sum=0)
                        @foreach($student_payments as $student_payment)
                        <tr class="odd gradeX">
                            <td>{{ $i }}</td>
                            <td>{{ $student_payment->name }}<br>
                                <a href="{{url('/payment/'.$student_payment->id)}}">Pay</a> ||
                            <a href="{{url('/payment_detalis')}}">Details</a>
                            </td>

                            <td>{{ $student_payment->full_name }}</td>
                            <td>{{ $student_payment->roll_id }}</td>
                            <td>Tk :{{ $student_payment->total }}</td>
                            <td>Tk :{{ $student_payment->payment }}</td>
                            <td>Tk :{{ $student_payment->due }}</td>
                            <td>
                                @if($student_payment->mode == 1)
                                <a class="btn btn-success" href="">
                                    <i class="glyphicon glyphicon-ok"></i>
                                </a>
                                @else
                                <a class="btn btn-danger" href="">
                                    <i class="glyphicon glyphicon-remove"></i>
                                </a>
                                @endif
                            </td>
                            <td>{{ $student_payment->current_date }}</td>
                            <td>{{ $student_payment->date }}</td>
                            <td>
                                <a class="btn btn-info" href="{{url('/edit-student_payment/'.$student_payment->id)}}">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                <a class="btn btn-success" href="{{url('/view-student_payment/'.$student_payment->id)}}">
                                    <i class="glyphicon glyphicon-eye-open"></i>
                                </a>
                                <a class="btn btn-danger" href="{{url('/student_payment-delete/'.$student_payment->id)}}" onclick="return confirm('Are You Sure to Delete');">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                    <tbody>
                        <tr>
                            <th colspan="4" class="text-right">Total :</th>
                            <th>90200</th>
                            <th>90200</th>
                            <th>430600</th>
                            <th colspan="4"></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection



