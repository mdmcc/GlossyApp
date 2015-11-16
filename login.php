<?php
include("sessions.php");
//var_dump($_POST);
$username = "Henry";
$password = "password";

if($username == $_POST['username'] && $password == $_POST['password']){
	$_SESSION['login'] = true;
	$_SESSION['username'] = $_POST['username'];
	header('Location: index.php');
} else {
	$_SESSION['login'] = false;
	echo "You don't belong here...";	
}
?>