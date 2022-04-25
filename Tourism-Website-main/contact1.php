<?php

session_start(); 

$con = mysqli_connect('localhost', 'root');

if ($con) {
  echo "Connection Successful";
} else {
  echo "No connection";
}

mysqli_select_db($con, 'website');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = " insert into contact (name, email, message)
values ('$name', '$email', '$message') ";

mysqli_query($con, $query);

$_SESSION['status'] = 'Thank You For Contacting Us. We Will Shortly Reach You!';
header('location:index.php');

?>