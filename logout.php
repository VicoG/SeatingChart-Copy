<?php include "includes/header.php"; ?>
<?php require_once "includes/session.php"; ?>
<?php require_once "includes/functions.php"; ?>
<?php confirm_logged_in(); ?>

<?php
	// v1: simple logout
	// session_start();
	$_SESSION["admin_id"] = NULL;
	$_SESSION["username"] = NULL;
	$_SESSION["b"]= NULL;
	session_unset(); 
	session_destroy();
	 
	header ("Location: login.php");
?>

<?php include "includes/footer.php";?>