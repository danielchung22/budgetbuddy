<?php

// session_start();

class myConnection
{
    private $mysqli;
    
    // __construct run after call myConnection
    function __construct(){

        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "budgetbuddy";

        $conn = $this->mysqli = new mysqli($host,$user,$pass,$db);

        if ($conn->connect_errno) {
			printf("Connect failed: %s\n", $conn->connect_error);
			exit();
		}
    }  

    function query($query){
		return $this->mysqli->query($query);
	}

    function pageredirect($url){
		echo "<script type='text/javascript'>location.href='$url'</script>";
	}

    function signout(){
        session_destroy();
        return $this->pageredirect("index.php");
    }

    function fetchArray($result) {
        return $result->fetch_assoc();
    }
   
}

?>