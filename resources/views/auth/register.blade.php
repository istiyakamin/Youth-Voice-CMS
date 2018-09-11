{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/skin/default_skin/css/theme.css')}}">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/admin-tools/admin-forms/css/admin-forms.css')}}">



    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

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

                <div class="admin-form theme-info mw700" style="margin-top: 3%;" id="login1">

                    <div class="row mb15 table-layout">

                        <div class="col-xs-6 va-m pln">

                            <h1 style="color:#ffffff">Youth's Voice</h1>
                            {{-- <a href="dashboard.html" title="Return to Dashboard">
                                <img src="assets/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
                            </a> --}}
                        </div>

                        <div class="col-xs-6 text-right va-b pr5">
                            <div class="login-links">
                                <a href="{{ route('login') }}" class="" title="Sign In">Sign In</a>
                                <span class="text-white"> | </span>
                                <a href="{{ route('register') }}" class="active" title="Register">Register</a>
                            </div>

                        </div>

                    </div>

                    <div class="panel panel-info mt10 br-n">

                        <div class="panel-heading heading-border bg-white hidden">
                            <div class="section row mn">
                                <div class="col-sm-4">
                                    <a href="#" class="button btn-social facebook span-left mr5 btn-block">
                                        <span><i class="fa fa-facebook"></i>
                                        </span>Facebook</a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#" class="button btn-social twitter span-left mr5 btn-block">
                                        <span><i class="fa fa-twitter"></i>
                                        </span>Twitter</a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#" class="button btn-social googleplus span-left btn-block">
                                        <span><i class="fa fa-google-plus"></i>
                                        </span>Google+</a>
                                </div>
                            </div>
                        </div>

                        <form method="POST" action="{{ route('register') }}" id="account2">
                            @csrf
                            <div class="panel-body p25 bg-light">
                                <div class="section-divider mt10 mb40">
                                    <span>Set up your account</span>
                                </div>
                                <!-- .section-divider -->

                                <div class="section row">
                                    <div class="col-md-6">
                                        <label for="firstname" class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" value="{{old('firstname')}}" class="gui-input" placeholder="First name...">
                                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>

                                            
                                            @if($errors->has('firstname'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-warning pr10"></i>
                                                    <strong>Oops!!</strong> {{ $errors->first('firstname') }}
                                                </div>
                                            @endif

                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="col-md-6">
                                        <label for="lastname" class="field prepend-icon">
                                            <input type="text" name="lastname" id="lastname" class="gui-input" value="{{old('lastname')}}" placeholder="Last name...">
                                            <label for="lastname" class="field-icon"><i class="fa fa-user"></i>
                                            </label>

                                            @if($errors->has('lastname'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-warning pr10"></i>
                                                    <strong>Oops!!</strong> {{ $errors->first('lastname') }}
                                                </div>
                                            @endif
                                        </label>
                                    </div>
                                    <!-- end section -->
                                </div>
                                <!-- end .section row section -->

                                <div class="section">
                                    <label for="email" class="field prepend-icon">
                                        <input type="email" name="email" id="email" class="gui-input" value="{{old('email')}}"  placeholder="Email address">
                                        <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                        </label>
                                        @if($errors->has('email'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-warning pr10"></i>
                                                    <strong>Oops!!</strong> {{ $errors->first('email') }}
                                                </div>
                                            @endif
                                    </label>
                                </div>

                                <div class="section">
                                    <label for="gender" class="field select">
                                        <div class="field select">
                                            <select name="gender" id="gender" class="gui-input">
                                                <option value="">Select Gender</option>
                                                <option {{ old('gender') == 'Male'? 'selected':''}} value="Male">Male</option>
                                                <option {{ old('gender') == 'Female'? 'selected':''}} value="Female">Female</option>
                                                <option {{ old('gender') == 'Others'? 'selected':''}} value="Others">Others</option>
                                            </select>
                                        </div>

                                        @if($errors->has('gender'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-warning pr10"></i>
                                                    <strong>Oops!!</strong> {{ $errors->first('gender') }}
                                                </div>
                                            @endif
                                        
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <div class="smart-widget sm-right smr-120">
                                        <label for="datepicker1" class="field prepend-icon">
                                                    <input type="date" id="datepicker1" name="birthdate" value="{{old('birthdate')}}"  class="gui-input" placeholder="Datepicker Popup">
                                                    <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                    </label>
                                                </label>

                                        <label for="birthdate" class="button">Birthdate</label>
                                        
                                    </div>
                                    @if($errors->has('birthdate'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-warning pr10"></i>
                                                    <strong>Oops!!</strong> {{ $errors->first('birthdate') }}
                                                </div>
                                            @endif
                                    <!-- end .smart-widget section -->
                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label for="occupation" class="field prepend-icon">
                                        <input type="text" name="occupation" id="occupation" value="{{old('occupation')}}" class="gui-input" placeholder="occupation">
                                        <label for="occupation" class="field-icon"><i class="fa fa-briefcase"></i>
                                        </label>
                                    </label>
                                    @if($errors->has('occupation'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-warning pr10"></i>
                                                    <strong>Oops!!</strong> {{ $errors->first('occupation') }}
                                                </div>
                                            @endif
                                </div>

                                <div class="section">
                                    <label class="field select">
                                        <select name="position" id="position" class="gui-input">
                                            <option value="">YV Position</option>
                                            <option {{ old('position') == 'Campus Compass'? 'selected': ''}} value="Campus Compass">Campus Compass</option>
                                            <option {{ old('position') == 'General Member'? 'selected': ''}} value="General Member">General Member</option>
                                            <option {{ old('position') == 'Senior Member'? 'selected': ''}} value="Senior Member">Senior Member</option>
                                            <option {{ old('position') == 'Exicutive Body'? 'selected': ''}} value="Exicutive Body">Exicutive Body</option>
                                        </select>
                                        <i class="arrow double"></i>
                                        @if($errors->has('position'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-warning pr10"></i>
                                                    <strong>Oops!!</strong> {{ $errors->first('position') }}
                                                </div>
                                            @endif
                                    </label>
                                    
                                </div>

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <textarea class="gui-textarea" id="address" name="address" placeholder="Put Down your address">{{old('address')}}</textarea>
                                        <label for="address" class="field-icon"><i class="fa fa-home"></i>
                                        </label>
                                        <span class="input-footer">
                                            <strong>Hint:</strong>Don't give any false information here...</span>
                                    </label>
                                    <br>    
                                    @if($errors->has('address'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-warning pr10"></i>
                                                    <strong>Oops!!</strong> {{ $errors->first('address') }}
                                                </div>
                                            @endif
                                </div>

                                <div class="section">
                                    <label for="password" class="field prepend-icon">
                                        <input type="password" name="password" id="password" class="gui-input" placeholder="Create a password">
                                        <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                    @if($errors->has('password'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-warning pr10"></i>
                                                    <strong>Oops!!</strong> {{ $errors->first('password') }}
                                                </div>
                                            @endif
                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label for="confirmPassword" class="field prepend-icon">
                                        <input type="password" name="password_confirmation" id="confirmPassword" class="gui-input" placeholder="Retype your password">
                                        <label for="confirmPassword" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                        </label>
                                    </label>
                                    @if($errors->has('password_confirmation'))
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <i class="fa fa-warning pr10"></i>
                                                    <strong>Oops!!</strong> {{ $errors->first('password_confirmation') }}
                                                </div>
                                            @endif
                                </div>
                                <!-- end section -->

                                <div class="section-divider mv40">
                                    <span>Review the Terms</span>
                                </div>
                                <!-- .section-divider -->

                                <div class="section mb15">
                                    <label class="option block mt15">
                                        <input type="checkbox" name="terms">
                                        <span class="checkbox"></span>I agree to the
                                        <a href="#" class="smart-link"> terms of use. </a>
                                    </label>
                                </div>
                                <!-- end section -->

                            </div>
                            <!-- end .form-body section -->
                            <div class="panel-footer clearfix">
                                <button type="submit" class="button btn-primary pull-right">Create Account</button>
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
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->


    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="{{ asset('assets/js/pages/login/EasePack.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/login/rAF.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/login/TweenLite.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/login/login.js')}}"></script>

    <script type="text/javascript" src="{{ asset('assets/admin-tools/admin-forms/js/jquery-tcm-month.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-tools/admin-forms/js/jquery-ui-timepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-tools/admin-forms/js/jquery-ui-touch-punch.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-tools/admin-forms/js/jquery.spectrum.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin-tools/admin-forms/js/jquery.stepper.min.js')}}"></script>

    
  
    <!-- Theme Javascript -->
    <script type="text/javascript" src="{{ asset('assets/js/utility/utility.js')}}"></script>

   
    <script type="text/javascript" src="{{ asset('assets/js/main.js')}}"></script> 
    <script type="text/javascript" src="{{ asset('assets/js/demo.js')}}"></script>

    <!-- Page Javascript -->
    <script type="text/javascript">
    jQuery(document).ready(function() {
        "use strict";
        // Init Theme Core      
        Core.init();
        
        // Init Demo JS
        Demo.init();

        // Init CanvasBG and pass target starting location
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 2.1,
                y: window.innerHeight / 4.2
            },
        });

         // Form Switcher
            $('#form-switcher > button').on('click', function() {
                var btnData = $(this).data('form-layout');
                var btnActive = $('#form-elements-pane .admin-form.active');

                // Remove any existing animations and then fade current form out
                btnActive.removeClass('slideInUp').addClass('animated fadeOutRight animated-shorter');
                // When above exit animation ends remove leftover classes and animate the new form in
                btnActive.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                    btnActive.removeClass('active fadeOutRight animated-shorter');
                    $('#' + btnData).addClass('active animated slideInUp animated-shorter')
                });
            });

            // Cache some dom elements
            var adminForm = $('.admin-form');
            var options = adminForm.find('.option');
            var switches = adminForm.find('.switch');
            var buttons = adminForm.find('.button');


            var Panel = $('#p1');

            // Form Skin Switcher
            $('#skin-switcher a').on('click', function() {
                var btnData = $(this).data('form-skin');

                $('#skin-switcher a').removeClass('item-active');
                $(this).addClass('item-active')

                adminForm.each(function(i, e) {
                    var skins = 'theme-primary theme-info theme-success theme-warning theme-danger theme-alert theme-system theme-dark'
                    var panelSkins = 'panel-primary panel-info panel-success panel-warning panel-danger panel-alert panel-system panel-dark'
                    $(e).removeClass(skins).addClass('theme-' + btnData);
                    Panel.removeClass(panelSkins).addClass('panel-' + btnData);
                });

                
            });


            /* @date picker
            ------------------------------------------------------------------ */
            $("#datepicker1").datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });

    });
    </script>
    

    <!-- END: PAGE SCRIPTS -->

</body>

</html>
