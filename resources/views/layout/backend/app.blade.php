<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Sistema de Gerenciamento')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/css/colors.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->


</head>

<body class="navbar-top">

@include('layout.backend.partials.navbar')

<!-- Page container -->
<div class="page-container" style="">

    <!-- Page content -->
    <div class="page-content">

    @include('layout.backend.partials.sidebar')

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                            <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                            <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                            <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                        </div>
                    </div>
                </div>

                @yield('breadcrumb')
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                @yield('content')

                @include('layout.backend.partials.footer')

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

<!-- Core JS files -->
<script type="text/javascript" src="{{ asset('backend/js/plugins/loaders/pace.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/core/libraries/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/core/libraries/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/loaders/blockui.min.js') }}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/styling/uniform.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/ui/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/ui/nicescroll.min.js') }}"></script>
@stack('scripts-before')

<script type="text/javascript" src="{{ asset('backend/js/core/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/pages/layout_fixed_custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/ui/ripple.min.js') }}"></script>
@stack('scripts-after')
<!-- /theme JS files -->
</body>
</html>
