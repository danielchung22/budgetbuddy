<?php

// Establishing a connection to the MySQL database server and selecting the "budgetbuddy" database
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'budgetbuddy');

// Checking if the form is submitted with the 'editdata' button.
if (isset($_POST['updatedata'])) {
    // Get the values from the form
    $id = $_POST['update_id'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    // Prepare the update query
    $query = "UPDATE `expense record` SET ";

    // Create an array to hold the fields that need to be updated
    $update_fields = array();

    // Add fields to the update_fields array only if they are not empty
    if (!empty($date)) {
        $update_fields[] = "date='$date'";
    }

    if (!empty($amount)) {
        $update_fields[] = "amount='$amount'";
    }

    if (!empty($category)) {
        $update_fields[] = "category='$category'";
    }

    if (!empty($description)) {
        $update_fields[] = "description='$description'";
    }

    // Check if there are any fields to update
    if (!empty($update_fields)) {
        // Join the update_fields array into a single string separated by commas
        $update_query = implode(", ", $update_fields);

        // Add the update_query to the main query
        $query .= $update_query;

        // Add the WHERE clause
        $query .= " WHERE transaction_id='$id'";

        // Execute the update query
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            echo '<script> alert("Data Updated"); </script>';
            // Redirect to the mainpage or any other page after successful update
            $base_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);
            echo '<script> window.location.replace("http://localhost/budgetbuddy/entry.php"); </script>';
        } else {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    } else {
        // Display a message indicating no fields were updated
        echo '<script> alert("No fields were updated. Please make changes before submitting."); </script>';
    }
}
?>


