<?php
	session_start();
	$_SESSION['username']="";
	$_SESSION['admin_type']="";
	session_unset();
	session_destroy();
	header('Location: index.php');
?>