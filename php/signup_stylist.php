<?php
include("connection.php");
include("sessions.php");

$user_info = "INSERT INTO hairStylist (hairStylist_email, hairStylist_password, hairStylist_firstName, hairStylist_lastName, fb_id) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['lastname']."')";  

$results = mysqli_query($connect, $user_info);
// if($results)
$_SESSION['login'] = true;
$_SESSION['email'] = $_POST['email'];
$_SESSION['id'] = mysqli_insert_id($connect);
//{echo "Your information was added to the database.";}
header("Location:/GlossyApp/customer_signup_login.html?error");

?> 