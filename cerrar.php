<?php
	session_start();
	session_destroy();
	header("Location: http://localhost/pecafood/index.php");
?>

