<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> &middot Sign Up &middot </title>

     <!-- Setting MDL on -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css"/>
     <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <style>
        
        .demo-card-square.mdl-card {
            width: 340px;
            height: 520px;
        }
        .demo-card-square > .mdl-card__title {
            color: #fff;
            background: bottom right 15% no-repeat #00796b;
        }

        .form {
            padding: 5%;
        }

        .formBox {
            margin-top: 5%;
            margin-left: 37.5%;
        }

        body {
            background-color: #48a999;
        }

        .button {
            left: 0%;
            padding-left: 37.5%;
            padding-right: 37.5%;
        }

    </style>

</head>
<body>
    
    <div class="demo-card-square mdl-card mdl-shadow--2dp formBox">
        <div class="mdl-card__title mdl-card--expand">
            <h2 class="mdl-card__title-text">Subscribe</h2>
        </div>
        <div class="mdl-card__supporting-text">
            
        <form role="form" action="signup.inc.php" method="POST" class="form">

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" name="fName" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">First Name</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" name="lName" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Last Name</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" name="uid" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Username</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" name="email" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Email</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" name="pwd" type="password" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Password</label>
            </div>

            <div class="mdl-card__actions">
                <button type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--primary button">
                    Button
                </button>
            </div>

        </form>

        </div>

        

    </div>

</body>
</html>