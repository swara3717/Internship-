<?php

 session_start(); 

 $con = mysqli_connect('localhost', 'root');

 if($con){
   echo "Connection Successful";
 }
 else{
   echo "No connection";
 }

 mysqli_select_db($con, 'website');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$destination = $_POST['destination'];
$duration = $_POST['duration'];
$people = $_POST['people'];
$message = $_POST['message'];

$query = " insert into trip (name, email, phone, destination, duration, people, message)
values ('$name', '$email', '$phone', '$destination', '$duration', '$people', '$message') ";


mysqli_query($con, $query);

$_SESSION['status'] = 'Details Entered Successfully We Will Shortly Reach You!';
header('location:index.php');

?>
