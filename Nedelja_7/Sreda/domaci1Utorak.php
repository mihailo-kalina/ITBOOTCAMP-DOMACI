<?php

    $niz = [];
    for($i = 0 ; $i < 5; $i++){
        $niz[$i] = mt_rand(0,10);
    }
    echo implode("," , $niz);
    echo "<br>";

    function nule($x){
        for($i = 0; $i < count($x); $i++){
            if($x[$i] === 0){
                return false;
            }
        }
        return true;
    }
    if(nule($niz))
        echo "Niz nema nule";
    else
        echo "Niz ima bar jednu nulu";
?>



