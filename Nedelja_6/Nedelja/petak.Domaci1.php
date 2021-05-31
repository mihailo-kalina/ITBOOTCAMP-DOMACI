<?php

    function niz(){
        $y = [];
        for($i = 0; $i < 10; $i++){
            $y[$i] = mt_rand(10,200);
        }
        return $y;
    }

    $niz = niz();
    echo join("," , $niz);
    echo "<br>";

    function dvocifreni_trocifreni($niz){
        $k = count($niz);
        $brojac_1 = 0;
        $brojac_2 = 0;
        for($i = 0 ; $i < $k; $i++){
            if($niz[$i] > 99){
                $brojac_1++;
            }else{
                $brojac_2++;
            }  
        }
        if($brojac_1 > $brojac_2){
            echo "Trocifrenih brojeva ima vise";
        }elseif ($brojac_2 > $brojac_1){
            echo "Dvocifrenih ima vise";
        }else{
            echo "Ima ih isto";
        }
    }
    dvocifreni_trocifreni($niz);

?>