<?php
include("connection.php");
include("sessions.php");

if(mysqli_connect_errno()){
        echo "Something went wrong connecting... " . mysqli_connect_error();
    // exit();
  }

$username = "guest";
$password = "password";

if($username == $_POST['email'] && $password == $_POST['password']){
	$_SESSION['login'] = true;
	$_SESSION['email'] = $_POST['email'];

	$userSQL = "SELECT * FROM customer WHERE email = '$_SESSION['email']";

	$results = mysqli_query($connect, $userSQL);

	if($result){
		$row = mysqli_fetch_array($result)
	    $_SESSION['id'] = $row['id'];		
	}	
	
} else {
	$_SESSION['login'] = false;
	echo "You don't belong here...";	
}

    if($results){
        echo json_encode("success");
    };
?>