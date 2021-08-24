<header class="aiz-header bg-white @if(get_setting('header_stikcy') == 'on') sticky-top @endif">
    <div class="aiz-navbar py-15px fs-14 position-relative">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{ route('home') }}" class="d-inline-block">
                        <img src="{{ custom_asset(get_setting('header_logo')) }}" height="32">
                    </a>
                </div>
                <div class="search ml-lg-5 ml-auto mr-lg-auto">
                    <div class="front-header-search d-flex align-items-center bg-white px-3 px-lg-0">
                        <form action="{{ route('search') }}" method="GET" class="flex-grow-1">
                            <div class="input-group">
                                <a class="text-reset bg-soft-secondary fs-12 rounded-left d-lg-none p-2" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                                    <i class="las la-arrow-left la-2x"></i>
                                </a>
                                <div class="input-group-prepend flex-grow-1 d-none d-sm-block">
                                    <input type="text" class="form-control" placeholder="I'm looking for" name="keyword">
                                </div>
                                <select class="form-control aiz-selectpicker" name="type">
                                    <option value="freelancer" @isset($type)
                                        @if ($type == 'freelancer')
                                            selected
                                        @endif
                                    @endisset>{{ translate('Freelancers') }}</option>
                                    <option value="project" @isset($type)
                                        @if ($type == 'project')
                                            selected
                                        @endif
                                    @endisset>{{ translate('Projects') }}</option>
                                    <option value="service" @isset($type)
                                        @if ($type == 'service')
                                            selected
                                        @endif
                                    @endisset>{{ translate('Services') }}</option>
                                </select>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-icon btn-primary">
                                        <i class="las la-search la-rotate-270"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="menu">
                    <nav class="navbar-expand">
                        <ul class="navbar-nav ml-auto align-items-center">
                            <li class="nav-item d-lg-none">
                                <a class="p-2 d-inline-block" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                                    <i class="las la-search la-flip-horizontal la-2x"></i>
                                </a>
                            </li>

                            @guest
                                @if (Route::has('login'))
                                <li class="nav-item d-none d-lg-block">
                                    <a class="nav-link" href=" {{ route('login')}}">Log In</a>
                                </li>
                                @endif


                                @if (Route::has('register'))
                                <li class="nav-item ml-xl-3">
                                    <a class="btn btn-primary" href=" {{ route('register')  }}">Get Started</a>
                                </li>
                                @endif


                            @else
                            <div class="menu">
                                <nav class="navbar-expand">
                                    <ul class="navbar-nav ml-auto align-items-center">
                                        <li class="nav-item d-lg-none">
                                            <a class="p-2 d-inline-block" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                                                <i class="las la-search la-flip-horizontal la-2x"></i>
                                            </a>
                                        </li>
                                                                        <li class="dropdown d-none d-lg-block">
                                                <a class="dropdown-toggle no-arrow position-relative p-2" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-bell la-2x"></i>


                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg py-0">
                                                    <div class="p-3 bg-light border-bottom">
                                                        <h6 class="mb-0">Notifications</h6>
                                                    </div>
                                                    <ul class="list-group list-group-raw c-scrollbar-light" style="overflow-y:auto;max-height:300px;">

                                                                                                                                                    <li class="list-group-item">
                                                                <div class="text-center">
                                                                    <i class="las la-frown la-4x mb-4 opacity-40"></i>
                                                                    <h4 class="h5">No Notifications</h4>
                                                                </div>
                                                            </li>
                                                                                                </ul>
                                                    <div class="border-top">
                                                        <a href="#" class="btn btn-link btn-block">View All Notifications</a>
                                                    </div>
                                                </div>
                                            </li>
                                                                            <li class="dropdown d-none d-lg-block">
                                                <a class="dropdown-toggle no-arrow position-relative p-2" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-comment-dots la-2x"></i>
                                                                                        </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg py-0">
                                                    <div class="p-3 bg-light border-bottom">
                                                        <h6 class="mb-0">Messages</h6>
                                                    </div>

                                                    <div class="c-scrollbar-light" style="overflow-y:auto;max-height:300px;">
                                                                                                        <div class="text-center">
                                                                <i class="las la-frown la-4x mb-4 opacity-40"></i>
                                                                <h4 class="h5">No New Messages</h4>
                                                            </div>
                                                                                                </div>
                                                    <div class="border-top">
                                                        <a href=" {{ route('chats')}}" class="btn btn-link btn-block">View All Messages</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown ml-3 d-none d-lg-block">
                                                <button class="btn p-0 dropdown-toggle no-arrow" type="button" data-toggle="dropdown">
                                                    <span class="avatar avatar-sm border">

                                                        <img src="{{asset(Auth::user()->avatar) }} " alt="">
                                                     </span>
                                                    <span class="ml-2 text-left d-none d-xl-inline-block">
                                                        <span class="h6 d-block mb-0">{{ Auth::user()->name }} </span>
                                                        <span class="small fw-500 text-muted">
                                                            @if ( App\Models\Wallet::where('user_id',Auth::user()->id)->first())

                                                            <b>{{ App\Models\Wallet::where('user_id',Auth::user()->id)->first()->total}} </b>Dollars

                                                            @else

                                                            <b>0 Dollars</b>

                                                            @endif


                                                        </span>
                                                     </span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                    <div class="px-3 py-2">
                                                        <span class="h6 d-block mb-0"> {{Auth::user()->name }}</span>
                                                        <span class="small text-muted d-block text-truncate"> {{ Auth::user()->email }}</span>
                                                    </div>
                                                    <div class="dropdown-divider"></div>
                                                    @if (Auth::user()->duty == 'Freelancer')
                                                    <a class="dropdown-item" href=" {{ route('freelancer_dashboard') }}">
                                                        <i class="las la-tachometer-alt"></i>
                                                        Dashboard
                                                    </a>
                                                    @else

                                                    <a class="dropdown-item" href=" {{ route('client.dashboard') }}">
                                                        <i class="las la-tachometer-alt"></i>
                                                        Dashboard
                                                    </a>

                                                    @endif



                                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                                        <i class="las la-sign-out-alt"></i>
                                                        Log Out
                                                    </a>
                                                </div>
                                            </li>
                                      </ul>
                                </nav>
                            </div>
                            @endguest

                        </ul>
                    </nav>
                </div>



            </div>
        </div>
    </div>
</header>
