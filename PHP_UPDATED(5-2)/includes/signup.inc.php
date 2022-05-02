<?php
	

//if (isset($_POST["submit"])) {

	
	$USERNAME = $_POST['USERNAME'];
	$PASSWORD = $_POST['PASSWORD'];
	$FIRSTNAME = $_POST['FIRSTNAME'];
	$LASTNAME = $_POST['LASTNAME'];
	$EMAIL = $_POST['EMAIL'];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	/*
	if (emptyInputSignup($USERNAME, $PASSWORD, $FIRSTNAME, $LASTNAME, $EMAIL) !== false) {
		header("location: ..signup.php?error=emptyInput");
		exit();
	}

	if (invalidUsername($USERNAME) !== false) {
		header("location: ..signup.php?error=invalidUsername");
		exit();
	}

	if (invalidEmail($EMAIL) !== false) {
		header("location: ..signup.php?error=invalidEmail");
		exit();
	}
*/
	if (usernameExists($conn, $USERNAME) !== false) {
		header("location: ../index.php?error=usernameTaken");
		exit();
	}
	


	


	
	
	$hashedPassword = password_hash($PASSWORD, PASSWORD_DEFAULT);
	
	$sql = "INSERT INTO users(USERID, USERNAME, PASSWORD, FIRSTNAME, LASTNAME, EMAIL)
		VALUES ('$USERID', '$USERNAME', '$hashedPassword', '$FIRSTNAME', '$LASTNAME', '$EMAIL');";
	mysqli_query($conn, $sql);

	header("Location: ../index.php?signup=success:");