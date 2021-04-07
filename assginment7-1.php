<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="Assignment submission">
    <meta name="author" content="Osama Albeeshi, Emad As-sawah, Abdullah Alnaser, Khalid Alotaibi">
    <title>Assignment 7-1</title>
    <link rel="icon" href="gfx/first.png">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <style>
        *{
            text-decoration: none;
        }

        body{
            background-color: #1f1f1f;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }

        .container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        h3{
            text-align: center;

            animation-name: p1;
            animation-duration: 1.5s;
            animation-iteration-count: 1;
            animation-fill-mode: both;
            animation-iteration-count: infinite;
        }

        @keyframes p1{
            0%{
                color: gray;
            }

            50%{
                color: white;
            }

            100%{
                color: gray;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Numbers listed down below are made by php<br>No manual writing done</h3>
        <h2>
        <?php
            for ($x = 0; $x <= 6; $x++){
                if ($x != 6){
                    echo "$x - ";
                }

                else {
                    echo "$x";
                }
            }
        ?>
        </h2>
    </div>
</body>