<?php
include("connection.php");

$user_info = "INSERT INTO hairStylist (hairStylist_email, hairStylist_password, hairStylist_firstName, hairStylist_lastName) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$_POST['firstname']."', '".$_POST['lastname']."')";  

$result = mysqli_query($connect, $user_info);
if($results)
//{echo "Your information was added to the database.";}
header("Location:/GlossyApp/stylist_calendar.html");

?> 