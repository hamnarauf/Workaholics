<x-layout>
    <section id="main-wrapper">
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="text-white d-inline">Total Balance</h3>
                                <div class="d-inline-block">
                                    <h5 class=" text-white">$4565</h5>
                                    <p class="text-white mb-0"></p>

                                    <a href='{{url('wtransactions/create')}}'><button class="btn text-start p-2 plus">
                                            <p class="mb-0"><i class="fa fa-plus"></i> Add</p></span>
                                        </button></a>

                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Valid Balance</h3>
                                <div class="d-inline-block">
                                    <h4 class="text-white">$ 8541</h4>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">In Escrow</h3>
                                <div class="d-inline-block">
                                    <h4 class="text-white">$4565</h4>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">In Review</h3>
                                <div class="d-inline-block">
                                    <h4 class="text-white">$99</h4>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="h4">Spend History</h4>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Freelancer</th>
                                                    <th>Project Title</th>
                                                    <th>Milestone</th>
                                                    <th>Payment Date</th>
                                                    <th>Released Date</th>
                                                    <th>Status</th>
                                                    <th>Payment Method</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">Sarah Smith</td>
                                                    <td>Project 1</td>
                                                    <td>Milestone 1</td>
                                                    <td>
                                                        <span>23 aug 2022</span>
                                                    </td>
                                                    <td> 23 sept 2022 </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                                    <td> Local Bank #12334556 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="h4">Received History</h4>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Client</th>
                                                    <th>Project Title</th>
                                                    <th>Milestone</th>
                                                    <th>Payment Date</th>
                                                    <th>Released Date</th>
                                                    <th>Status</th>
                                                    <th>Payment Method</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">Sarah Smith</td>
                                                    <td>Project 1</td>
                                                    <td>Milestone 1</td>
                                                    <td>
                                                        <span>23 aug 2022</span>
                                                    </td>
                                                    <td> 23 sept 2022 </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                                    <td> Local Bank #12334556 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
    </section>
</x-layout>