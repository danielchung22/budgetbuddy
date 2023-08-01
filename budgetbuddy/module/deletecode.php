<?php
// Establishing a connection to the MySQL database server and selecting "budgetbuddy" database
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'budgetbuddy');

if (isset($_POST['deletedata'])) {
    $id = $_POST['delete_id'];

    // SQL query to delete a record from the 'expense record' table based on the provided transaction_id.
    $query = "DELETE FROM `expense record` WHERE transaction_id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        // Displaying an alert message if data is successfully deleted.
        echo '<script> alert("Data Deleted"); </script>';
    } else {
        // Displaying an alert message if data deletion is unsuccessful.
        echo '<script> alert("Data Not Deleted"); </script>';
    }
    // Redirecting the user back to the 'entry.php' page after deleting the data.
    echo '<script> window.location.replace("http://localhost/budgetbuddy/entry.php"); </script>';
}
?>