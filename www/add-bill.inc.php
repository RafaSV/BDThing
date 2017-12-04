<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$tag = mysqli_real_escape_string($conn, $_POST['tag']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
	
	// Error handlers
	// Checar se existem campos vazios
	if (empty($tag) || empty($description) || empty($price)) {
		header("Location: index.php?form=empty");
		exit();
	}
	
	else {
        $sql = "INSERT INTO bills (tag, description, price) VALUES ('$tag', '$description', '$price');";
        mysqli_query($conn, $sql);
        header("Location: expenses.php?submit-bill=success");
        exit();
	}
	
}

else {
	header("Location: index.php");
	exit();
}