<?php
$conn = mysqli_connect("localhost", "root", "MySQL", "ecommerce")or die($mysqli_error($conn));
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>