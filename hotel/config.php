<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "grandhorizonhotel";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
// else{
//     echo "<script>alert('Connection successfully.')</script>";
// }
?>
