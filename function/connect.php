<?php
$servername = "localhost";
$username = "sa";
$password = "sa";
$dbname="skr";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $online_status='N';
    return;
}  else {
    $online_status='Y';
    //echo "Connected successfully";
} 

?>