<?php 
$server = "localhost";
$user = "root";
$pass = "";
$db = "hotel";

$conn = new mysqli($server, $user, $pass, $db);

if($conn->connect_error){
    die("database connect agala" .$conn->connect_error);
}
?>