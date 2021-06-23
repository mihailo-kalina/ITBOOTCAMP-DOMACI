<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include "baza.php";

        $putovanja = $b->prikazi_destinacije();

        echo "<table border='1'>";
        foreach($putovanja as $red){
            echo "<tr>";
            foreach($red as $val){
                echo "<td>".$val."<td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        $putnici = $b->prikazi_putnike();

        echo "<table border='1'>";
        foreach($putnici as $red){
            echo "<tr>";
            foreach($red as $val){
                echo "<td>".$val."<td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        $otkazi_rezervaciju = $b->otkazi_rezervaciju('7');

    ?>
</body>
</html>