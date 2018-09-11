<header id="topbar">
    <div class="topbar-left">
        <ol class="breadcrumb">
            <li class="crumb-active">
                <a href="dashboard.html">Dashboard</a>
            </li>
            <li class="crumb-icon">
                <a href="dashboard.html">
                    <span class="glyphicon glyphicon-home"></span>
                </a>
            </li>
            <li class="crumb-link">
                <a href="index.html">Home</a>
            </li>
            <li class="crumb-trail">Dashboard</li>
        </ol>
    </div>
    <div class="topbar-right">
        
        <div class="ml15 ib va-m" id="toggle_sidemenu_r">
            <a href="#" class="pl5"> <i class="fa fa-sign-in fs22 text-primary"></i>
                <span class="badge badge-hero badge-danger">

                    @foreach ($users as $user)

                        @if($user->isOnline())
                            @php
                                ++$user_online_count;
                            @endphp
                        @endif
                    @endforeach
                    {{ $user_online_count }}
                </span>
            </a>
        </div>
    </div>
</header>