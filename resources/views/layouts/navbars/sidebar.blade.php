<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('/bower_components/demo_template/argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
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
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Home') }}
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('mp') }}">
                        <i class="fab fa-laravel" style="color: #f4645f;"></i> {{ __('MOUSE PAD') }}
                        
                    </a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gg') }}">
                        <i class="ni ni-planet text-blue"></i> {{ __('GAMING GEAR') }}
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('da') }}">
                        <i class="ni ni-pin-3 text-orange"></i> {{ __('DECOR ACCESSORIES') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('smw') }}">
                        <i class="ni ni-pin-3 text-orange"></i> {{ __('SPEAKER, MICRO, WEBCAM') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('gc') }}">
                        <i class="ni ni-pin-3 text-orange"></i> {{ __('GAMING CHAIR ') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('gt') }}">
                        <i class="ni ni-pin-3 text-orange"></i> {{ __('GAMING TABLE ') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('ssu') }}">
                        <i class="ni ni-pin-3 text-orange"></i> {{ __('SIGNAL SPLITTER, USB ') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('rc') }}">
                        <i class="ni ni-pin-3 text-orange"></i> {{ __('RADIATORS, COOLING ') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('pa') }}">
                        <i class="ni ni-pin-3 text-orange"></i> {{ __('PHONE ACCESSORIES ') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="ni ni-bullet-list-67 text-default"></i>
                      <span class="nav-link-text">Tables</span>
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
                        <i class="ni ni-spaceship"></i> Getting started
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/foundation/colors.html">
                        <i class="ni ni-palette"></i> Foundation
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/components/alerts.html">
                        <i class="ni ni-ui-04"></i> Components
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
