<aside id="sidebar_left" class="nano nano-primary">
    <div class="nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">
            <div class="user-menu">
                <div class="row text-center mbn">
                    <div class="col-xs-4">
                        <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                            <span class="glyphicons glyphicons-home"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                            <span class="glyphicons glyphicons-inbox"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                            <span class="glyphicons glyphicons-bell"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                            <span class="glyphicons glyphicons-imac"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicons glyphicons-settings"></span>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                            <span class="glyphicons glyphicons-restart"></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- End: Sidebar Header -->

        <!-- sidebar menu -->
        <ul class="nav sidebar-menu">
            <li class="sidebar-label pt20">Menu</li>
            

            <!-- sidebar resources -->
            <li>
                <a class="accordion-toggle {{ Route::current()->getName() == 'my_payments' || Route::current()->getName() == 'payment_list' || Route::current()->getName() == 'payment.create' ? 'menu-open':'' }}" href="javascript:">
                    <span class="fa fa-ruble"></span>
                    <span class="sidebar-title">Payments</span>
                    <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    @if (Auth()->user()->position == 'Exicutive Body')
                        <li class="{{ Route::current()->getName() == 'payment_list' ? 'active':'' }}">
                            <a href="{{ route('payment_list') }}">
                                <span class="glyphicons glyphicons-list"></span> Payment List </a>
                        </li>
                        <li class="{{ Route::current()->getName() == 'payment.create' ? 'active':'' }}">
                            <a href="{{ route('payment.create') }}">
                                <span class="glyphicons glyphicons-circle_plus"></span> Add New Payment </a>
                        </li>
                    @endif
                    
                    <li class="{{ Route::current()->getName() == 'my_payments' ? 'active':'' }}">
                        <a href="{{ route('my_payments') }}">
                            <span class="glyphicons glyphicons-crown"></span> My Payment </a>
                    </li>
                    
                </ul>
            </li>
            <li>
                <a class="accordion-toggle 
                {{ Route::current()->getName() == 'all_members' || Route::current()->getName() == 'member_request'  ? 'menu-open':'' }}" href="#">
                    <span class="fa fa-users"></span>
                    <span class="sidebar-title">Members</span>
                    <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li class="{{ Route::current()->getName() == 'all_members' ? 'active':'' }}">
                        <a href="{{ route('all_members') }}">
                            <span class="glyphicons glyphicons-pen"></span> All Member </a>
                    </li>

                    @if (Auth()->user()->position == 'Exicutive Body')
                        <li class="{{ Route::current()->getName() == 'member_request' ? 'active':'' }}">
                            <a href="{{ route('member_request') }}">
                                <span class="glyphicons glyphicons-pen"></span> Member Request </a>
                        </li>
                    @endif
                    
                    
                </ul>
            </li>

            <li>
                <a class="accordion-toggle 
                {{ url()->current() == url('/profile/' . Auth()->user()->id) || 
                url()->current() == url('/profile/' . Auth()->user()->id .'/edit') ? 'menu-open':'' }}" href="#">
                    <span class="fa fa-user"></span>
                    <span class="sidebar-title">My Profile </span>
                    <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li class="{{ url()->current() == url('/profile/' . Auth()->user()->id) ? 'active':'' }}">
                        <a href="{{ url('profile/'.Auth()->user()->id) }}">
                            <span class="glyphicons glyphicons-pen"></span> Profile </a>
                    </li>

                    <li class="{{ url()->current() == url('/profile/' . Auth()->user()->id .'/edit') ? 'active':'' }}">
                        <a href="{{ url('profile/'.Auth()->user()->id.'/edit') }}">
                            <span class="glyphicons glyphicons-pen"></span>Edit Profile </a>
                    </li>
                    
                    
                </ul>
            </li>
           

        </ul>
        <div class="sidebar-toggle-mini">
            <a href="#">
                <span class="fa fa-sign-out"></span>
            </a>
        </div>
    </div>
</aside>
