<?php
session_start();
//session_destroy();

/*
WHOLE BUNCH OF CODES
WHOLE BUNCH OF CODES
WHOLE BUNCH OF CODES

WHOLE BUNCH OF CODESWHOLE BUNCH OF CODES





*/
if(isset($_SESSION['pagenum'])){
	$_SESSION['pagenum']++;	
} else {
	$_SESSION['pagenum'] = 0;
}


if(isset($_SESSION['login'])){
	if($_SESSION['login'] == false){
		header('Location: loginview.php');
	}
} else {
	header('Location: loginview.php');
}
?>