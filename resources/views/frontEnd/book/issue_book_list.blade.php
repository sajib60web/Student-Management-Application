@extends('frontEnd.master')

@section('title')
Issue Book list
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Issue Book list</h1>
    </div>
    <h2 class="text-success">{{Session::get('message')}}</h2>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                All Issue Book list
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID No</th>
                            <th>Student Name</th>
                            <th>Roll/ID</th>
                            <th>Phone Number</th>
                            <th>Department Name</th>
                            <th>Book Name</th>
                            <th>Tody Date</th>
                            <th>Return Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($issue_books as $issue_book)
                        <tr class="odd gradeX">
                            <td>{{ $i++ }}</td>
                            <td>{{ $issue_book->student_name }}</td>
                            <td>{{ $issue_book->roll_id }}</td>
                            <td>{{ $issue_book->phone_no }}</td>
                            <td>{{ $issue_book->full_name }}</td>
                            <td>{{ $issue_book->subject_name }}</td>
                            <td>{{ $issue_book->tody_date }}</td>
                            <td>{{ $issue_book->date }}</td>
                            <td>
                                <a class="btn btn-info" href="{{url('/edit-issue_book/'.$issue_book->id)}}">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{url('/issue_book-delete/'.$issue_book->id)}}" onclick="return confirm('Are You Sure to Delete');">
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

