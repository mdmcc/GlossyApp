<?php

include("connection.php");

echo "hey";
$connect = mysqli_connect("localhost", "root", "root", "glossy");  

$user_info = "INSERT INTO customer (customer_email, customer_password, customer_confirmpass, customer_firstName, customer_lastName) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$_POST['confirmPassword']."', '".$_POST['firstname']."', '".$_POST['lastname']."')";  
echo "helloo";

if (!mysqli_query($user_info)) { die('Error: ' . mysqli_error()); };

echo "Your information was added to the database.";
mysqli_close($connect); 
echo "<script> window.location.href = '../customer_appointment.html'</script>"
?>                                                         