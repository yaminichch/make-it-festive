<?php
include_once("../../conn.php");

	
if(isset($_SESSION['username']))
{
	session_destroy();
	header('location:index.php');
		
}
else
{
	header('location:index.php');
	
}
?>