@extends('frontEnd.master')

@section('title')
Book list
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Book list</h1>
    </div>
    <h2 class="text-success">{{Session::get('message')}}</h2>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                All Book list
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID No</th>
                            <th> Number</th>
                            <th>Total site</th>
                            <th>Class Room</th>
                            <th>Class Room</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($books as $book)
                        <tr class="odd gradeX">
                            <td>{{ $i++ }}</td>
                            <td>{{ $book->subject_name }}</td>
                            <td>{{ $book->full_name }}</td>
                            <td>{{ $book->author_name }}</td>
                            <td>{{ $book->total_book }}</td>
                            <td>
                                <a class="btn btn-info" href="{{url('/edit-book/'.$book->id)}}">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="{{url('/book-delete/'.$book->id)}}" onclick="return confirm('Are You Sure to Delete');">
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

