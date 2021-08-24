<div class="aiz-sidebar-wrap">
    <div class="aiz-sidebar left c-scrollbar">
        <div class="aiz-side-nav-logo-wrap">
            <a href="{{ route('admin.dashboard')}}" class="d-block">
                <img src="{{asset('uploads/all/FOhA16mOfqibEvcrGLpmNnMaBjLtxnMeSV5TxSG2.png')}}" class="img-fluid">
            </a>
        </div>
        <div class="aiz-side-nav-wrap">
            <ul class="aiz-side-nav-list" data-toggle="aiz-side-menu">

                <li class="aiz-side-nav-item">
                    <a href="{{ route('admin.dashboard')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="aiz-side-nav-item">
                    <a href="#" class="aiz-side-nav-link">
                        <i class="las la-tasks aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Projects</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('admin.projects.all')}}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">All Projects</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('admin.projects.running')}}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">Running Project</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('admin.projects.open')}}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">Open Project</span>
                            </a>
                        </li>


                    </ul>
                </li>


                <li class="aiz-side-nav-item">
                    <a href="{{ route('verification')}}" class="aiz-side-nav-link ">
                        <i class="las la-user-check aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Verification Requests</span>
                    </a>
                </li>

                <li class="aiz-side-nav-item">
                    <a href="{{ route('chats')}}" class="aiz-side-nav-link ">
                        <i class="las la-sms aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Users Chats</span>
                    </a>
                </li>

                <li class="aiz-side-nav-item">
                    <a href="#" class="aiz-side-nav-link">
                        <i class="las la-user-circle aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Freelancers</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('freelancers.index')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">All Freelancers</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="aiz-side-nav-item">
                    <a href="#" class="aiz-side-nav-link">
                        <i class="las la-user-tie aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Clients</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('clients.index')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">All Clients</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="aiz-side-nav-item">
                    <a href="#" class="aiz-side-nav-link">
                        <i class="las la-star-half-alt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Reviews</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('freelancers.create')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Freelancers Reviews</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="aiz-side-nav-item">
                    <a href="#" class="aiz-side-nav-link">
                        <i class="las la-chart-bar aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Accountings</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('client.payment')}}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">Project Payments</span>
                            </a>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="https://edytslive.sasawebdesigners.co.ke/admin/freelancer-payments" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">Freelancer Payouts</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="aiz-side-nav-item">
                    <a href="#" class="aiz-side-nav-link">
                        <i class="las la-hourglass-half aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Website</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="/admin/website/header" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">Header</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="/admin/website/footer" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">Footer</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="/admin/website/pages" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Pages</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="/admin/website/appearance" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">Appearance</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="aiz-side-nav-item">
                    <a href="#" class="aiz-side-nav-link ">
                        <i class="las la-user aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">User Management</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                                                                                                                                                                                                       <li class="aiz-side-nav-item">
                                    <a href="{{ route('users.index') }}" class="aiz-side-nav-link ">
                                        <span class="aiz-side-nav-text">Users</span>
                                    </a>
                                </li>
                         <li class="aiz-side-nav-item">
                            <a href="{{ route('roles.index') }}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Roles</span>
                            </a>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="{{ route('level.index')}}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">Levels</span>
                            </a>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="{{ route('tests.index')}}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">Tests</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="aiz-side-nav-item">
                    <a href="#" class="aiz-side-nav-link">
                        <i class="las la-cog aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Setting</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('general_configuration')}}" class="aiz-side-nav-link">
                                <span class="aiz-side-nav-text">General</span>
                            </a>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="{{ route('languages.index')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">System Languages</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('currencies.index')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">System Currency</span>
                            </a>
                        </li>


                    </ul>

                    <li class="aiz-side-nav-item">
                        <a href="{{ route('addons.index')}}" class="aiz-side-nav-link ">
                            <i class="las la-cubes aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Addon Manager</span>
                        </a>
                    </li>
                </li>

                <!-- Offline Payment Addon-->


            </ul><!-- .aiz-side-nav -->
        </div><!-- .aiz-side-nav-wrap -->
    </div><!-- .aiz-sidebar -->
    <div class="aiz-sidebar-overlay">

    </div>
</div>
