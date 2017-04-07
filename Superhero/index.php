<?php
    require 'Superhero.php';
    $hero = new Superhero();
    $superman = new Superman();
    $batman = new Batman();
    $batwoman = new Batwoman();

?>

<!DOCTYPE html>
<html>

    <head>
        <title>Super Heros</title>

        <link rel='stylesheet' type = 'text/css' href='/styles.css'>
    </head>

    <body>
        <h1>Super Heros</h1>
        <p>
            <?php
                $hero->showInfo();
                $hero->punch();
                $hero->kick();
                $hero->superPower();

                $superman->showInfo();
                $superman->punch();
                $superman->kick();
                $superman->superPower();

                $batman->showInfo();
                $batman->punch();
                $batman->kick();
                $batman->superPower();
                $batman->driveBatmobile();

                $batwoman->showInfo();
                $batwoman->punch();
                $batwoman->kick();
                $batwoman->superPower();
                $batwoman->driveBatmobile();
            ?>

        </p>



    </body>
</html>