<?php
include_once("conn.php");

	//session_start();
	unset($_SESSION['r_email']);
	unset($_SESSION['r_name']);
	unset($_SESSION['r_id']);
	session_destroy();
	header("location:login.php");
?>