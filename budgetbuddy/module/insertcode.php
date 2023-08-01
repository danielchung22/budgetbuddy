<?php

// Establishing a connection to the MySQL database server and selecting the "budgetbuddy" database
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'budgetbuddy');

// Checking if the form is submitted with the 'insertdata' button.
if (isset($_POST['insertdata'])) {
    // Get the values from the form
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    // Check if any of the fields are empty
    if (empty($date) || empty($amount) || empty($category) || empty($description)) {
        echo '<script> alert("All fields are required."); </script>';
    } else {
        // Inserting data into the 'expense record' table
        $query = "INSERT INTO `expense record` (`Date`,`Amount`,`Category`,`Description`) VALUES ('$date','$amount','$category', '$description')";
        $query_run = mysqli_query($connection, $query);

         // Checking if the query executed successfully and displaying an alert message accordingly.
        if ($query_run) {
            echo '<script> alert("Data Saved"); </script>';
        } else {
            echo '<script> alert("Data Not Saved"); </script>';
        }
    }
     // Redirecting the user back to the 'entry.php' page after processing the form data.
    echo '<script> window.location.replace("http://localhost/budgetbuddy/entry.php"); </script>';
}

?>