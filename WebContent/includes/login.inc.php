<?php

session_start();

if (isset($_POST['submitlogin'])) {

	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);

//ERROR handlers
	//check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE username = '$uid' OR email = '$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../account.php?login=usernameerror");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//Dehashing the password
				$hashedPwdCheck = password_verify($pwd, $row['password']);
				if ($hashedPwdCheck == false) {
					header("Location: ../account.php?login=passworderror");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//log in the user 
					$_SESSION['u_id'] = $row['id'];
					$_SESSION['u_first'] = $row['first'];
					$_SESSION['u_last'] = $row['last'];
					$_SESSION['u_email'] = $row['email'];
					$_SESSION['u_uid'] = $row['username'];

					header("Location: ../account.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../account.php?login=starterror");
	exit();
}
