<?php

session_start();
include("../include/config.php");
include("../include/mysql.php");

$db = new myConnection;

// Checking if the form is submitted with the 'post' button.
if (isset($_POST['post'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

     // Query to retrieve user data based on the provided email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $res = $db->query($sql);

    // Checking if the user exists in the database
    if ($res && $res->num_rows === 1) { 
        $row = $db->fetchArray($res);
        $storedHashedPassword = $row['password']; // Fetch the hashed password from the database

        // Use password_verify to check the provided password against the stored hashed password
        if (password_verify($password, $storedHashedPassword)) {
            // Password is correct, log the user in
            $_SESSION['email'] = $email;
            $_SESSION['is_login'] = 1;
            $_SESSION['is_verified'] = 1;
            $_SESSION['user_name'] = $row['name']; // Store the user's name in the session

            $db->pageredirect("../dashboard.php");
            die();
        }
    }

    // If the user does not exist or the password is incorrect, redirect back to the sign-in page
    $db->pageredirect("../signin.php");

}