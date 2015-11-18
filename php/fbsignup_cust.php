<?php
echo "hey";
$connect = mysql_connect("localhost", "glossyadmin1", "glossy");  mysql_select_db("glossy_test", $connect);

 $user_info = "INSERT INTO customer (customer_firstName, customer_lastName, customer_email, customer_password, customer_confirmpass) VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['confirmPassword']."')";  
echo "helloo";

if (!mysql_query($user_info)) { die('Error: ' . mysql_error()); };

echo "Your information was added to the database.";
mysql_close($connect); 
?>                                                         