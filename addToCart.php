<?php
session_start();
    require("database.php");
    if (isset($_POST['action']) && $_POST['action']=='add') {
        echo '<h1>'.$_POST['action'].'</h1>';
        $name = $_POST['name'];
        $price = $_POST['price'];
        $imgurl = $_POST['imgurl'];
        $prdt_id = $_POST['id'];
        $query = "insert into cart values('".$_SESSION["username"]."', ".$prdt_id.", '".$name."', ".$price.", '".$imgurl."');";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        header('location: cart.php');
    }
    else if($_POST["action"]=="Remove"){
        $prdt_id = $_POST['prdt_id'];
        $username=$_SESSION['username'];
        $query = "delete from cart where username='".$username."' and prdt_id=".$prdt_id.";";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        header('location: cart.php');

    }
    ?>