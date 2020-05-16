<?php
$servername = "localhost";
$username = "root";
$password = "";
$db='dating_table';

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
if($conn->connect_errno){
    echo"Connectivity error",$conn->connect_errno,$conn->connect_error;
}
?>