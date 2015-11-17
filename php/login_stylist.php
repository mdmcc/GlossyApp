<?php
$connect = mysql_connect(“localhost”, “kmcin”, “GlossyApp2”); 
if (!connect) { die('Connection Failed: ' . mysql_error()); { mysql_select_db(“glossy”, $connect);
include("sessions.php");

$username = "guest";
$password = "password";

if($username == $_POST['email'] && $password == $_POST['password']){
	$_SESSION['login'] = true;
	$_SESSION['email'] = $_POST['email'];
	
} else {
	$_SESSION['login'] = false;
	echo "You don't belong here...";	
}
?>