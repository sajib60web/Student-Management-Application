@extends('frontEnd.master')

@section('title')
Student Payment Details
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Student Payment Details</h1>
    </div>
    <h2 class="text-success">{{Session::get('message')}}</h2>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
              All  Student Payment Details
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Roll/ID</th>
                            <th>Department</th>
                            <th>Semester</th>
                            <th>Month Rate</th>
                            <th>Total Month</th>
                            <th>Payment</th>
                            <th>Due Tk</th>
                            <th>Current Date</th>
                            <th>Mode</th>
                            <th>Due Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>sss</td>
                            <td>sss</td>
                            <td>sss</td>
                            <td>sss</td>
                            <td>sss</td>
                            <td>sss</td>
                            <td>sss</td>
                            <td>sss</td>
                            <td>sss</td>
                            <td>sss</td>
                            <td>sss</td>
                            <td>sss</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th colspan="7" class="text-right">Total :</th>
                            <th>90200</th>
                            <th>90200</th>
                            <th colspan="3"></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

