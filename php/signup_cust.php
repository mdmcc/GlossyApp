<?php
include("connection.php");

$user_info = "INSERT INTO customer (customer_email, customer_password, customer_firstName, customer_lastName) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$_POST['firstname']."', '".$_POST['lastname']."')";  

//mysqli_select_db("glossy", $connect);

$result = mysqli_query($connect, $user_info);


header("Location:/customer_appointment.html");
?>  