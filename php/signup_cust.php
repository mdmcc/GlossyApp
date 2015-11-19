<?php
include("connection.php");

mysql_select_db("glossy", $connect);

 $user_info = "INSERT INTO customer (customer_firstName, customer_lastName, customer_email, customer_password, customer_confirmpass) VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['confirmPassword']."')";  
echo "query made";
$result = mysql_query($user_info);
if($result)
{echo "Your information was added to the database.";}
else {
	echo mysql_error();
}
?>                                                       
