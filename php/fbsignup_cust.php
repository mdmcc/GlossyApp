<?php

include("connection.php");


$user_info = "INSERT INTO customer (customer_email, customer_password, customer_confirmpass, customer_firstName, customer_lastName) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$_POST['confirmPassword']."', '".$_POST['firstname']."', '".$_POST['lastname']."')";  

if (!mysqli_query($user_info)) { die('Error: ' . mysqli_error()); };

echo "Your information was added to the database.";
mysqli_close($connect); 
echo "<script> window.location.href = '../customer_appointment.html'</script>"
?>                                                         