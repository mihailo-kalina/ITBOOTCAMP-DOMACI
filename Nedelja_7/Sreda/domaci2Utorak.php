<?php
    function pronalazi(){
        $asoc = ['ponedeljak'=>27 , 'utorak'=>29 , 'sreda'=>25, 'cetvrtak'=>28 , 'petak'=>28];
        $max = 0;
        $ind = "";
        foreach($asoc as $dan=>$domaci){
            if($max < $domaci){
                $max = $domaci;
                $ind = $dan;
            }
        }
        echo "Najuspesniji dan je $ind sa $max uradjenih domacih";
        echo "<br>";
        $zbir = 0;
        foreach($asoc as $dan=>$domaci){
            $zbir+=$domaci;
        }
        $prosek = $zbir / count($asoc);
        echo "Prosecna uspesnost je: $prosek";
        echo "<br>";
        $min = $max;
        $ind = "";
        foreach($asoc as $dan=>$domaci){
            if($domaci < $min){
                $min = $domaci;
                $ind = $dan;
            }
        }
        echo "Razlika izmedju najbolje $max i najgore $min je ".($max-$min);
    }
    echo pronalazi();
    echo "<br>";
?>


Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima 
['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>28] 
pronalazi:
Koji dan je najuspesniji
Kolika je prosecna uspesnost
Razliku izmedju najbolje i najgore uspesnosti

