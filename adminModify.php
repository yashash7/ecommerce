<?php
session_start();
require("database.php");
if (!isset($_SESSION['username']) || $_SESSION['role']!='admin') {header('location: logout.php');}
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Products</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style>
    .center {
      text-align: center;
      border: 3px solid green;
    }

    .center1 {
        display: block;
        margin-left: auto;
        margin-right: 50%;
        width: 100%;
    }
    .products {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 7px;
    }

    .product {
        border: 1px solid #ddd;
        border-radius: 8px;
        margin: 10px;
        padding: 16px;
        width: 400px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .product-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .product-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .product-price {
        color: #ff6600;
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    a{
        text-decoration:none;
    }
    .add-to-cart-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 8px 16px;
        text-align: center;
        border-radius: 4px;
        cursor: pointer;
    }

    .add-to-cart-btn:hover {
        background-color: #0056b3;
    }
    input[type="text"] {
        overflow: auto;
        width: 100%;
    }
        
    </style>
</head>
<body>
    <h1 class="center">SHOP NOW</h1>
    <?php
        if (isset($_POST)) {
            if ($_POST['action']=='Add') {
                echo '<h2 align="center"> Add New Product </h2>';
                echo '<div class="products">';
                echo '<div class="product">';
                echo '<form method="POST" action="adminExecute.php">';
                echo '<h5>Name of the Item</h5><input type="text" name="name" /><br><br>';
                echo '<h5>Price of the Item $</h5><input type="text" name="price" /><br><br>';
                echo '<h5>Image URL of the Item </h5><input type="text" id="price" name="imgurl" /><br><br>';
                echo '<h5>Category of the Item </h5><input type="text" name="category" /><br><br>';
                echo '<input class="add-to-cart-btn" type="submit" name="action" value="Add" />&nbsp;';
                echo '</form>';
                echo '</div>';
                echo '</div>';
            } else if (isset($_POST['id'])) {
                $id = $_POST['id'];
                $query = "select * from products where id=".$id.";";
                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                $row = mysqli_fetch_assoc($result);
                if ($_POST['action']=='Edit') {
                    echo '<h2 align="center">Editing '.$row['name'].'</h2>'; // (id='.$row['id'].')
                    echo '<div class="products">';
                    echo '<div class="product">';
                    echo '<img src="' . $row["imgurl"] . '" class="product-image">';
                    echo '<form method="POST" action="adminExecute.php">';
                    echo '<input type="text" name="id" hidden value="'.$id.'" />';
                    echo '<h5>Image</h5><input type="text" name="imgurl" value="'.$row['imgurl'].'" /><br><br>';
                    echo '<h5>Name</h5><input type="text" name="name" value="'.$row['name'].'" /><br><br>';
                    echo '<h5>Price $</h5><input type="text" id="price" name="price" value="'.$row['price'].'" /><br><br>';
                    echo '<h5>Category of the Item </h5><input type="text" name="category" value="'.$row['category'].'"/><br><br>';

                    echo '<input class="add-to-cart-btn" type="submit" name="action" value="Update" />&nbsp;';
                    echo '</form>';
                    echo '</div>';
                    echo '</div>';
                } else if ($_POST['action']=='Delete') {
                    header('location: adminExecute.php?id='.$id);
                }
            } else {
                header('location: admin.php');
            }
        } else {
            header('location: admin.php');
        }
    ?>
</body>
</html>