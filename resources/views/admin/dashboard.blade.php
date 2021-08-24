@extends('admin.layouts.app')
@section('content')
<div class="aiz-content-wrapper">
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
                                                <img src="https://edytslive.sasawebdesigners.co.ke/public/assets/backend/default/img/avatar-place.png">
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
                                    <img src="https://edytslive.sasawebdesigners.co.ke/public/assets/frontend/default/img/flags/en.png" height="11">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-xs">
                                                            <a href="https://edytslive.sasawebdesigners.co.ke/language/en" class="dropdown-item">
                                        <img src="https://edytslive.sasawebdesigners.co.ke/public/assets/frontend/default/img/flags/en.png" height="11">
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
                                                                            <img src="https://edytslive.sasawebdesigners.co.ke/public/assets/frontend/default/img/avatar-place.png">
                                                                    </span>
                                    <span class="d-none d-md-block">
                                        <span class="d-block fw-500">Ediyt SuperAdmin</span>
                                        <span class="d-block small opacity-60">Admin</span>
                                    </span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-md">
                                <a href="https://edytslive.sasawebdesigners.co.ke/admin/profile" class="dropdown-item">
                                    <i class="las la-user-circle"></i>
                                    <span>My Account</span>
                                </a>

                                <a href="{{ route('logout')}}" class="dropdown-item">
                                    <i class="las la-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </div>
                    </div><!-- .aiz-topbar-item -->
                </div>
            </div>
    </div><!-- .aiz-topbar -->
    <div class="aiz-main-content">
        <div class="px-15px px-lg-25px">

            <div class="row gutters-10">
                <div class="col-lg-6">
                    <div class="row gutters-10">
                        <div class="col-6">
                            <div class="bg-grad-1 text-white rounded-lg mb-4 overflow-hidden">
                                <div class="px-3 pt-3">
                                    <div class="opacity-50">
                                        <span class="fs-12 d-block">Total Earnings From</span>
                                        Client Subscription
                                    </div>
                                    <div class="h3 fw-700 mb-3">Ksh0.00</div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-grad-2 text-white rounded-lg mb-4 overflow-hidden">
                                <div class="px-3 pt-3">
                                    <div class="opacity-50">
                                        <span class="fs-12 d-block">Total Earnings From</span>
                                        Freelancer Subscription
                                    </div>
                                    <div class="h3 fw-700 mb-3">Ksh0.00</div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                                <div class="px-3 pt-3">
                                    <div class="opacity-50">
                                        <span class="fs-12 d-block">Total Earnings From</span>
                                        Project Commission
                                    </div>
                                    <div class="h3 fw-700 mb-3">Ksh0.00</div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-grad-4 text-white rounded-lg mb-4 overflow-hidden">
                                <div class="px-3 pt-3">
                                    <div class="opacity-50">
                                        <span class="fs-12 d-block">Total Earnings of</span>
                                        All Time
                                    </div>
                                    <div class="h3 fw-700 mb-3">Ksh0.00</div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row gutters-10">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0 fs-14">Top Client Packages</h6>
                                </div>
                                <div class="card-body">
                                    <canvas id="pie-1" class="w-100" height="280"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0 fs-14">Top Freelancer Packages</h6>
                                </div>
                                <div class="card-body">
                                    <canvas id="pie-2" class="w-100" height="280"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gutters-10">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0 fs-14">Last Year Earnings</h6>
                        </div>
                        <div class="card-body">
                            <canvas id="graph-1" class="w-100" height="250"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-primary text-white">
                        <div class="card-header border-soft-dark">
                            <h6 class="mb-0">Last 30 Days Stat</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 pt-3 mb-3">
                                    <span class="mb-2 d-block fs-13 opacity-60">New Clients</span>
                                    <h5 class="h1 fw-700">2</h5>
                                </div>
                                <div class="col-6 pt-3 mb-3">
                                    <span class="mb-2 d-block fs-13 opacity-60">New Freelancers</span>
                                    <h5 class="h1 fw-700">2</h5>
                                </div>
                                <div class="col-6 pt-3 mb-3">
                                    <span class="mb-2 d-block fs-13 opacity-60">Posted Projects</span>
                                    <h5 class="h1 fw-700">1</h5>
                                </div>
                                <div class="col-6 pt-3 mb-3">
                                    <span class="mb-2 d-block fs-13 opacity-60">Comppleted Projects</span>
                                    <h5 class="h1 fw-700">0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Top running Projects</h6>
                    <a href="https://edytslive.sasawebdesigners.co.ke/admin/running-projects">View All</a>
                </div>
                <div class="card-body">
                    <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="4" data-xl-items="3" data-md-items="2" data-sm-items="1" data-arrows='true'>
                            <div class="caorusel-box">
                                <a class="card text-inherit" href="https://edytslive.sasawebdesigners.co.ke/project/html20210702-063516" target="_blank">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex mr-3 align-items-center text-inherit">
                                                <span class="avatar avatar-sm">
                                                    <img class="img-fluid rounded-circle" src="https://edytslive.sasawebdesigners.co.ke/public/assets/backend/default/img/avatar-place.png">
                                                </span>
                                                <div class="pl-2">
                                                    <h4 class="fs-14 mb-1">kenya</h4>
                                                    <div class="text-secondary fs-10">
                                                        <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                            0.00
                                                        </span>
                                                        <span>
                                                            (0 Reviews)
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right flex-shrink-0 pl-3">
                                                <span class="small">Hired at</span>
                                                <h4 class="mb-0">Ksh130.00</h4>
                                            </div>
                                        </div>
                                        <h5 class="fs-14 fw-600 lh-1-5 text-truncate-2">
                                            Hello
                                        </h5>
                                    </div>
                                </a>
                            </div>
                            <div class="caorusel-box">
                                <a class="card text-inherit" href="https://edytslive.sasawebdesigners.co.ke/project/explainer-video20210126-020255" target="_blank">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex mr-3 align-items-center text-inherit">
                                                <span class="avatar avatar-sm">
                                                    <img class="img-fluid rounded-circle" src="https://edytslive.sasawebdesigners.co.ke/public/assets/backend/default/img/avatar-place.png">
                                                </span>
                                                <div class="pl-2">
                                                    <h4 class="fs-14 mb-1">Esther</h4>
                                                    <div class="text-secondary fs-10">
                                                        <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                            0.00
                                                        </span>
                                                        <span>
                                                            (0 Reviews)
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right flex-shrink-0 pl-3">
                                                <span class="small">Hired at</span>
                                                <h4 class="mb-0">Ksh2,000.00</h4>
                                            </div>
                                        </div>
                                        <h5 class="fs-14 fw-600 lh-1-5 text-truncate-2">
                                            sampoel
                                        </h5>
                                    </div>
                                </a>
                            </div>
                            <div class="caorusel-box">
                                <a class="card text-inherit" href="https://edytslive.sasawebdesigners.co.ke/project/youtube-video-edits20210122-072150" target="_blank">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex mr-3 align-items-center text-inherit">
                                                <span class="avatar avatar-sm">
                                                    <img class="img-fluid rounded-circle" src="https://edytslive.sasawebdesigners.co.ke/public/assets/backend/default/img/avatar-place.png">
                                                </span>
                                                <div class="pl-2">
                                                    <h4 class="fs-14 mb-1">Adams Sahb</h4>
                                                    <div class="text-secondary fs-10">
                                                        <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                            0.00
                                                        </span>
                                                        <span>
                                                            (0 Reviews)
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right flex-shrink-0 pl-3">
                                                <span class="small">Hired at</span>
                                                <h4 class="mb-0">Ksh80.00</h4>
                                            </div>
                                        </div>
                                        <h5 class="fs-14 fw-600 lh-1-5 text-truncate-2">
                                            I want my YouTube videos edited and colors corrected
                                        </h5>
                                    </div>
                                </a>
                            </div>
                            <div class="caorusel-box">
                                <a class="card text-inherit" href="https://edytslive.sasawebdesigners.co.ke/project/abc20210122-042803" target="_blank">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex mr-3 align-items-center text-inherit">
                                                <span class="avatar avatar-sm">
                                                    <img class="img-fluid rounded-circle" src="https://edytslive.sasawebdesigners.co.ke/public/assets/backend/default/img/avatar-place.png">
                                                </span>
                                                <div class="pl-2">
                                                    <h4 class="fs-14 mb-1">Kamiti Paul</h4>
                                                    <div class="text-secondary fs-10">
                                                        <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                            0.00
                                                        </span>
                                                        <span>
                                                            (0 Reviews)
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right flex-shrink-0 pl-3">
                                                <span class="small">Hired at</span>
                                                <h4 class="mb-0">Ksh1.00</h4>
                                            </div>
                                        </div>
                                        <h5 class="fs-14 fw-600 lh-1-5 text-truncate-2">
                                            Abc
                                        </h5>
                                    </div>
                                </a>
                            </div>
                                </div>
                </div>
            </div>


        </div>
        <div class="bg-white text-center py-3 px-15px px-lg-25px mt-auto">
            <p class="mb-0">&copy; Ediyt v1.3</p>
        </div>
    </div>
</div>


@endsection
