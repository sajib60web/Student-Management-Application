<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Admin Login</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('public/frontEnd/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="{{asset('public/frontEnd/')}}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('public/frontEnd/')}}/dist/css/sb-admin-2.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{asset('public/frontEnd/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['url' => '/admin-login', 'method' => 'POST']) !!}
                            <div class="form-group {{ $errors->has('admin_email') ? ' has-error' : '' }}">
                                {{Form::label('E-Mail Address')}}
                                {{Form::email('admin_email', null, ['class' => 'form-control', 'placeholder'=>'Enter Your E-mail'])}}
                                @if ($errors->has('admin_email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('admin_email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('admin_password') ? ' has-error' : '' }}">
                                {{Form::label('Password')}}
                                {{Form::password('admin_password', ['class' => 'form-control', 'placeholder'=>'Enter Your Password'])}}
                                @if ($errors->has('admin_password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('admin_password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="checkbox">
                                <label>{{Form::checkbox('name','rememberMe')}}Remember Me</label>
                            </div>
                            <div class="form-group">
                                {{Form::submit('Login', ['class' => 'btn btn-lg btn-success btn-block', 'name'=>'btn'])}}
                            </div>
                            {!! Form::close() !!} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="{{asset('public/frontEnd/')}}/vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('public/frontEnd/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('public/frontEnd/')}}/vendor/metisMenu/metisMenu.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{asset('public/frontEnd/')}}/dist/js/sb-admin-2.js"></script>
    </body>
</html>


