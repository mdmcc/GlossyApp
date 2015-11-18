<?php
include 'connection.php';

mysql_select_db("glossy", $connect);

 $user_info = "INSERT INTO customer (hairStylist_firstName, hairStylist_lastName, hairStylist_email, hairStylist_password, hairStylist_confirmpass) VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['confirmPassword']."')";  
echo "query made";
$result = mysql_query($user_info);
if($result)
{echo "Your information was added to the database.";}
else {
	echo mysql_error();
}
?> 