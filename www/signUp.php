<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

     <!-- Setting MDL on -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
     <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css"/>
     <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <style>
        
        .demo-card-square.mdl-card {
            width: 340px;
            height: 520px;
        }
        .demo-card-square > .mdl-card__title {
            color: #fff;
            background: url('../assets/demos/dog.png') bottom right 15% no-repeat #00796b;
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

    </style>

</head>
<body>
    
    <div class="demo-card-square mdl-card mdl-shadow--2dp formBox">
        <div class="mdl-card__title mdl-card--expand">
            <h2 class="mdl-card__title-text">Subscribe</h2>
        </div>
        <div class="mdl-card__supporting-text">
            
        <form action="#" class="form">

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">First Name</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Last Name</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Username</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Email</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="password" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Password</label>
            </div>

        </form>

        </div>

        <div class="mdl-card__actions">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                Sign Up
            </a>
        </div>

    </div>

</body>
</html>