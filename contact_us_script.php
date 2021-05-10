<?php

require("includes/common.php");

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($conn, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($conn, $email);

   $message = trim($_POST['message']);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  
  $query = "INSERT INTO contact(name, email, message)VALUES('" . $name . "','" . $email . "','" . $message . "')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  header('location: contact_us.php');
?>