<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'budgetbuddy');

$conn2 = mysqli_connect('localhost','root','','budgetbuddy') or die('connection failed');

?>