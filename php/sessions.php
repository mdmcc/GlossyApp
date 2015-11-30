<?php

if (session_status() == PHP_SESSION_NONE) {
        session_start();
}

// if(isset($_SESSION['login'])){
// 	if($_SESSION['login'] == false){
// 		header('Location: loginview.php');
// 	}
// } else {
// 	header('Location: loginview.php');
// }
?>