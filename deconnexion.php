<?php
		session_start();
		session_destroy(); 
		header("Location: logger.php");
		exit();
?>
