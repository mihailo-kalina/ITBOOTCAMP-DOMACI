<?php
    echo "<table border= 1>";
    for($i = 2; $i <= 6; $i+=2){
        echo "<tr>";
        for($j = 3 ; $j <= 12; $j+=3 ){
            echo "<td>$i - $j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>