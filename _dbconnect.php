<?php
//Script to connect datbase
$servername = "localhost";
$username = "root";
$password = "";
$database = "hfd";
$conn = mysqli_connect($servername,$username,$password,$database);

if ($conn->connect_errno){
    echo "Failed to connect to database";
}

?>