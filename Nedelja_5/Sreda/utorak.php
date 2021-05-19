<?php

    $br1 = $_GET['br1'];
    $br2 = $_GET['br2'];
    $br3 = $_GET['br3'];
    $br4 = $_GET['br4'];

    echo "$br1, $br2, $br3, $br4<br />";

    function provera(){
        global $br1, $br2, $br3, $br4;

        if($br2 > $br1 and $br4 > $br3){
            $pomocna1 = 0;
            $pomocna2 = 0;
            for($i = $br1; $i <= $br2; $i++){
                if($i % 4 == 0){
                    $pomocna1 += $i;
                }
            }
            for($k = $br3; $k <= $br4; $k++){
                if($k % 3 == 0){
                    $pomocna2 += $k;
                }   
            }
        }else{
            echo "DIE";
        }
        if($pomocna1 >= $pomocna2){
            return $pomocna1;
        }else {
            return $pomocna2;
        }
    }
    echo provera();




?>