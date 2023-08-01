
<?php

include("../include/config.php");

$message = array(); // Initialize the $message array

// Checking if the form is submitted with the 'post' button.
if (isset($_POST['post'])) {
    $name = mysqli_real_escape_string($conn2, $_POST['name']);
    $email = mysqli_real_escape_string($conn2, $_POST['email']);
    $password = mysqli_real_escape_string($conn2, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn2, $_POST['cpassword']);

    // Check if the provided email is already registered
    $select_users = mysqli_query($conn2, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');

    if (mysqli_num_rows($select_users) > 0) {
        // User with this email already exists
        $message['email'] = 'This email is already in use.';
        echo '<script> alert("Email Already in Use."); </script>';
    }

    if ($password != $cpassword) {
        // Passwords don't match
        $message['password'] = 'Passwords do not match.';
        echo '<script> alert("Password do not Match"); </script>';
    }

    // No errors, proceed with registration
    if (empty($message)) {
        // Hash the password securely before storing it in the database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password securely
        mysqli_query($conn2, "INSERT INTO `users` (name, email, password) VALUES ('$name', '$email', '$hashedPassword')") or die('query failed');
        echo '<script> alert("Congratulations Hooray"); </script>';
        header('location:../signin.php');
    }
    echo '<script> window.location.replace("http://localhost/budgetbuddy/signup.php"); </script>';
}
?>
