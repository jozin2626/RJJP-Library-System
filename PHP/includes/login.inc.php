<?php

if (isset($_POST["submit"])) {

	$USERNAME = $_POST["USERNAME"];
	$PASSWORD = $_POST["PASSWORD"];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';


	if (emptyInputLogin($USERNAME, $PASSWORD) !== false) {
		header("location: ../index.php?error=emptyInput");
		exit();
	}

	loginUser($conn, $USERNAME, $PASSWORD);
}
	else {
		header("location ../main.php");
		exit();
	}

