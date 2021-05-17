<?php
    $a = mt_rand(-10,10);
    $b = mt_rand(-10,10);
    echo "$a $b";

    if($a < 0 and $b <0 ){
        echo "Istog su znaka";
    }elseif($a > 0 and $b > 0){
        echo "Istog su znaka";
    }else {
        echo "Nisu istog znaka";
    }
?>
