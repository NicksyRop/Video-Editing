<section class="py-5">
    <div class="container">

    </div>

    <div class="container">
        <div class="d-flex align-items-start">

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
            <button class="btn btn-block btn-soft-primary" target="_blank">Client</button>
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
        <div class="bg-primary text-white text-center py-5 position-relative">
            <svg class="absolute-full" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" fill="rgba(255,255,255,0.1)" fill-opacity="1" xml:space="preserve">
                <path d="M318.5,267.4c-0.1,0-0.1,0-0.2-0.1c-24.6-9.9-38.9-15-51.6-19.3V64.4c59.7,3.9,106.7,40.5,106.7,85 c0,5.9,4.8,10.7,10.7,10.7s10.7-4.8,10.7-10.7c0-56-56.5-102.1-128-106.4V10.7C266.7,4.8,261.9,0,256,0s-10.7,4.8-10.7,10.7V43 c-71.5,4.2-128,50.3-128,106.4c0,40.5,29.1,77,75.9,95.2c0.1,0,0.2,0.1,0.3,0.1c24.8,9.6,39.1,14.5,51.8,18.7v184.3 c-59.7-3.9-106.7-40.5-106.7-85c0-5.9-4.8-10.7-10.7-10.7s-10.7,4.8-10.7,10.7c0,56,56.5,102.1,128,106.4v32.3 c0,5.9,4.8,10.7,10.7,10.7s10.7-4.8,10.7-10.7V469c71.5-4.2,128-50.3,128-106.4C394.7,322.1,365.5,285.5,318.5,267.4z  M201.7,225 c-0.2-0.1-0.3-0.1-0.5-0.2c-38.6-15-62.6-43.9-62.6-75.4c0-44.4,47-81,106.7-85v176.6C234.4,237.2,221.5,232.7,201.7,225z M266.7,447.6V270.5c10.9,3.8,24,8.6,44,16.7c0,0,0.1,0,0.1,0c0.1,0.1,0.3,0.1,0.4,0.1c38.4,15,62.2,43.8,62.2,75.3 C373.3,407.1,326.4,443.7,266.7,447.6z"/>
            </svg>
            <p class="text-uppercase opacity-60 mb-1 fs-11">Balance</p>
            <h3 class="fw-700">Ksh0.00</h3>
        </div>
        <div>
            <a href="{{route('logout')}}" class="btn btn-block hov-bg-danger hov-text-white rounded-0">
                <i class="las la-sign-out-alt"></i>
                Logout
            </a>
        </div>
    </div>
</div>

            <div class="aiz-user-panel">

            	<div class="row gutters-10">
            		<div class="col-md-8">
            			<div class="card">
            				<div class="card-body">
            					<div class="row mb-4">
            						<div class="col">
            							<div class="">
				        					<div class="opacity-50">This Month Earnings</div>
				        					<div class="h4 fw-700 text-primary">Ksh0.00</div>
				        				</div>
            						</div>
            						<div class="col">
            							<div class="">
				        					<div class="opacity-50">Total Earnings</div>
				        					<div class="h4 fw-700 text-success">Ksh0.00</div>
				        				</div>
            						</div>
            					</div>
            					<div>
            						<canvas id="graph-1" class="w-100" height="222"></canvas>
            					</div>
            				</div>
            			</div>
            		</div>
            		<div class="col-md-4">
            			<div class="card">
            				<div class="card-body">
            					<canvas id="pie-1" class="w-100" height="300"></canvas>
            				</div>
            			</div>
            		</div>
            	</div>
            	<div class="row gutters-10">
            		<div class="col-md-4">
            			<div class="bg-grad-1 text-white rounded-lg mb-4 overflow-hidden">
            				<div class="px-3 pt-3">
	        					<div class="opacity-50">My Balance</div>
	        					<div class="h3 fw-700">Ksh0.00</div>
            				</div>
        					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
								<path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
							</svg>
            			</div>
            		</div>
            		<div class="col-md-4">
            			<div class="bg-grad-2 text-white rounded-lg mb-4 overflow-hidden">
            				<div class="px-3 pt-3">
	        					<div class="opacity-50">Total Completed Projects</div>
                                					<div class="h3 fw-700">0</div>
	        				</div>
        					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
								<path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
							</svg>
            			</div>
            		</div>
            		<div class="col-md-4">
            			<div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
            				<div class="px-3 pt-3">
	        					<div class="opacity-50">Running Projects</div>
                        	        					<div class="h3 fw-700">0</div>
	        				</div>
        					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
								<path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L26.7,192C53.3,192,107,192,160,202.7C213.3,213,267,235,320,218.7C373.3,203,427,149,480,117.3C533.3,85,587,75,640,90.7C693.3,107,747,149,800,149.3C853.3,149,907,107,960,112C1013.3,117,1067,171,1120,202.7C1173.3,235,1227,245,1280,213.3C1333.3,181,1387,107,1413,69.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
							</svg>
            			</div>
            		</div>
            	</div>
            	<div class="row gutters-10">
            		<div class="col-md-4">
            			<div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Current Package</h6>
                    </div>
            				<div class="card-body text-center">
            					<img src="https://ediyt.com/public/uploads/freelancer_package/photo/5cnd37KOIXMcfuZYQeDykbCH6wlRtYTimvtT6q6c.jpeg" class="img-fluid mb-4 h-110px">
            					<h4 class="fw-600 mb-3 text-primary">Basic</h4>
            					<p class="mb-1 text-muted">Remaining Fixed Projects bids - 1</p>
                                <p class="text-muted mb-1">Remaining Long Term Projects bids - 1</p>
            					<p class="text-muted mb-4">Remaining Service - 5</p>
            					<a href="https://ediyt.com/package-select" class="btn btn-primary d-inline-block">Upgrade</a>
            				</div>
            			</div>
            		</div>
            		<div class="col-md-4">
            			<div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Current Package Summary</h6>
                    </div>
            				<div class="card-body">
            					<ul class="list-unstyled mb-0">
            						<li class=" py-2">
                                                                                <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                								<i class="las la-check text-white"></i>
                							</span>
                                                      							<span>Fixed Projects bids - <span class="fw-700">1</span></span>
            						</li>
            						<li class=" py-2">
                                                                                <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                								<i class="las la-check text-white"></i>
            							  </span>
                                      				                       <span>Long Term Projects bids - <span class="fw-700">1</span></span>
            						</li>
            						<li class=" py-2">
                                                                                        <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                    								<i class="las la-check text-white"></i>
    				                          </span>
                                                      							<span>Skill Adding Limit - <span class="fw-700">5</span></span>
            						</li>
            						<li class=" py-2">
                                                                                        <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                    								<i class="las la-check text-white"></i>
    					                      </span>
                                                      							<span>Portfolio Adding Limit - <span class="fw-700">10</span></span>
            						</li>
            						<li class=" py-2">
                                                                                    <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                								<i class="las la-check text-white"></i>
                						  </span>
                                                      							<span>Project Bookmark Limit - <span class="fw-700">150</span></span>
            						</li>
            						<li class=" py-2">
                                                                                <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
            								<i class="las la-check text-white"></i>
					                      </span>
                                                  					      <span>Job Experience Add Limit - <span class="fw-700">10</span></span>
            						</li>
                                    <li class=" py-2">
                                                                                    <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                                                <i class="las la-check text-white"></i>
                                            </span>
                                                                                <span>Bio Word Limit - <span class="fw-700">150</span></span>
                                    </li>
                                    <li class=" py-2">
                                                                                    <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                                                <i class="las la-check text-white"></i>
                                            </span>
                                                                                <span>Service Limit - <span class="fw-700">5</span></span>
                                    </li>
            						<li class=" py-2">
							                                                        <span class="mr-2 badge badge-circle badge-success badge-sm align-middle">
                  								<i class="las la-check text-white"></i>
                  							</span>
                                        	                                    <span>Client Following option</span>
            						</li>
            					</ul>
            				</div>
            			</div>
            		</div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0">Suggested Package</h6>
                            </div>
                            <div class="card-body">
                                <ul class="list-group ">
                                                                            <li class="list-group-item">
                                            <a href="https://ediyt.com/package-select" class="d-flex align-items-center text-inherit">
                                                <img src="https://ediyt.com/public/uploads/freelancer_package/photo/5cnd37KOIXMcfuZYQeDykbCH6wlRtYTimvtT6q6c.jpeg" class="img-fluid mr-4 h-70px">
                                                <span class="">
                                                    <h4 class="h6 mb-0">Basic</h4>
                                                    <span class=" fs-15 fw-700 text-primary">Ksh0.00</span>
                                                    <span class="fs-10 text-secondary">/10 Days</span>
                                                </span>
                                            </a>
                                        </li>
                                                                    </ul>
                            </div>
                        </div>
                    </div>
            	</div>
            	<div class="row gutters-10">
	            	<div class="col-md-5">
	            		<div class="card">
	            			<div class="card-header">
	            				<h6 class="mb-0 fs-15 fw-600">Running Projects</h6>
	            			</div>
	            			<div class="c-scrollbar-light card-body overflow-auto" style="max-height: 365px">
	            				<ul class="list-group list-group-flush">
                                    	            				</ul>
	            			</div>
	            		</div>
	            	</div>
	            	<div class="col-md-7">
	            		<div class="card">
	            			<div class="card-header">
	            				<h6 class="mb-0 fs-15 fw-600">Suggested Projects</h6>
	            			</div>
	            			<div class="card-body px-0">
	            				<div class="aiz-auto-scroll c-scrollbar-light px-3" style="max-height: 340px;overflow-y: scroll;">
		            				<ul class="list-group list-group-flush">
		            							            				</ul>
	            				</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
        </div>
    </div>
</section>
