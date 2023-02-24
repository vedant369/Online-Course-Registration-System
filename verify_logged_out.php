<?php
	session_start();
	
	if(empty($_SESSION['type']));
	else if(strcmp($_SESSION['type'], "info") == 0)
		header("Location: home.php");
	else if(strcmp($_SESSION['type'], "member") == 0)
		header("Location: home.php");
?>