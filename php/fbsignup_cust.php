<?php
echo "hey";
$connect = mysqli_connect("localhost", "glossyadmin1", "glossy");  
// mysql_select_db("glossy_test", $connect);

 $user_info = "INSERT INTO customer (customer_firstName, customer_lastName, customer_email, customer_password, customer_confirmpass) VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['confirmPassword']."')";  
echo "helloo";

if (!mysqli_query($user_info)) { die('Error: ' . mysqli_error()); };

echo "Your information was added to the database.";
mysqli_close($connect); 
echo "<script> window.location.href = '../customer_appointment.html'</script>"
?>                                                         