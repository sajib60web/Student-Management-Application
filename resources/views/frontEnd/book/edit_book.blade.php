@extends('frontEnd.master')

@section('title')
Add Book
@endsection

@section('mainContent')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Book</h1>
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
                    <div class="col-lg-8 col-lg-offset-1 well">
                        {{ Form::open(['url'=>'/update-book', 'method' =>'POST', 'enctype'=>'multipart/form-data', 'name'=>'editBook']) }}
                        <div class="form-group">
                            <label>Subject Name</label>
                            <input type="text" class="form-control" name="subject_name" value="{{ $books->subject_name }}">
                            <input type="hidden" class="form-control" name="id" value="{{ $books->id }}">
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <select class="form-control" name="departmentId">
                                <option value="">Select Your Departments</option>
                                @foreach($departments as $department)
                                <option value="{{ $department->id}}">{{ $department->full_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Author Name</label>
                            <input class="form-control" type="text" name="author_name" value="{{ $books->author_name }}">
                        </div>
                        <div class="form-group">
                            <label>Total Book</label>
                            <input class="form-control" type="number" name="total_book" value="{{ $books->total_book }}">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="btn" value="Update Book">
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
    document.forms['editBook'].elements['departmentId'].value = {{$books->departmentId}};
</script>
@endsection



