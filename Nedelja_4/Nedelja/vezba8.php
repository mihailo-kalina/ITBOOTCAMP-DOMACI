<?php
    $a = mt_rand(1, 10);
    $b = mt_rand(1,10);
    $c = mt_rand(1,10);
    echo "$a, $b, $c <br/>";

    if ($a === $b + $c or $b === $a + $c or $c === $a + $b){
        echo "Zbir dva broja je jednak prvom";
    }else {
        echo "Zbir dva broja nisu jednaka prvom";
    }

       
?>