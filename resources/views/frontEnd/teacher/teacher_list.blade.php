@extends('frontEnd.master')

@section('title')
Teacher list
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Teacher list</h1>
    </div>
    <h2 class="text-success">{{Session::get('message')}}</h2>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                All Teacher list
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID No</th>
                            <th>Teacher Name</th>
                            <th>Education</th>
                            <th>Phone Number</th>
                            <th>E-mail Address</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($teachers as $teacher)
                        <tr class="odd gradeX">
                            <td>{{ $i++ }}</td>
                            <td>{{ $teacher->teacher_name }}</td>
                            <td>{{ $teacher->education }}</td>
                            <td>{{ $teacher->phone_number }}</td>
                            <td>{{ $teacher->emailaddress }}</td>
                            <td class="center">
                                @if($teacher->gender==1)
                                <span>Mail</span>
                                @elseif($teacher->gender==2)
                                <span>Femail</span>
                                @else
                                <span>Other</span>
                                @endif
                            </td>
                            <td>{{ $teacher->address }}</td>
                            <td>
                                <a class="btn btn-info" href="{{url('/edit-teacher/'.$teacher->id)}}">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{url('/teacher-delete/'.$teacher->id)}}" onclick="return confirm('Are You Sure to Delete');">
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


