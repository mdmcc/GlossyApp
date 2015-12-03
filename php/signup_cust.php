<?php
include("connection.php");
include("sessions.php");

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != 'true') {
// 		header("Location: index.html");
// };

$user_info = "INSERT INTO customer (customer_email, customer_password, customer_firstName, customer_lastName) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$_POST['firstname']."', '".$_POST['lastname']."')";  

$results = mysqli_query($connect, $user_info);

$_SESSION['login'] = true;
$_SESSION['email'] = $_POST['email'];
$_SESSION['id'] = mysqli_insert_id($connect);

header("Location:/GlossyApp/customer_appointment.html");
?>  