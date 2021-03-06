<!DOCTYPE html>
<html lang="{{ config('app.name') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="/ampleadmin/plugins/images/favicon.png">
    <title>Register | {{ config('app.name') }}</title>
    <!-- Bootstrap Core CSS -->
    <link href="/ampleadmin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/ampleadmin/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/ampleadmin/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/ampleadmin/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
        <div class="login-box login-sidebar">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('register') }}">
                    @csrf
                    <a href="javascript:void(0)" class="text-center db"><img src="/ampleadmin/plugins/images/admin-logo-dark.png" alt="Home" /><br/><img src="/ampleadmin/plugins/images/admin-text-dark.png" alt="Home" /></a>
                    <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small>

                    <div class="form-group m-t-20 has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input type="name" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username" required="" autofocus>
                            <span class="fa fa-user form-control-feedback"></span>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <small>{{ $errors->first('name') }}</small>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required="">
                            <span class="fa fa-envelope form-control-feedback"></span>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <small>{{ $errors->first('email') }}</small>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="">
                            <span class="fa fa-key form-control-feedback"></span>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <small>{{ $errors->first('password') }}</small>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required="">
                            <span class="fa fa-repeat form-control-feedback"></span>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <small>{{ $errors->first('password_confirmation') }}</small>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Already have an account? <a href="{{ route('login') }}" class="text-primary m-l-5"><b>Sign In</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="/ampleadmin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/ampleadmin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="/ampleadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

    <!--slimscroll JavaScript -->
    <script src="/ampleadmin/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/ampleadmin/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/ampleadmin/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="/ampleadmin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>