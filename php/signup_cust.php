<?php
include("connection.php");
include("sessions.php");

$user_info = "INSERT INTO customer (customer_email, customer_password, customer_firstName, customer_lastName, fb_id) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['fb_id']."')";  

$results = mysqli_query($connect, $user_info);

$_SESSION['login'] = true;
$_SESSION['email'] = $_POST['email'];
$_SESSION['id'] = mysqli_insert_id($connect);

header("Location:/GlossyApp/customer_signup_login.html?error");
?>  