@extends('frontEnd.master')

@section('title')
Student list
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Student list</h1>
    </div>
    <h2 class="text-success">{{Session::get('message')}}</h2>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                All Student list
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID No</th>
                            <th>Full Name</th>
                            <th>Department Name</th>
                            <th>Semester</th>
                            <th>Roll/ID</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Guardian Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($students as $student)
                        <tr class="odd gradeX">
                            <td>{{ $i++ }}</td>
                            <td>{{ $student->fullName }}</td>
                            <td>{{ $student->full_name }}</td>
                            <td class="center">
                                @if($student->semester==1)
                                <span>1st</span>
                                @elseif($student->semester==2)
                                <span>2nd</span>
                                @elseif($student->semester==3)
                                <span>3rd</span>
                                @elseif($student->semester==4)
                                <span>4th</span>
                                @elseif($student->semester==5)
                                <span>5th</span>
                                @elseif($student->semester==6)
                                <span>6th</span>
                                @else
                                <span>7th</span>
                                @endif
                            </td>
                            <td>{{ $student->roll_id }}</td>
                            <td>{{ $student->phone_number }}</td>
                            <td class="center">
                                @if($student->gender==1)
                                <span>Mail</span>
                                @elseif($student->gender==2)
                                <span>Femail</span>
                                @else
                                <span>Other</span>
                                @endif
                            </td>
                            <td>{{ $student->guardian_phone }}</td>
                            <td>
                                <a class="btn btn-info" href="{{url('/edit-student/'.$student->id)}}">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{url('/student-delete/'.$student->id)}}" onclick="return confirm('Are You Sure to Delete');">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection
