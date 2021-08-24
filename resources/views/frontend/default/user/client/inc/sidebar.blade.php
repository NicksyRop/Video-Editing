<div class="aiz-user-sidenav-wrap pt-4 sticky-top c-scrollbar-light position-relative z-1">
    <div class="absolute-top-left d-xl-none">
        <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
            <i class="las la-times la-2x"></i>
        </button>
    </div>
    <div class="aiz-user-sidenav rounded overflow-hidden">
        <div class="px-4 text-center mb-4">
            <span class="avatar avatar-md mb-3">
                                <img src="{{ asset( Auth::user()->avatar)}} ">
                                 <span class="badge badge-dot badge-success badge-circle badge-status"></span>
                            </span>
            <h4 class="h5 fw-600">{{ Auth::user()->name }}</h4>
            <div class="text-center  mb-2">
                            </div>
            <div>
                <span class="rating rating-sm">
                    <i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i><i class = 'las la-star'></i>
                </span>
            </div>
            <div class="mb-1">
                                <span class="fw-600">
                    0.00
                </span>
                <span>
                    (0 Reviews)
                </span>
            </div>
        </div>


        <div class="sidemnenu mb-3">
            <ul class="aiz-side-nav-list" data-toggle="aiz-side-menu">

                <li class="aiz-side-nav-item">
                    <a href="{{ route('freelancer_dashboard')}}" class="aiz-side-nav-link active">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="aiz-side-nav-item">
                    <a href="#" class="aiz-side-nav-link">
                        <i class="las la-tachometer-alt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Projects</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                             <a href="{{route('project.index')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Open Projects</span>
                            </a>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="{{ route('client.completed')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Completed</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('client.pending')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Pending</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Rejected</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link">
                        <i class="las la-tachometer-alt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Paypal</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('client.paypal')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Deposit History</span>
                            </a>
                        </li>



                    </ul>
                </li>

                 <li class="aiz-side-nav-item">
                    <a href="#" class="aiz-side-nav-link">
                        <i class="las la-tachometer-alt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Following Clients</span>
                    </a>
                </li>
                 <li class="aiz-side-nav-item">
                    <a href="{{route('chats')}}" class="aiz-side-nav-link ">
                        <i class="las la-tachometer-alt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Message</span>
                        <span class="badge badge-primary badge-circle">0</span>
                    </a>
                </li>


               <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link">
                        <i class="las la-tachometer-alt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Setting</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Account Setting</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="#" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Profile Setting</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div>
            <a href="{{ route('logout') }}" class="btn btn-block btn-soft-danger rounded-0">
                <i class="las la-sign-out-alt"></i>
                {{ translate('Logout') }}
            </a>
        </div>
    </div>
</div>
