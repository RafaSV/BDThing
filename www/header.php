<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expenses</title>

    <!-- Setting MDL on -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css"/>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

	<style>
	
		div.mdl-layout__header-row {
			background-color: #004c40;
		}

	</style>

</head>
<body>
    
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header navbar">
                <header class="mdl-layout__header">
                  <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Expenses</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->

					<?php

						if(isset($_SESSION['u_id'])) {
							echo '<form role="form" action="logout.inc.php" method="POST">
							<nav class="mdl-navigation mdl-layout--large-screen-only">
							<a class="mdl-navigation__link" href="expenses.php">Bills</a>
							<a class="mdl-navigation__link" href="search.php">Search</a>
							<a class="mdl-navigation__link" href="user-profile.php">My Profile</a>
							<a class="mdl-navigation__link" href="">
							<button type="submit" name="logout" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
							Logout
							</button>
							</a>
					  		</nav>
					  		</form>';
						}

						else {
							echo '<nav class="mdl-navigation mdl-layout--large-screen-only">
							<a class="mdl-navigation__link" href="login.php">Login</a>
							<a class="mdl-navigation__link" href="signup.php">Subscribe</a>
					  </nav>';
						}

					?>

                  </div>
                </header>
                
                

</body>
</html>