<?php
    function pronalazi(){
        $asoc = ['ponedeljak'=>27 , 'utorak'=>29 , 'sreda'=>25, 'cetvrtak'=>28 , 'petak'=>28];
        $max = 0;
        $ind = null;
        foreach($asoc as $dan=>$domaci){
            if($max < $domaci){
                $max = $domaci;
                $ind = $dan;
            }
        }
        echo "Najuspesniji dan je $ind sa $max uradjenih domacih";
        echo "<br>";
        $zbir = null;
        foreach($asoc as $dan=>$domaci){
            $zbir+=$domaci;
        }
        $prosek = $zbir / count($asoc);
        echo "Prosecna uspesnost je: $prosek";
        echo "<br>";
        $min = $max;
        foreach($asoc as $dan=>$domaci){
            if($domaci < $min){
                $min = $domaci;
            }
        }
        echo "Razlika izmedju najbolje $max i najgore $min je ".($max-$min);
    }
    echo pronalazi();
    echo "<br>";
?>



