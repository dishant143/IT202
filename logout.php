<?php 
ob_start();
session_start();
	
	if(isset($_SESSION['id']))
	{
	    session_unset();
		session_destroy();
		
		header("Location:index.php");
		
		session_start();

		$_SESSION['logoutmsg'] = "You have successfully logout !";
	}
?>