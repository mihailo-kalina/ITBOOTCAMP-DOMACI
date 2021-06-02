<?php
    echo "<br>";
    $niz = [];
    for($i = 0; $i < 5; $i++){
        $niz[$i] = mt_rand(1,10);
    }
    echo join(",", $niz);

    $aritmeticki = 0;
    for($i=0; $i < count($niz); $i++){
        $aritmeticki += $niz[$i];    
    }
    echo "<br>";
    $aritmeticki = $aritmeticki / 5;
    echo "Aritmeticka sredina od niza je:".$aritmeticki;
    
    $novi_niz = [];
    for($i = 0; $i < count($niz); $i++){
        if($niz[$i] > $aritmeticki){
            $novi_niz[$i] = $niz[$i];
        }else{
            continue;
        }
    }
    echo "<br>";
    echo "Brojevi koji su veci od aritmeticke sredine niza:".join("," , $novi_niz);
?>