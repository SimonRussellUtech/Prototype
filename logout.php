<?php
session_start();
var_dump($_SESSION);
if (isset($_POST['logout']))
{

 	session_destroy();
	$_SESSION = array();

	header("location: login.php");

}

?>
