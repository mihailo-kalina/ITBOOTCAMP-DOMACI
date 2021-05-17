<?php
    $br1 = mt_rand(10, 15);
    $br2 = mt_rand(10, 15);

    if($br1 > $br2){
        echo "$br1 , $br2";
    }else {
        echo "$br2 , $br1";
    }
?>