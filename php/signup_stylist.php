<?php
include("connection.php");

$user_info = "INSERT INTO hairStylist (hairStylist_email, hairStylist_password, hairStylist_confirmpass, hairStylist_firstName, hairStylist_lastName) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$_POST['confirmPassword']."', '".$_POST['firstname']."', '".$_POST['lastname']."')";  
echo "query made";
$result = mysqli_query($connect, $user_info);
if($result)
{echo "Your information was added to the database.";}
else {
	echo mysqli_error();
}
?> 