<?php
    $x = [ 
        ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
        ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
        ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
        ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
    ];

    $x[4]=['ime'=>"Nemanja", "godine"=>28, "grad"=>"Kg", "pozicija"=>"kuvar"];
    $x[5]=['ime'=>"Dragisa", "godine"=>38, "grad"=>"Bg", "pozicija"=>"programer"];
    $x[6]=['ime'=>"Ljuba", "godine"=>40, "grad"=>"Kr", "pozicija"=>"meandzer"];
    $x[7]=['ime'=>"Miodrag", "godine"=>29, "grad"=>"Va", "pozicija"=>"dizajner"];
    
    function svi_podaci($niz){
        echo "<p>";
        for($i=0;$i<count($niz); $i++){
            if(gettype($niz[$i]) !== 'array')
                echo "$niz[$i],"."<br>";
            else
                echo join(",",$niz[$i])."<br>";
        }
        echo "</p>";
        
    }
    svi_podaci($x);
    echo"<br>";



    function svi_programeri($niz){
        $programeri = array_filter($niz,function($osoba){
            if($osoba['pozicija'] === 'programer')
                return true;
            else
                return false;
        });
        return $samo_imena = array_map(function($osoba){return $osoba['ime'];},$programeri);
    }

    $imena = svi_programeri($x);
    echo "<br>";
    function prikazi_komplikovanu_osobu($osoba){
        echo "<p>";
        foreach($osoba as $vr){
            if(gettype($vr) !== 'array')
                echo "$vr,"."<br>";
            else
                echo join(",", $vr)."<br>" ;
        }
        echo "</p>";
    }
    Prikazi_komplikovanu_osobu($imena);

    function osoba($niz,$osoba){
        for($i=0; $i<count($niz); $i++){
            if($niz[$i]['ime'] === $osoba)
                return join(",",$niz[$i]);
        }
    }

    for($i = 0; $i < count($x); $i++){
        if(stripos($x[$i]['ime'], "s") !== false){
            echo osoba($x, $x[$i]['ime']);
            echo "<br>";
        }
    }
    
?>
