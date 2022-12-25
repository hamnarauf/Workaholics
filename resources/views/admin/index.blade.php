<x-admin-layout>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div >
      
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
       
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid mt-3">
                <h3>Overall</h3>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Active Users</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$user}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Projects Posted</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{ $proj }}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Gigs Created</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{ $gig }}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Completed Jobs</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{ $cJobs }}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <h3>This Month</h3>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Users Joined</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{ $userM  }}</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jobs Posted</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$cJobsM}}</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Gigs Created</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$gigM}}</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Completed Jobs</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{$cJobsM}}</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="">Activity</h3>
                                <div id="activity">
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/1.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <a href="">
                                                <h5>Posted New Gig</h5>
                                            </a>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <a href=""></a>
                                            <h5>Posted New Project</h5></a>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <a href=""></a>
                                            <h5>Submitted Proposal</h5></a>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <a href=""></a>
                                            <h5>Completed Job</h5></a>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <a href=""></a>
                                            <h5>Logged In</h5></a>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <a href=""></a>
                                            <h5>New support ticket received</h5></a>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                    <div class="media pt-3 pb-3">
                                        <img width="35" src="./images/avatar/3.jpg" class="mr-3 rounded-circle">
                                        <div class="media-body">
                                            <a href=""></a>
                                            <h5>Facebook Post 30 Comments</h5></a>
                                            <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                        </div><span class="text-muted ">April 24, 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card card-widget">
                            <div class="card-body">
                                <h5 class="text-muted">Jobs Overview </h5>
                                <h2 class="mt-4">{{ $totalJobs }}</h2>
                                <span>Total Jobs</span>
                                <div class="mt-4">
                                    <h4>{{ $jobsProgress }}</h4>
                                    <h6>In Progress <span class="pull-right">{{ $jobsProgress }}%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar bg-primary" style="width: {{ $jobsProgress }}%;" role="progressbar">
                                            <span class="sr-only">{{ $jobsProgress }}% Order</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h4>{{$compJobs}}</h4>
                                    <h6 class="m-t-10 text-muted">Completed <span class="pull-right">{{$compJobs}}%</span>
                                    </h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar bg-success" style="width: {{$compJobs}}%;" role="progressbar">
                                            <span class="sr-only">{{$compJobs}} Order</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-widget">
                            <div class="card-body">
                                <h5 class="text-muted">Client Feedback Overview </h5>
                                <h2 class="mt-4">5680</h2>
                                <span>Total Feedbacks</span>
                                <div class="mt-4">
                                    <h4>30</h4>
                                    <h6>Positive <span class="pull-right">30%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar bg-success" style="width: 30%;" role="progressbar">
                                            <span class="sr-only">30% Order</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h4>50</h4>
                                    <h6 class="m-t-10 text-muted">Negative <span class="pull-right">50%</span>
                                    </h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar bg-danger" style="width: 50%;" role="progressbar">
                                            <span class="sr-only">50% Order</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
