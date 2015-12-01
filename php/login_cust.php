<?php
include("connection.php");
include("sessions.php");

if(mysqli_connect_errno()){
        echo "Something went wrong connecting... " . mysqli_connect_error();
    // exit();
}

$userSQL = "SELECT * FROM customer WHERE customer_email = '".$_POST['email']."' AND customer_password = '". $_POST['password'] ."'";

$results = mysqli_query($connect, $userSQL);

if($results){
	$row = mysqli_fetch_array($results);
	$_SESSION['login'] = true;
	$_SESSION['email'] = $_POST['email'];
    $_SESSION['id'] = $row['ID'];
    //echo json_encode("success");
    header("Location:/GlossyApp/customer_appointment.html");	
}
?>