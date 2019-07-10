@extends('frontEnd.master')

@section('title')
Class Room list
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Class Room list</h1>
    </div>
    <h2 class="text-success">{{Session::get('message')}}</h2>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                All Class Room list
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Class Room ID</th>
                            <th>Class Room Number</th>
                            <th>Total site</th>
                            <th>Class Room</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($classRooms as $classRoom)
                        <tr class="odd gradeX">
                            <td>{{ $i++ }}</td>
                            <td>{{ $classRoom->class_room_number }}</td>
                            <td>{{ $classRoom->class_room_site }}</td>
                            <td class="center">
                                @if($classRoom->class_room_type==1)
                                <span class="label label-success">Theory</span>
                                @elseif($classRoom->class_room_type==2)
                                <span class="label label-success">Lab</span>
                                @else
                                <span class="label label-success">Seminar</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{url('/edit-classRoom/'.$classRoom->id)}}">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{url('/classRoom-delete/'.$classRoom->id)}}" onclick="return confirm('Are You Sure to Delete');">
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
