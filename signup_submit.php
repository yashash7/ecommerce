<?php

require("database.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['username'];
  $name = mysqli_real_escape_string($conn, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($conn, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($conn, $password);
  //$password = MD5($password);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($conn, $address);
/*
  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

//Checking whether email id already used for registration
  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
  $num = mysqli_num_rows($result);
  */
 /* if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {*/
    
    $query = "INSERT INTO users(username, email, password,address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $address . "')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    $user_id = mysqli_insert_id($conn);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: login.php');
  //}
?>