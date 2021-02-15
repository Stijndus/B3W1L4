    <?php
    date_default_timezone_set('Europe/Amsterdam');
    $text = " ";
    $background = " ";

    $dateHourCheck = date('H');
        if ($dateHourCheck>="6" AND $dateHourCheck<"12"){
            $text = "Goede morgen! <br> Het is nu ";
            $background = "morning";
        }else if ($dateHourCheck>="12" AND $dateHourCheck<"18"){
            $text = "Goede middag! <br> Het is nu ";
            $background = "afternoon";
        }else if ($dateHourCheck>="18" AND $dateHourCheck<"23"){
            $text = "Goede Avond! <br> Het is nu ";
            echo "Het is nu ", date("H:i");
            $background = "night";
        }else if ($dateHourCheck>="0" AND $dateHourCheck<"6"){
            $text = "Goede Nacht! <br> Het is nu ";
            $background = "evening";
        }

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            h1 {
                display: flex;
                height: 70vh;
                justify-content: center;
                align-items: center;
                font-size: 75px;
                font-family: "Comic Sans MS", cursive, sans-serif;
                color: black;
            }
        </style>
    </head>

    <body style="background-image: url(img/<?php echo $background;?>.png)">
        <h1>
            <?php 
                  echo $text, date("H:i")
            ?>
        </h1>
    </body>

    </html>