<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        <link rel="stylesheet" href="{{asset('public/frontEnd/ckeditor/samples/')}}/css/samples.css">
        <link rel="stylesheet" href="{{asset('public/frontEnd/ckeditor/samples/')}}/toolbarconfigurator/lib/codemirror/neo.css">
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('public/frontEnd/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="{{asset('public/frontEnd/')}}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <!-- DataTables CSS -->
        <link href="{{asset('public/frontEnd/')}}/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <link href="{{asset('public/frontEnd/')}}/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('public/frontEnd/')}}/dist/css/sb-admin-2.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="{{asset('public/frontEnd/')}}/vendor/morrisjs/morris.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{asset('public/frontEnd/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                @include('frontEnd.include.header')
                @include('frontEnd.include.sidebar')
            </nav>

            <div id="page-wrapper">
                @yield('mainContent')
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="{{asset('public/frontEnd/')}}/vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('public/frontEnd/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('public/frontEnd/')}}/vendor/metisMenu/metisMenu.min.js"></script>
        <!-- Morris Charts JavaScript -->
        <script src="{{asset('public/frontEnd/')}}/vendor/raphael/raphael.min.js"></script>
        <script src="{{asset('public/frontEnd/')}}/vendor/morrisjs/morris.min.js"></script>
        <script src="{{asset('public/frontEnd/')}}/data/morris-data.js"></script>
        <!-- DataTables JavaScript -->
        <script src="{{asset('public/frontEnd/')}}/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="{{asset('public/frontEnd/')}}/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="{{asset('public/frontEnd/')}}/vendor/datatables-responsive/dataTables.responsive.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{asset('public/frontEnd/')}}/dist/js/sb-admin-2.js"></script>
        
        <script src="{{asset('public/frontEnd/ckeditor/')}}/ckeditor.js"></script>
        <script src="{{asset('public/frontEnd/ckeditor/samples/')}}/js/sample.js"></script>
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>
        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <script>
            $(document).ready(function () {
                var date_input = $('input[name="date"]'); //our date input has the name "date"
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                })
            })
        </script>
        <script>
            initSample();
        </script>
    </body>

</html>
