<?php
include("connection.php");
include("sessions.php");


$username = $_POST['email'];
$password = $_POST['password'];


$user_info = 'SELECT customer_email, customer_password FROM customer 
 WHERE customer_password = "'.$password.'" AND customer_email = "'.$username.'"';

$result = mysqli_query($connect, $user_info);

$id = 'SELECT id FROM customer WHERE customer_password = "'.$password.'" AND customer_email = "'.$username.'"';

$firstname = 'SELECT customer_firstName FROM customer WHERE customer_password = "'.$password.'" AND customer_email = "'.$username.'"';

$lastname = 'SELECT customer_lastName FROM customer WHERE customer_password = "'.$password.'" AND customer_email = "'.$username.'"';

if($result){
	if (mysqli_num_rows($result) > 0) {
	$_SESSION['login'] = true;
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['firstname'] = $firstname;
	$_SESSION['lastname'] = $lastname;
	$_SESSION['id'] = $id;
	echo json_encode("success");
	} else {
		echo json_encode("Your username or password does not match our records. Please try again");	
	}
	
	
} else {
	$_SESSION['error'] = "Your username or password does not match";
	echo json_encode("error");	
	
	
}
