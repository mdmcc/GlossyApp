<?php
include("connection.php");
include("sessions.php");


if(mysqli_connect_errno()){
        echo "Something went wrong connecting... " . mysqli_connect_error();
    // exit();
}	

$userSQL = "SELECT * FROM hairStylist WHERE hairStylist_email = '".$_POST['email']."' AND hairStylist_password = '". $_POST['password'] ."'";

$results = mysqli_query($connect, $userSQL);

if($results){
	$row = mysqli_fetch_array($results);
	$_SESSION['login'] = true;
	$_SESSION['email'] = $_POST['email'];
    $_SESSION['id'] = $row['ID'];
    //echo json_encode("success");
    header("Location:/GlossyApp/stylist_calendar.html");	
}

// $username = "guest";
// $password = "password";

// if($username == $_POST['email'] && $password == $_POST['password']){
// 	$_SESSION['login'] = true;
// 	$_SESSION['email'] = $_POST['email'];


// 	$userSQL = "SELECT * FROM hairStylist WHERE email = {$_SESSION['email']}";

// 	$results = mysqli_query($connect, $userSQL);

// 	if($result){
// 		$row = mysqli_fetch_array($result);
// 	    $_SESSION['id'] = $row['ID'];	
// 	}	
	
// } else {
// 	$_SESSION['login'] = false;
// 	echo "Please first login.";	
// }

//     if($results){
//         echo json_encode("success");
//     };
?>