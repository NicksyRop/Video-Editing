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
        <div class="text-center mb-3 px-3">
            <button class="btn bt-success">{{Auth::user()->user_name}}</button>
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
                            <a href="{{route('projects')}}" class="aiz-side-nav-link ">
                               <span class="aiz-side-nav-text">Open Projects</span>
                           </a>
                       </li>
                        <li class="aiz-side-nav-item">
                             <a href="{{route('active')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Bidded</span>
                            </a>
                        </li>

                        <li class="aiz-side-nav-item">
                            <a href="{{ route('completed')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Completed</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('pending')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Pending</span>
                            </a>
                        </li>
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('rejected')}}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Rejected</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="javascript:void(0);" class="aiz-side-nav-link">
                        <i class="las la-tachometer-alt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Earnings</span>
                        <span class="aiz-side-nav-arrow"></span>
                    </a>
                    <ul class="aiz-side-nav-list level-2">
                        <li class="aiz-side-nav-item">
                            <a href="{{ route('freelancer.earnings') }}" class="aiz-side-nav-link ">
                                <span class="aiz-side-nav-text">Earnings History</span>
                            </a>
                        </li>



                    </ul>
                </li>


                </li>
                                                <li class="aiz-side-nav-item">
                    <a href="{{route('chats')}}" class="aiz-side-nav-link ">
                        <i class="las la-tachometer-alt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Message</span>
                        <span class="badge badge-primary badge-circle">0</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="#" class="aiz-side-nav-link ">
                        <i class="las la-tachometer-alt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Reviews</span>
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
        <div class="bg-primary text-white text-center py-5 position-relative">
            <svg class="absolute-full" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" fill="rgba(255,255,255,0.1)" fill-opacity="1" xml:space="preserve">
                <path d="M318.5,267.4c-0.1,0-0.1,0-0.2-0.1c-24.6-9.9-38.9-15-51.6-19.3V64.4c59.7,3.9,106.7,40.5,106.7,85 c0,5.9,4.8,10.7,10.7,10.7s10.7-4.8,10.7-10.7c0-56-56.5-102.1-128-106.4V10.7C266.7,4.8,261.9,0,256,0s-10.7,4.8-10.7,10.7V43 c-71.5,4.2-128,50.3-128,106.4c0,40.5,29.1,77,75.9,95.2c0.1,0,0.2,0.1,0.3,0.1c24.8,9.6,39.1,14.5,51.8,18.7v184.3 c-59.7-3.9-106.7-40.5-106.7-85c0-5.9-4.8-10.7-10.7-10.7s-10.7,4.8-10.7,10.7c0,56,56.5,102.1,128,106.4v32.3 c0,5.9,4.8,10.7,10.7,10.7s10.7-4.8,10.7-10.7V469c71.5-4.2,128-50.3,128-106.4C394.7,322.1,365.5,285.5,318.5,267.4z  M201.7,225 c-0.2-0.1-0.3-0.1-0.5-0.2c-38.6-15-62.6-43.9-62.6-75.4c0-44.4,47-81,106.7-85v176.6C234.4,237.2,221.5,232.7,201.7,225z M266.7,447.6V270.5c10.9,3.8,24,8.6,44,16.7c0,0,0.1,0,0.1,0c0.1,0.1,0.3,0.1,0.4,0.1c38.4,15,62.2,43.8,62.2,75.3 C373.3,407.1,326.4,443.7,266.7,447.6z"/>
            </svg>
            <p class="text-uppercase opacity-60 mb-1 fs-11">Balance</p>
           @if ( App\Models\Wallet::where('user_id',Auth::user()->id)->first() == null)
               <h3 class="fw-700"> 0 Dollars</h3>



            @else
              <h3 class="fw-700"> {{ App\Models\Wallet::where('user_id',Auth::user()->id)->first()->total}}Dollars</h3>

            @endif

        </div>
        <div>
            <a href="{{ route('logout') }}" class="btn btn-block hov-bg-danger hov-text-white rounded-0">
                <i class="las la-sign-out-alt"></i>
                {{ translate('Logout') }}
            </a>
        </div>
    </div>
</div>
