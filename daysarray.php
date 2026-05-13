<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Using PHP Variables, Arrays and Operators</title>
    </head>

    <body>
        <h1>PHP Variables, Arrays and Operators</h1>

        <?php
            $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
            $daysFrench = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

            echo "The days of the week in English are:<br>";
            echo implode(", ", $days) . ".";

            echo "<br><br>";

            echo "The days of the week in French are:<br>";
            echo implode(", ", $daysFrench) . ".";
        ?>
    </body>
</html>