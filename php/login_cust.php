<?php
include("connection.php");
include("sessions.php");


$username = $_POST['email'];
$password = $_POST['password'];


$user_info = 'SELECT customer_email, customer_password FROM customer 
 WHERE customer_password = "'.$password.'" AND customer_email = "'.$username.'"';

$result = mysqli_query($connect, $user_info);



if($result){
	if (mysqli_num_rows($result) > 0) {
	$_SESSION['login'] = true;
	$_SESSION['email'] = $_POST['email'];
	echo json_encode("success");
	} else {
		echo json_encode("Your username or password is wrong");	
	}
	
	
} else {
	$_SESSION['error'] = "Your username or password does not match";
	echo json_encode("error");	
	
	
}
