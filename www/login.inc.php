<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	// Error handlers
	// Checar se existem campos vazios
	if (empty($email) || empty($pwd)) {
		header("Location: index.php?login=empty");
		exit();
	}
	
	else {
		$sql = "SELECT * FROM users WHERE email = '$email' OR uid = '$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1) {
			header("Location: index.php?login=user-not-found");
			exit();
		}
		
		else {
			
			if ($row = mysqli_fetch_assoc($result)) {
				//desencriptando a senha
				$hashedPasswordCheck = password_verify($pwd, $row['pwd']);
				if ($hashedPasswordCheck == false) {
					header("Location: index.php?login=error");
					exit();
				}
				
				elseif ($hashedPasswordCheck == true) {
					// logando o usuário
					$_SESSION['u_id'] = $row['id'];
					$_SESSION['u_firstN'] = $row['fName'];
					$_SESSION['u_lastN'] = $row['lName'];
					$_SESSION['u_email'] = $row['email'];
					$_SESSION['u_uid'] = $row['uid'];
					header("Location: index.php");
					exit();
				}
			}
		}
	}
	
}

else {
	header("Location: index.php");
	exit();
}