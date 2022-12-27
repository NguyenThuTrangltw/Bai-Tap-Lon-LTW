<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname = "silver";
//
$conn = new mysqli($servername,$username, $password,$dbname);
mysqli_query($conn,'set names utf8');

// 
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
// echo "Thanh cong";
?>