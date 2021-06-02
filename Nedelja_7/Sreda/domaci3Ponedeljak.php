
<?php
    function niz(){
        $brojevi = $_GET['brojevi'];
        $x = explode(" ", $brojevi);
        return $x;
    }
    
    function parni_brojevi($x){
        $brojac = 0;
        for($i = 0 ; $i < count($x); $i++){
            if($x[$i] % 2 == 0){
                $brojac++;
            }else{
                continue;
            }
        }
        if($brojac >= 3){
            return "Ovaj niz ima 3 parna broja";
        }else{
            return "Ovaj niz nema 3 parna broja";
        }
    }
    echo "<br>";
    function manji_od_1000($x){
        for($i = 0 ; $i < count($x); $i++){
            if($x[$i] > 1000){
                return "Ovaj niz nema sve brojeve manje od 1000";
            }
        }
        return "Ovaj niz ima sve brojeve manje od 1000";
    }
    $parni = parni_brojevi(niz());
    $manji_od_1000 = manji_od_1000(niz());
    if($parni){
        echo $parni;
    }
    echo "<br>";

    if($manji_od_1000){
        echo $manji_od_1000;
    }

?>




