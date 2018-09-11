@php
    use App\User;
    $users = User::all();
    $user_online_count = 0;
@endphp

<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/skin/default_skin/css/theme.css')}}">

    <!-- Admin Panels CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin-tools/admin-plugins/admin-panels/adminpanels.css')}}">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin-tools/admin-forms/css/admin-forms.css')}}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
    @section('style')
    @show

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="dashboard-page sb-l-o sb-r-c">

    @include('layouts._theme-option')

    <!-- Start: Main -->
    <div id="main">

        @include('layouts._header')
        <!-- Start: Sidebar -->
        @include('layouts._left-sidebar')
        <!-- Start: Content -->
        <section id="content_wrapper">

            @include('layouts._topbar-dropdown')

            <!-- Start: Topbar -->
            @include('layouts._topbar')
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content">
                
                @section('content')
                @show

            
            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

        <!-- Start: Right Sidebar -->
        @include('layouts._right-sidebar')
        <!-- End: Right Sidebar -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->
    
    @include('layouts._footer')
    @section('script')
    @show
    <!-- END: PAGE SCRIPTS -->

</body>

</html>

