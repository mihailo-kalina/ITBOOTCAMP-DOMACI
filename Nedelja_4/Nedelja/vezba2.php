<?php
    $ckrompkg = 50;
    $xgrama = mt_rand(5000,20000);
    $cenaxgrama = ( $xgrama / 1000) * 50;
    $finalna = number_format($cenaxgrama,2);

    echo "Cena krompira za 1kg: $ckrompkg din <br />";
    echo "Krompir u gramima: $xgrama grama <br />";
    echo "Cena za X grama: $finalna din";







?>