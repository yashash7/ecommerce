<?php
    session_start();
    require("database.php");
    if (isset($_POST['action']) && $_POST['action']=='Add') {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $imgurl = $_POST['imgurl'];
        $category = $_POST['category'];
        $query = "insert into products values(NULL, '".$name."', ".$price.", '".$imgurl."', '".$category."');";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $_SESSION['admres'] = 'Successfully Added.';
        header('location: admin.php');
    } else if ($_POST['action']=='Update') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $imgurl = $_POST['imgurl'];
        $category = $_POST['category'];
        $query = "update products set name='".$name."', price=".$price.", imgurl='".$imgurl."', category='".$category."' where id=".$id.";";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $_SESSION['admres'] = 'Successfully Updated \''.$_POST['name'].'\'.';
        header('location: admin.php');
    } else if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "delete from products where id=".$id.";";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $_SESSION['admres'] = 'Successfully Deleted.';
        header('location: admin.php');
    } else {
        header('location: admin.php');
    }
?>