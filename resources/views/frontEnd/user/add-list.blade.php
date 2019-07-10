@extends('frontEnd.master')

@section('title')
User list
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User list</h1>
    </div>
    <h2 class="text-success">{{Session::get('message')}}</h2>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                All User list
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>E-mail</th>
                            <th>Access Lavel</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($users as $user)
                        <tr class="odd gradeX">
                            <td>{{ $i++ }}</td>
                            <td>{{ $user->admin_name }}</td>
                            <td>{{ $user->admin_email }}</td>
                            <td class="center">
                                @if($user->access_lavel==1)
                                <span class="label label-success">Admin</span>
                                @elseif($user->access_lavel==2)
                                <span class="label label-success">Account</span>
                                @elseif($user->access_lavel==3)
                                <span class="label label-success">Library</span>
                                @else
                                <span class="label label-success">Editor</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{url('/edit-user/'.$user->id)}}">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{url('/user-delete/'.$user->id)}}" onclick="return confirm('Are You Sure to Delete');">
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



