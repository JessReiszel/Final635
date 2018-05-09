<?php
if(isset($_POST['submitout'])) {
	session_start();
	session_unset();
	session_destroy();
	header("Location: index.php");
	exit();
}
?>
