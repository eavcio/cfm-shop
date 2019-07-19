<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CFM Shop</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/cryptocurrency-icons.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.css') }}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/helper.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="{{ asset('assets/css/style-primary.css') }}">

</head>

<body>

    <div class="main-wrapper">


        <!-- Header Section Start -->
        @include('header')
        <!-- Header Section End -->

        <!-- Side Header Start -->
        @include('sidenav')
        <!-- Side Header End -->

        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Dashboard <span>/ eCommerce</span></h3>
                    </div>
                </div><!-- Page Heading End -->

                <!-- Page Button Group Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-date-range">
                        <input type="text" class="form-control input-date-predefined">
                    </div>
                </div><!-- Page Button Group End -->

            </div><!-- Page Headings End -->

            <!-- Top Report Wrap Start -->
            <div class="row">
                <!-- Top Report Start -->
                <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="top-report">

                        <!-- Head -->
                        <div class="head">
                            <h4>Total Visitor</h4>
                            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h5>Todays</h5>
                            <h2>100,560.00</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 92%;"></div>
                            </div>
                            <p>92% of unique visitor</p>
                        </div>

                    </div>
                </div><!-- Top Report End -->

                <!-- Top Report Start -->
                <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="top-report">

                        <!-- Head -->
                        <div class="head">
                            <h4>Product Sold</h4>
                            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h5>Todays</h5>
                            <h2>85,000.00</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 98%;"></div>
                            </div>
                            <p>98% of unique visitor</p>
                        </div>

                    </div>
                </div><!-- Top Report End -->

                <!-- Top Report Start -->
                <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="top-report">

                        <!-- Head -->
                        <div class="head">
                            <h4>Order Received</h4>
                            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h5>Todays</h5>
                            <h2>5,000.00</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 88%;"></div>
                            </div>
                            <p>88% of unique visitor</p>
                        </div>

                    </div>
                </div><!-- Top Report End -->

                <!-- Top Report Start -->
                <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="top-report">

                        <!-- Head -->
                        <div class="head">
                            <h4>Total Revenue</h4>
                            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h5>Todays</h5>
                            <h2>3,000,000.00</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 76%;"></div>
                            </div>
                            <p>76% of unique visitor</p>
                        </div>

                    </div>
                </div><!-- Top Report End -->
            </div><!-- Top Report Wrap End -->

            <div class="row mbn-30">

                <!-- Revenue Statistics Chart Start -->
                <div class="col-md-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Revenue Statistics</h4>
                        </div>
                        <div class="box-body">
                            <div class="chart-legends-1 row">
                                <div class="chart-legend-1 col-12 col-sm-4">
                                    <h5 class="title">Total Sale</h5>
                                    <h3 class="value text-secondary">$5000,000</h3>
                                </div>
                                <div class="chart-legend-1 col-12 col-sm-4">
                                    <h5 class="title">Total View</h5>
                                    <h3 class="value text-primary">10000,000</h3>
                                </div>
                                <div class="chart-legend-1 col-12 col-sm-4">
                                    <h5 class="title">Total Support</h5>
                                    <h3 class="value text-warning">100,000</h3>
                                </div>
                            </div>
                            <div class="chartjs-revenue-statistics-chart">
                                <canvas id="chartjs-revenue-statistics-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div><!-- Revenue Statistics Chart End -->

            </div>

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        @include('footer')
        <!-- Footer Section End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <!--Plugins JS-->
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/tippy4.min.js.js') }}"></script>
    <!--Main JS-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="{{ asset('assets/js/plugins/moment/moment.min.js') }}"></script>

    <!--Daterange Picker-->
    <script src="{{ asset('assets/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/daterangepicker/daterangepicker.active.js') }}"></script>

    <!--Echarts-->
    <script src="{{ asset('assets/js/plugins/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs/chartjs.active.js') }}"></script>

    <!--VMap-->
    <script src="{{ asset('assets/js/plugins/vmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/vmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/vmap/vmap.active.js') }}"></script>

</body>

</html>