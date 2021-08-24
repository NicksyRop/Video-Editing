<div class="aiz-topbar px-15px px-lg-25px d-flex align-items-stretch justify-content-between">
    <div class="d-xl-none d-flex">
        <div class="aiz-topbar-nav-toggler d-flex align-items-center justify-content-start mr-2 mr-md-3" data-toggle="aiz-mobile-nav">
            <button class="aiz-mobile-toggler">
                <span></span>
            </button>
        </div>
        <div class="aiz-topbar-logo-wrap d-flex align-items-center justify-content-start">
            <a href="index.html" class="d-block">
                <img src="https://edytslive.sasawebdesigners.co.ke/public/uploads/all/FOhA16mOfqibEvcrGLpmNnMaBjLtxnMeSV5TxSG2.png" class="img-fluid" height="45">
            </a>
        </div>
    </div>
        <div class="d-flex justify-content-between align-items-stretch flex-grow-xl-1">
            <div class="d-none d-md-flex justify-content-around align-items-center align-items-stretch">
                <div class="aiz-topbar-item">
                    <div class="d-flex align-items-center">
                        <a class="btn btn-icon btn-circle btn-light" href="https://edytslive.sasawebdesigners.co.ke" target="_blank" title="Browse Website">
                            <i class="las la-globe"></i>
                        </a>
                    </div>
                </div><!-- .aiz-topbar-item -->
            </div>
            <div class="d-flex justify-content-around align-items-center align-items-stretch">
                <div class="aiz-topbar-item ml-2">
                    <div class="align-items-stretch d-flex dropdown">
                        <a class="dropdown-toggle no-arrow" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="btn btn-icon p-1 position-relative">
                                <i class="las la-bell la-2x"></i>
                                <span class="badge badge-circle badge-primary position-absolute absolute-top-right">

                                    2
                                </span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg py-0">
                            <div class="p-3 bg-light border-bottom">
                                <h6 class="mb-0">Notifications</h6>
                            </div>
                            <ul class="list-group list-group-raw c-scrollbar-light overflow-auto" style="max-height:300px;">

                                                                                        <li class="list-group-item d-flex justify-content-between align-items-start hov-bg-soft-primary">
                                    <a href="https://edytslive.sasawebdesigners.co.ke/admin/all-project-payments" class="media text-inherit">
                                        <span class="avatar avatar-sm mr-3">
                                            <img src="https://edytslive.sasawebdesigners.co.ke/public/assets/backend/default/img/avatar-place.png">
                                        </span>
                                        <div class="media-body">
                                            <p class="mb-1">A milestone payment has been requested by kenya</p>
                                            <small class="text-muted">1 week ago</small>
                                        </div>
                                    </a>
                                    <button class="btn p-0" data-toggle="tooltip" data-title=" Mark as read ">
                                        <span class="badge badge-md  badge-dot   badge-circle badge-primary"></span>
                                    </button>
                                </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start hov-bg-soft-primary">
                                    <a href="https://edytslive.sasawebdesigners.co.ke/project/html20210702-063516" class="media text-inherit">
                                        <span class="avatar avatar-sm mr-3">
                                            <img src="{{ asset('assets/backend/default/img/avatar-place.png')}}">
                                        </span>
                                        <div class="media-body">
                                            <p class="mb-1">A new Project has been created by Uganda</p>
                                            <small class="text-muted">1 week ago</small>
                                        </div>
                                    </a>
                                    <button class="btn p-0" data-toggle="tooltip" data-title=" Mark as read ">
                                        <span class="badge badge-md  badge-dot   badge-circle badge-primary"></span>
                                    </button>
                                </li>
                                                        </ul>
                            <div class="border-top">
                                <a href="https://edytslive.sasawebdesigners.co.ke/admin/notifications" class="btn btn-link btn-block">View All Notifications</a>
                            </div>
                        </div>
                    </div>
                </div><!-- .aiz-topbar-item -->

                            <div class="aiz-topbar-item ml-2">
                    <div class="align-items-stretch d-flex dropdown">
                        <a class="dropdown-toggle no-arrow" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="btn btn-icon">
                                <img src="{{ asset('assets/frontend/default/img/flags/en.png')}}" height="11">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-xs">
                                                        <a href="https://edytslive.sasawebdesigners.co.ke/language/en" class="dropdown-item">
                                    <img src="{{ asset('assets/frontend/default/img/flags/en.png') }}" height="11">
                                    <span class="ml-2">English</span>
                                </a>
                                                </div>
                    </div>
                </div><!-- .aiz-topbar-item -->

                <div class="aiz-topbar-item ml-2">
                    <div class="align-items-stretch d-flex dropdown">
                        <a class="dropdown-toggle no-arrow text-dark" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="d-flex align-items-center">
                                <span class="avatar avatar-sm mr-md-2 border">
                                                                        <img src="{{asset('assets/frontend/default/img/avatar-place.png')}}">
                                                                </span>
                                <span class="d-none d-md-block">
                                    <span class="d-block fw-500">Ediyt SuperAdmin</span>
                                    <span class="d-block small opacity-60">{{Auth::user()->name}}</span>
                                </span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-md">


                            <a href="{{ route('logout')}}" class="dropdown-item">
                                <i class="las la-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div><!-- .aiz-topbar-item -->
            </div>
        </div>
</div>
