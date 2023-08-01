<?php

session_start();

include 'include/config.php';

// Define the options for the "Category" select element
$categories = array(

    "Food",
    "Healthcare",
    "Bills",
    "Rent",
    "Entertainment",
    "Transportation",
    "Others"
);
$query = "SELECT * FROM `expense record`";
$query_run = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($query_run);

$date = $row['date'];
$amount = $row['amount'];
$selectedCategory = $row['category'];
$description = $row['description'];

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
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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

</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">

        <!-- NavBar -->
        <?php
        include 'navbar.php';
        ?>
    </aside>

    <!-- PHP for File Upload Data Entry-->
    <?php
    if (isset($_POST["import"])) {
        $fileName = $_FILES["excel"]["name"];
        $fileExtension = explode('.', $fileName);
        $fileExtension = strtolower(end($fileExtension));
        $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

        $targetDirectory = __DIR__ . "/uploads/" . $newFileName;
        move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);

        error_reporting(0);
        ini_set('display_errors', 0);

        require __DIR__ . '/excelReader/excel_reader2.php';
        require __DIR__ . '/excelReader/SpreadsheetReader.php';

        $reader = new SpreadsheetReader($targetDirectory);
        foreach ($reader as $key => $row) {
            $date = $row[0];
            $amount = $row[1];
            $description = $row[3];
            $category = $row[2];
            mysqli_query($conn2, "INSERT INTO `expense record` VALUES('', '$date', '$amount', '$description', '$category')");
        }
    }
    ?>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-success border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Automatic Entry / File Upload</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0"> &nbsp; </h6>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="row mb-1">
                                        <label for="file"></label>
                                        <form class="" action="" method="post" enctype="multipart/form-data">
                                            <input type="file" name="excel" required value="" class="mb-3">
                                            <button type="submit" name="import"
                                                class="btn btn-primary submitBtn">Import</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PHP to Insert New Entry -->
        <div class="modal fade" id="transactionaddmodal" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Transaction </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Links to module to add data -->
                    <form action="module/insertcode.php" method="POST">
                        <div class="modal-body">
                            <div class="input-field my-3">
                                <label>Date </label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="date" name="date" id="date" class="form-control"
                                        placeholder="Enter date">
                                </div>
                            </div>
                            <div class="input-field my-3">
                                <label>Amount </label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="number" name="amount" value="0" step="any" min="0" class="form-control"
                                        placeholder="Enter expense">
                                </div>
                            </div>
                            <div class="input-field my-3">
                                <label>Category:</label>
                                <div class="input-group input-group-outline mb-3">
                                    <select required name="category" required class="box">
                                        <option disabled selected>Select Category</option>
                                        <?php
                                        // Loop through the categories array to generate options
                                        foreach ($categories as $category) {
                                            echo '<option>' . $category . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <h6 class="mb-0"> &nbsp; </h6>
                                </div>
                            </div>
                            <div class="input-field my-3">
                                <label>Description:</label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="text" name="description" id="description" class="form-control"
                                        placeholder="Enter Description">
                                    <h6 class="mb-0"> &nbsp; </h6>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-tertiary" data-dismiss="modal">Close</button>
                            <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- PHP Code to Update Data Entry -->
        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Edit Transaction </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Links to module to edit data -->
                    <form action="module/updatecode.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="update_id" id="update_id">
                            <div class="input-field my-3">
                                <label> Date </label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="date" name="date" id="date"
                                        value="<?php echo htmlspecialchars($date, ENT_QUOTES, 'UTF-8'); ?>"
                                        class="date form-control" placeholder="Enter date">
                                </div>
                            </div>
                            <div class="input-field my-3">
                                <label> Expense </label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="number" name="amount" id="amount"
                                        value="<?php echo htmlspecialchars($amount); ?>" step="any" min="0"
                                        class="form-control" placeholder="Enter expense">
                                </div>
                            </div>
                            <div class="input-field my-3">
                                <label>Category:</label>
                                <div class="input-group input-group-outline mb-3">
                                    <select required name="category" required class="box">
                                        <option disabled selected>Select Category</option>
                                        <?php
                                        // Loop through the categories array to generate options
                                        foreach ($categories as $category) {
                                            $isSelected = ($category === $selectedCategory) ? 'selected' : '';
                                            echo '<option>' . $category . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <h6 class="mb-0"> &nbsp; </h6>
                                </div>
                            </div>
                            <div class="input-field my-3">
                                <label>Description:</label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="text" name="description" id="description"
                                        value="<?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>"
                                        class="description form-control" placeholder="cardimportEnter Description">
                                    <h6 class="mb-0"> &nbsp; </h6>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-tertiary" data-dismiss="modal">Close</button>
                            <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- PHP Code to Delete Entry -->
        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Delete Transaction </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Links to module to delete data -->
                    <form action="module/deletecode.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="delete_id" id="delete_id">
                            <h4> Are you sure?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-tertiary" data-dismiss="modal">No</button>
                            <button type="submit" name="deletedata" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Lower Part of the Table -->
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Manual Entry / Records</h6>
                            </div>
                        </div>
                        <div class="container">
                            <h6 class="mb-0"> &nbsp; </h6>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                    data-target="#transactionaddmodal">
                                    ADD DATA
                                </button>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class=" text-capitalize ps-2">Expenses:</h4>
                                    <div class="table-responsive">
                                        <table id="datatableid" class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Transaction ID</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Amount Spent</th>
                                                    <th scope="col">Expense Category</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($query_run) {
                                                    foreach ($query_run as $row) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['transaction_id'] . "</td>";
                                                        echo "<td>" . $row['date'] . "</td>";
                                                        echo "<td>" . $row['amount'] . "</td>";
                                                        echo "<td data-category='" . htmlspecialchars($row['category'], ENT_QUOTES, 'UTF-8') . "'>" . $row['category'] . "</td>";
                                                        echo "<td>" . $row['description'] . "</td>";
                                                        echo "<td><button type=\"button\" class=\"btn btn-warning editbtn\">EDIT</button></td>";
                                                        echo "<td><button type=\"button\" class=\"btn btn-danger deletebtn\">DELETE</button></td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='7'>No Record Found</td></tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

            <script src="js/entry.js"></script>

</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>

</html>