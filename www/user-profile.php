<?php
    include_once 'header.php';
    include 'dbh.inc.php';
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
            width: 700px;
            height: 700px;
            margin-top: 15%;
            margin-left: 10%;
        }
        .demo-card-square > .mdl-card__title {
            color: #fff;
            background:
            url('../assets/demos/dog.png') bottom right 15% no-repeat #00e676;
        }

        button.add {
            top: -6%;
            left: 12.5%;
        }

        .priceTag {
            float: right;
            margin-top: -20px;
            margin-bottom: -25px;
        }

        .uImg {
            position: relative;
            height: 175px;
            width: 175px;
            border-radius: 50%;
            background-color: red;
            top: 60%;
            left: 43.5%;
            z-index: 10;
        }

    </style>

</head>
<body>

    <main class="mdl-layout__content">
        <div class="page-content">

            <div class="fBlock">

                <div class="uImg">

                </div>

            </div>

            <div class="mdl-grid grid">

                <div class="mdl-cell mdl-cell--2-col"></div>
                <div class="mdl-cell mdl-cell--8-col centerCell">

                <?php

                    $query = "SELECT * FROM users";
                    echo '
                        <div class="demo-card-square mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title mdl-card--expand">
                            <h2 class="mdl-card__title-text"></h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Aenan convallis.
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                View Updates
                                </a>
                            </div>
                        </div>
                    ';
                ?>

                </div>
                <div class="mdl-cell mdl-cell--2-col"></div>
            </div>

        </div>
    </main>
    
</body>
</html>
