<?php

if (isset($_POST['submit'])) {
    
    include_once 'dbh.inc.php';

    $fName = mysqli_real_escape_string($conn, $_POST['fName']);
    $lName = mysqli_real_escape_string($conn, $_POST['lName']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    echo $uid;

    //Error handlers
	//verificar se existem campos inválidos
	if(empty($fName) || empty($lName) || empty($uid) || empty($email) || empty($pwd)) {
		header("Location: index.php?signup=empty");
		exit();
	}
	else {
		//Checar se dados são válidos
		if(!preg_match("/^[a-zA-Z]*$/", $fName) || !preg_match("/^[a-zA-Z]*$/", $lameN)) {
			header("Location: index.php?signup=invalid");
			exit();
		}
		else {
			//Checar email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: index.php?signup=email");
				exit();
			}
			else {
				$sql = "SELECT * FROM users WHERE uid = '$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				if($resultCheck > 0) {
					header("Location: index.php?signup=usertaken");
					exit();
				}
				else {
					//Criptografar a senha
					$hashedPassword = password_hash($pwd, PASSWORD_BCRYPT);
					// Inserir usuário no BD
					$sql = "INSERT INTO users (fName, lName, uid, email, pwd) VALUES ('$fName', '$lName', '$uid', '$email', '$hashedPassword');";
					echo "consegui porra!";
					mysqli_query($conn, $sql);
					header("Location: index.php?signup=success");
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

?>