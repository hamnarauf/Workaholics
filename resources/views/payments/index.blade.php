<x-layout>
    <!--search overlay end-->
    <section class="single-block-wrapper section-padding">
        <x-sectionTitle title="Wallet" desc="Wallet and Transaction Details"></x-sectionTitle>
        <div id="main-wrapper">
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
                                        <button class="btn text-start p-2 plus">
                                            <p class="mb-0"><i class="fa fa-plus"></i> Add</p></span>
                                        </button>
                                    </div>
                                    <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card gradient-2">
                                <div class="card-body">
                                    <h3 class="d-inline text-white">Valid Balance</h3>
                                    <div class="d-inline-block">
                                        <h5 class="text-white">$ {{ Auth::user()->wallet }}</h5>
                                        <button class="btn text-start p-2 plus">
                                            <p class="mb-0">Get Paid</p></span>
                                        </button>
                                    </div>
                                    <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card gradient-3">
                                <div class="card-body">
                                    <h3 class="card-title text-white d-inline">Escrow Incoming</h3>
                                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                                    <div class="d-inline-block">
                                        <h4 class="text-white">$4565</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card gradient-4">
                                <div class="card-body">
                                    <h3 class="card-title text-white d-inline">Escrow Outgoing</h3>
                                    <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                                    <div class="d-block">
                                        <h4 class="text-white">$99</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <h3 class="h3  text-center mb-2">Wallet Transactions</h3>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="h4">Send History</h4>
                                    <div class="active-member">
                                        <div class="table-responsive">
                                            <table class="table table-xs mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Freelancer</th>
                                                        <th>Project Title</th>
                                                        <th>Milestone</th>
                                                        <th>Payment Date</th>
                                                        <th>Amount</th>
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
                                                        <td>$123 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
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
                                                        <th>Amount</th>
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
                                                        <td>$1234</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <h3 class="h3 text-center mb-2">Bank Transactions</h3>

                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="h4">Send History</h4>
                                    <div class="active-member">
                                        <div class="table-responsive">
                                            <table class="table table-xs mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Account No.</th>
                                                        <th>Payment Date</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>24334123 </td>
                                                        <td>22 June 2022 </td>
                                                        <td>$123 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="h4">Received History</h4>
                                    <div class="active-member">
                                        <div class="table-responsive">
                                            <table class="table table-xs mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Account No.</th>
                                                        <th>Payment Date</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>24334123 </td>
                                                        <td>22 June 2022 </td>
                                                        <td>$123 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #/ container -->
                </div>
            </div>
            <section>

</x-layout>