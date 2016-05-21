<?php
session_start();

if($_GET['do'] == 'logout'){
	unset($_SESSION['Name']);
	session_destroy();
}

if(!$_SESSION['Name']){
	header("Location: index.php");
	exit;
}
?>