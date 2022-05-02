<?php

function emptyInputSignup($USERID, $USERNAME, $PASSWORD, $FIRSTNAME, $LASTNAME, $EMAIL) {
	$result;
	if (empty($USERID) || empty($USERNAME) || empty($PASSWORD) || empty($FIRSTNAME) || empty($LASTNAME) || empty($EMAIL)) {
		$result = true;
	}
	else {
		$return = false;
	}
	return $result;
}

function invalidUsername($USERNAME) {
	$result;
	if (preg_match("/^")) {
		$result = true;
	}
	else {
		$return = false;
	}
	return $result;
}




function usernameExists($conn, $USERNAME) {
	$sql = "SELECT * FROM users WHERE USERNAME = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location ../signup.php?error=stmtFailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $USERNAME);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}





function createUser($conn, $USERID, $USERNAME, $PASSWORD, $FIRSTNAME, $LASTNAME, $EMAIL) {
	$sql = "INSERT INTO users (USERID, USERNAME, PASSWORD, FIRSTNAME, LASTNAME, EMAIL) 
		VALUES(?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location ../signup.php?error=stmtFailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ssssss", $USERID, $USERNAME, $PASSWORD, $FIRSTNAME, $LASTNAME, $EMAIL);
	msqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location ../signup.php?error=none");
	exit();
}






function emptyInputLogin($USERNAME, $PASSWORD) {
	$result;
	if (empty($USERNAME) || empty($PASSWORD)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}







function loginUser($conn, $username, $pwd) {
	

}

