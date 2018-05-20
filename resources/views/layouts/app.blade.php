<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="/ampleadmin/plugins/images/favicon.png">
    <title> @yield('title', 'Home') | {{ config('app.name') }}</title>

    <link href="/ampleadmin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ampleadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="/ampleadmin/css/animate.css" rel="stylesheet">
    <link href="/ampleadmin/css/style.css" rel="stylesheet">
    <link href="/ampleadmin/css/colors/megna-dark.css" id="theme" rel="stylesheet">

    @stack('styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>

    <div id="wrapper">

        @include('layouts.topbar')

        @include('layouts.sidebar')

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">@yield('title')</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20">
                            <i class="ti-settings text-white"></i>
                        </button>

                        <ol class="breadcrumb">
                            @if(Request::is('home'))
                                <li class="active"> <i class="fa fa-home"></i> Home</li>
                            @else
                                <li><a href="{{ route('home') }}">Home</a></li>
                            @endif

                            @yield('breadcrumb')
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        @yield('content')

                        {{-- <div class="white-box">
                            <h3 class="box-title">Welcome to starter page</h3>


                        </div> --}}
                    </div>
                </div>

                @include('layouts.right-sidebar')

            </div>

            <footer class="footer text-center"> 2018 &copy; <a href="{{ config('app.url') }}">{{ config('app.name') }}</a></footer>

        </div>

    </div>

    <script src="/ampleadmin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/ampleadmin/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/ampleadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="/ampleadmin/js/jquery.slimscroll.js"></script>
    <script src="/ampleadmin/js/waves.js"></script>
    <script src="/ampleadmin/js/custom.min.js"></script>
    <script src="/ampleadmin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

    @stack('scripts')

</body>

</html>