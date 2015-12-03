<?php
include("connection.php");
include("sessions.php");

$username = $_POST['email'];
$password = $_POST['password'];

$user_info = 'SELECT hairStylist_email, hairStylist_password FROM hairStylist 
 WHERE hairStylist_password = "'.$password.'" AND hairStylist_email = "'.$username.'"';

$result = mysqli_query($connect, $user_info);

$id = 'SELECT id FROM hairStylist WHERE hairStylist_password = "'.$password.'" AND hairStylist_email = "'.$username.'"';

$firstname = 'SELECT hairStylist_firstName FROM hairStylist WHERE hairStylist_password = "'.$password.'" AND hairStylist_email = "'.$username.'"';

$lastname = 'SELECT hairStylist_lastName FROM hairStylist WHERE hairStylist_password = "'.$password.'" AND hairStylist_email = "'.$username.'"';

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

?>