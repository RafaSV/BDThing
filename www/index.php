<?php
	include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Setting MDL on -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css"/>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

        <script>
        
            function expandCard() {

            }

        </script>

    <style>
    
        .fBlock {
            position: absolute;
            background-color: #00796b;
            height: 40%;
            width: 100%;
        }

        .grid {
            position: relative;
            top: 229px;
        }

        .centerCell {
            background-color: #e0e0e0;
        }

        .demo-card-square.mdl-card {
            width: 500px;
            height: 100px;
            margin-top: 5%;
            margin-left: 10%;
        }
        .demo-card-square > .mdl-card__title {
            color: #fff;
            background:
            url('../assets/demos/dog.png') bottom right 15% no-repeat #00e676;
        }

        .demo-card-square {
            document.getElementById("downArrow");
        }

        button.add {
            top: -12%;
            left: 12.5%;
        }

    </style>

</head>
<body>

    <main class="mdl-layout__content">
        <div class="page-content">

            <div class="fBlock"></div>

            <div class="mdl-grid grid">
                <div class="mdl-cell mdl-cell--3-col">3
                
                    <a href="add-bill.php">
                        <button class="add mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                            <i class="material-icons">add</i>
                        </button>
                    </a>
                
                </div>
                <div class="mdl-cell mdl-cell--6-col centerCell">

                <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <h2 class="mdl-card__title-text">Bill 1</h2>
                    </div>
                    <div id="downArrow" class="mdl-card__supporting-text">
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <button onclick="expandCard" class="mdl-button mdl-js-button mdl-button--icon">
                            <i class="material-icons">keyboard_arrow_down</i>
                        </button>
                    </div>
                </div>

                </div>
                <div class="mdl-cell mdl-cell--3-col">3</div>
            </div>

        </div>
    </main>
    
</body>
</html>