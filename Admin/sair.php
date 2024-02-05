<?php
	if (!isset($_SESSION)) session_start();

	unset($_SESSION['utilizador']);
		
	session_destroy();
	
	header("Location: index.php");
	exit;
	
?>