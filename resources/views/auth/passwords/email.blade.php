{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/skin/default_skin/css/theme.css')}}">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin-tools/admin-forms/css/admin-forms.css')}}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">

    <!-- Start: Settings Scripts -->
    <script>
        var boxtest = localStorage.getItem('boxed');

        if (boxtest === 'true') {
            document.body.className += ' boxed-layout';
        }
    </script>
    <!-- End: Settings Scripts -->

    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">

        <!-- Start: Content -->
        <section id="content_wrapper">

            <!-- begin canvas animation bg -->
            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- Begin: Content -->
            <section id="content">

                <div class="admin-form theme-info mw500" style="margin-top: 10%;" id="login1">
                    <div class="row mb15 table-layout">

                        <div class="col-xs-6 va-m pln">

                            <h1 style="color:#ffffff">Youth's Voice</h1>
                            {{-- <a href="dashboard.html" title="Return to Dashboard">
                                <img src="assets/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
                            </a> --}}
                        </div>

                        <div class="col-xs-6 text-right va-b pr5">
                            <div class="login-links">
                                <a href="#" class="" title="False Credentials">Password Reset</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-info mv10 heading-border br-n">

                        <!-- end .form-header section -->
                        <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}" id="contact">
                            @csrf
                            <div class="panel-body bg-white p15 pt25">

                                <div class="alert alert-micro alert-border-left alert-info pastel alert-dismissable mn">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <i class="fa fa-info pr10"></i> Enter yourr <b>Email</b> and iinstructions will be sent to you!
                                </div>

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="row table-layout hidden">

                                    <div class="col-xs-3 p20 pv15 va-m br-r bg-light">
                                        <img class="br-a bw4 br-grey img-responsive center-block" src="assets/img/avatars/2.jpg" title="AdminDesigns Logo">
                                    </div>

                                    <div class="col-xs-9 p20 pv15 va-m bg-light">

                                        <div class="section row hidden">
                                            <div class="col-md-4">
                                                <a href="#" class="button btn-social facebook span-left mr5 btn-block">
                                                    <span><i class="fa fa-facebook"></i>
                                                    </span>Facebook</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="button btn-social twitter span-left mr5 btn-block">
                                                    <span><i class="fa fa-twitter"></i>
                                                    </span>Twitter</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="button btn-social googleplus span-left btn-block">
                                                    <span><i class="fa fa-google-plus"></i>
                                                    </span>Google+</a>
                                            </div>
                                        </div>

                                        <h3 class="mb5"> Michael Rowls <small> - logged out for <b> 5 hours </b></small></h3>
                                        <p class="text-muted">michaelrowls@company.com</p>

                                        <div class="section mt25">
                                            <label for="password" class="field prepend-icon">
                                                <input type="text" name="password" id="password" class="gui-input" placeholder="Enter password">
                                                <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                    </div>
                                </div>
                            </div>
                            <!-- end .form-body section -->
                            <div class="panel-footer p25 pv15">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section mn">
                                            <label for="email" class="field-label text-muted fs18 mb10 hidden">Password Reset</label>
                                            <div class="smart-widget sm-right smr-80">
                                                <label for="email" class="field prepend-icon">
                                                    <input type="email" name="email" id="email" class="gui-input" placeholder="Your Email Address" value="{{ old('email') }}">
                                                    <label for="email" class="field-icon"><i class="fa fa-envelope-o"></i>
                                                    </label>
                                                </label>
                                                <button type="submit" class="button"> Submit</button>
                                            </div>
                                            <!-- end .smart-widget section -->
                                        </div>
                                        <!-- end section -->
                                    </div>

                                </div>

                            </div>
                            <!-- end .form-footer section -->
                        </form>

                    </div>

                </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="{{asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Page Javascript -->
   

</body>

</html>

