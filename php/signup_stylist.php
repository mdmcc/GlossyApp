<?php
include("connection.php");
include("sessions.php");

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != 'true') {
// 		header("Location: index.html");
// };

$user_info = "INSERT INTO hairStylist (hairStylist_email, hairStylist_password, hairStylist_firstName, hairStylist_lastName) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$_POST['firstname']."', '".$_POST['lastname']."')";  

$results = mysqli_query($connect, $user_info);
// if($results)
$_SESSION['login'] = true;
$_SESSION['email'] = $_POST['email'];
$_SESSION['id'] = mysqli_insert_id($connect);
//{echo "Your information was added to the database.";}
header("Location:/GlossyApp/stylist_calendar.html");

?> 