<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Workaholics</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Workaholics</title>
    </head>

    <body>
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
                                        <p class="text-white mb-0"></p>
                                        <button class="btn text-start p-2 plus"><p class="mb-0"><i class="fa fa-plus"></i> Add</p></span></button>
                                    </div>
                                    <span class="float-right display-5 opacity-5"><i
                                            class="fa fa-shopping-cart"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card gradient-2">
                                <div class="card-body">
                                    <h3 class="card-title text-white">Valid Balance</h3>
                                    <div class="d-inline-block">
                                        <h4 class="text-white">$ {{ $wallet }}</h4>
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
                                                        <td><img src="./images/avatar/1.jpg"
                                                                class=" rounded-circle mr-3" alt="">Sarah Smith</td>
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
                                                        <td><img src="./images/avatar/1.jpg"
                                                                class=" rounded-circle mr-3" alt="">Sarah Smith</td>
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
        </div>
        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jQuery/jquery.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
    </body>

</html>
