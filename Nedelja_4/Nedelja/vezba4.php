<?php
    $x1duzina = mt_rand(100,200);
    $x1vreme = mt_rand(100,200);
    $x2duzina = mt_rand(100,200);
    $x2vreme = mt_rand(100,200);
    echo "Auto 1 je presao: $x1duzina km za $x1vreme minuta <br />";
    echo "Auto 2 je presao: $x2duzina km za $x2vreme minuta <br />";

    $auto1 = $x1duzina / $x1vreme;
    $auto2 = $x2duzina / $x2vreme;

    echo "$auto1 <br /> $auto2 <br/>";

    if($auto1 > $auto2){
        echo "Automobil 1 je brzi";
    }else {
        echo "Automobil 2 je brzi";
    }
    
?>