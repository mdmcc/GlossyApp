<?php
$connect = mysqli_connect("localhost", "glossyadmin1", "glossy"); 
if(mysqli_connect_errno()){
	echo "Something went wrong connecting... ".mysqli_connect_error();
	exit();
}
?>