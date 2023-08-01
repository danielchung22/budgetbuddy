
<!-- Web Design and Development Group Assignment -->

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>BudgetBuddy - Web-Based Financial Tracker</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link to Web-Based CSS StyleSheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" rel="stylesheet">

    <!-- Link to Web-Based Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Link to External CSS StyleSheets-->
    <!-- Placed Below so it will be loaded last so it will take priority -->
    <link href="css/material-dashboard-min.css" rel="stylesheet">
    <link href="css/material-dashboard.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">
        <!-- NavBar -->
        <?php
        include 'navbar.php';
        include 'module/carddata.php';
        include 'module/chartdata.php';
        ?>

    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-2">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">&nbsp;</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block"
                    role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
        </div>

        <!-- Swiper Card Section -->
        <!-- Defining the Array for the Cards -->
        <?php
        include 'module/cardarray.php';
        ?>

        <!-- This Code Segment Generates the Swiper -->
        <div id="analytics">
            <div class="container">
                <h1 class="sub-title">Expenditure</h1>
            </div>
            <div class="slide-container swiper">
                <div class="swiper analytics">
                    <div class="swiper-wrapper">
                        <?php foreach ($cards as $card) { ?>
                            <div class="swiper-slide">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-md-8">
                                            <!-- Left Column -->
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1">
                                                <?php echo $card['title']; ?>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0">
                                                <?php echo $card['number']; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-end">
                                            <!-- Right Column -->
                                            <?php if (isset($card['icon'])) { ?>
                                                <?php if (strpos($card['icon'], 'fa-') === 0) { ?>
                                                    <i class="fas <?php echo $card['icon']; ?>"></i>
                                                <?php } else { ?>
                                                    <i class="bx <?php echo $card['icon']; ?>"></i>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- Swiper Pagination and Nav Buttons -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
            </div>
        </div>

        <!-- Generates the Charts -->
        <div class="row">
            <div class="col">
                <canvas id="pieChart" width="400" height="400"></canvas>
            </div>
            <div class="col">
                <canvas id="lineChart" width="400" height="400"></canvas>
            </div>
            <div class="col">
                <canvas id="barChart" width="400" height="400"></canvas>
            </div>
        </div>
        </div>

        <!-- JavaScripts -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="js/swiper.js"></script>

</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>

<!-- Script for Chart Data -->
<script>
    var pieChartData = <?php echo json_encode($data_for_pie_chart); ?>;
    var lineChartData = <?php echo json_encode($data_for_line_chart); ?>;
    var barChartData = <?php echo json_encode($data_for_bar_chart); ?>;
</script>

<!-- JS Link to Code to Generate Charts -->
<script src="js/chartdata.js"></script>