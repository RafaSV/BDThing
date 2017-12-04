<?php
    include_once 'header.php';
    include_once 'dbh.inc.php';
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
        
        .grid {
            position: relative;
            top: -15px;
        }

        .centerCell {
            background-color: #e0e0e0;
        }

        .demo-card-square.mdl-card {
            width: 700px;
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
            position: fixed;
            float: right;
            top: 80%;
            left: 90%;
        }

        .priceTag {
            float: right;
            margin-top: -20px;
            margin-bottom: -25px;
        }

        .sum {
             height: 75px;
             width: 100%;
             background-color: #00e676;
        }

        .total {
            position: relative;
            float: right;
            margin: 15px;
            display: inline-block;
        }

        h2 {
            display: inline-block;
            margin: 10px;
        }

    </style>

</head>
<body>

    <main class="mdl-layout__content">
        <div class="page-content">

            <div class="mdl-grid grid">
                <div class="mdl-cell mdl-cell--2-col"></div>
                <div class="mdl-cell mdl-cell--8-col centerCell">
                <div class='sum'>
                        <h2>Total:<h2>
                        <?php
                            $sum = 0;
                            $query = "SELECT price FROM bills";
                            $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                                    $sum += $row["price"];
                                }
                            }
                            echo "<h2 class='total'>$$sum</h2>";
                        ?>
                </div>
                
                <?php
                    
                    $query = "SELECT * FROM bills ";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {

                            echo "
                                <div class='demo-card-square mdl-card mdl-shadow--2dp'>
                                    <div class='mdl-card__title mdl-card--expand'>
                                        <h2 class='mdl-card__title-text'> ".$row["tag"]." </h2>
                                    </div>
                                    <div id='downArrow' class='mdl-card__supporting-text'> <p>".$row["description"]."</p>
                                    </div>
                                    <div class='mdl-card__actions mdl-card--border'>
                                        <button onclick='expandCard' class='mdl-button mdl-js-button mdl-button--icon'>
                                            <i class='material-icons'>more_horizontal</i>
                                        </button>
                                        <div class='priceTag'><h3> $".$row["price"]." </h3></div>
                                    </div>
                                </div>
                            ";
                        }
                    }

                    else {
                        echo"Congrats! You have no debts!";
                    }
                                            
                    $conn->close();
                ?>

                </div>
                <div class="mdl-cell mdl-cell--2-col">

                    <a href="add-bill.php">
                        <button class="add mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                            <i class="material-icons">add</i>
                        </button>
                    </a>

                </div>
            </div>

        </div>
    </main>
    
</body>
</html>