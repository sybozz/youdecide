<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manager | {{ config('app.name') }}</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('admin') }}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('admin') }}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin') }}/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('manager.includes.leftSidebar')

        <!-- top navigation -->
        @include('manager.includes.topnav')

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('mainContent')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                &copy; YouDecide
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('admin') }}/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin') }}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('admin') }}/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{ asset('admin') }}/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="{{ asset('admin') }}/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- jQuery Sparklines -->
<script src="{{ asset('admin') }}/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- morris.js -->
<script src="{{ asset('admin') }}/vendors/raphael/raphael.min.js"></script>
<script src="{{ asset('admin') }}/vendors/morris.js/morris.min.js"></script>
<!-- gauge.js -->
<script src="{{ asset('admin') }}/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('admin') }}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- Skycons -->
<script src="{{ asset('admin') }}/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="{{ asset('admin') }}/vendors/Flot/jquery.flot.js"></script>
<script src="{{ asset('admin') }}/vendors/Flot/jquery.flot.pie.js"></script>
<script src="{{ asset('admin') }}/vendors/Flot/jquery.flot.time.js"></script>
<script src="{{ asset('admin') }}/vendors/Flot/jquery.flot.stack.js"></script>
<script src="{{ asset('admin') }}/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="{{ asset('admin') }}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="{{ asset('admin') }}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="{{ asset('admin') }}/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="{{ asset('admin') }}/vendors/DateJS/build/date.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('admin') }}/vendors/moment/min/moment.min.js"></script>
<script src="{{ asset('admin') }}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('admin') }}/build/js/custom.min.js"></script>

</body>
</html>