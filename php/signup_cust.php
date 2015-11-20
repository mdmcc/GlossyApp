<?php
include("connection.php");

// mysql_select_db("glossy", $connect);
$connect = mysqli_connect("localhost", "glossyadmin1", "glossy"); 

 $user_info = "INSERT INTO customer (customer_firstName, customer_lastName, customer_email, customer_password, customer_confirmpass) VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['confirmPassword']."')";  
echo "query made";
$result = mysqli_query($connect, $user_info);
if($result)
{echo "Your information was added to the database.";}
else {
	echo mysqli_error();
}
?>                                                       
