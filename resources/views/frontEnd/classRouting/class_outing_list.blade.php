@extends('frontEnd.master')

@section('title')
Student list
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Class Routing list</h1>
    </div>
    <h2 class="text-success">{{Session::get('message')}}</h2>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                All Class Routing list
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID No</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Weekday</th>
                            <th>Department Name</th>
                            <th>Semester</th>
                            <th>Teacher Name</th>
                            <th>Subject Name</th>
                            <th>Class Room</th>
                            <th>Techers Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($class_routings as $class_routing)
                        <tr class="odd gradeX">
                            <td>{{ $i++ }}</td>
                            <td>{{ $class_routing->starttime }}</td>
                            <td>{{ $class_routing->endtime }}</td>
                            <td class="center">
                                @if($class_routing->daywek==1)
                                <span>Saturday</span>
                                @elseif($class_routing->daywek==2)
                                <span>Sunday</span>
                                @elseif($class_routing->daywek==3)
                                <span>Monday</span>
                                @elseif($class_routing->daywek==4)
                                <span>Tuesday</span>
                                @elseif($class_routing->daywek==5)
                                <span>Wednesday</span>
                                @elseif($class_routing->daywek==6)
                                <span>Thursday</span>
                                @else
                                <span>Friday</span>
                                @endif
                            </td>
                            <td>{{ $class_routing->full_name }}</td>
                            <td class="center">
                                @if($class_routing->semester==1)
                                <span>1st</span>
                                @elseif($class_routing->semester==2)
                                <span>2nd</span>
                                @elseif($class_routing->semester==3)
                                <span>3rd</span>
                                @elseif($class_routing->semester==4)
                                <span>4th</span>
                                @elseif($class_routing->semester==5)
                                <span>5th</span>
                                @elseif($class_routing->semester==6)
                                <span>6th</span>
                                @else
                                <span>7th</span>
                                @endif
                            </td>
                            <td>{{ $class_routing->teacher_name }}</td>
                            <td>{{ $class_routing->subject_name }}</td>
                            <td>{{ $class_routing->class_room_number }}</td>
                            <td>{{ $class_routing->techers_phone_number }}</td>
                            <td>
                                <a class="btn btn-info" href="{{url('/edit-class_routing/'.$class_routing->id)}}">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{url('/class_routing-delete/'.$class_routing->id)}}" onclick="return confirm('Are You Sure to Delete');">
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


