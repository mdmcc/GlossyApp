<?php

if (session_status() == PHP_SESSION_NONE) {
   session_start();
}

if(isset($_POST['check'])){
	if(!isset($_SESSION['login']) || $_SESSION['login'] != 'true') {
		echo json_encode(0);
	} else {
		echo json_encode($_SESSION);
	}
}

?>