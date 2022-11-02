<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('/bower_components/demo_template/argon') }}/img/brand/logobop.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('/bower_components/demo_template/argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('users.show', ['user' => auth()->user()->id])}}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('bower_components/demo_template/argon') }}/img/brand/logo.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item kk"  >
                    <a class="nav-link" href="{{ route('h') }}">
                    <img src="{{ asset('bower_components/demo_template/argon') }}/img/img-side/home1.png" alt="" width="25%" height="25%" style="margin-right : 15px"> {{ __('HOME') }}
                    </a>
                </li>
                
                <li class="nav-item kk">
                    <a class="nav-link"  href="{{ route('m') }}">
                        <img src="{{ asset('bower_components/demo_template/argon') }}/img/img-side/mouse1.png" alt="" width="25%" height="25%" style="margin-right : 15px"> {{ __('MOUSE') }}
                        
                    </a>

                </li>

                <li class="nav-item kk">
                    <a class="nav-link" href="{{ route('k') }}">
                    <img src="{{ asset('bower_components/demo_template/argon') }}/img/img-side/keyboard1.png" alt="" width="25%" height="25%" style="margin-right : 15px"> {{ __('KEYBOARD') }}
                    </a>
                </li>

                <li class="nav-item kk">
                    <a class="nav-link" href="{{ route('f') }}">
                    <img src="{{ asset('bower_components/demo_template/argon') }}/img/img-side/figure1.png" alt="" width="25%" height="25%" style="margin-right : 15px"> {{ __('FIGURE') }}
                    </a>
                </li>
                <li class="nav-item kk">
                    <a class="nav-link" href="{{ route('s') }}" id="test11">
                    <img src="{{ asset('bower_components/demo_template/argon') }}/img/img-side/speaker1.png" alt="" width="40px" height="25%" style="margin-right : 20px"> {{ __('SPEAKER') }}
                    </a>
                </li>
                <li class="nav-item kk">
                    <a class="nav-link " href="{{ route('c') }}">
                    <img src="{{ asset('bower_components/demo_template/argon') }}/img/img-side/clock1.png" alt="" width="35px" height="25%" style="margin-right : 25px"> {{ __('CLOCK ') }}
                    </a>
                    
                </li>
                <li class="nav-item kk">
                    <a class="nav-link" href="{{ route('da') }}">
                    <img src="{{ asset('bower_components/demo_template/argon') }}/img/img-side/decoraccesories1.png" alt="" width="25%" height="25%" style="margin-right : 15px"> {{ __('DECOR ACCESSORIES ') }}
                    </a>
                </li>
               
                
                
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">Documentation</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/getting-started/overview.html">
                        <i class="ni ni-spaceship"></i> SUPPORT
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/foundation/colors.html">
                        <i class="ni ni-palette"></i> FEEDBACK
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/components/alerts.html">
                        <i class="ni ni-ui-04"></i> MAP
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
