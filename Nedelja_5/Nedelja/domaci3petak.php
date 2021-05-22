<?php
    $i=30;
    $prvi_br = 0;
    $drugi_br = 0;

    while($i < 99){
        $prvi_br = floor($i / 10);
        $drugi_br = $i % 10;
        $i++;
        if($prvi_br % 3 == 0 or $drugi_br % 4 == 0)continue;
        echo "$prvi_br"."$drugi_br<br/>";
    }

?>