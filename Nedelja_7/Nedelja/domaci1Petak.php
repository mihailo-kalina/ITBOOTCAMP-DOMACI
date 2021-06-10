<?php
    $x = [ 
        ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
        ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
        ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
        ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
    ];    

    $x = array_map(function($godine_s){
        $godine_s["godine_staza"] = mt_rand(1,3);
        return $godine_s;
    },$x);

    function prikaz($niz){
        $str = "";
        for($i = 0; $i < count($niz); $i++){
            $str .= implode(", ", $niz[$i])."<br>";
        }
        echo $str;
    }
    prikaz($x);
    echo "<br>";

    function godine_staza($a, $b){
        return $a['godine_staza'] < $b['godine_staza'];
    }
    usort($x, 'godine_staza');
    prikaz($x);
    echo "<br>";

  
    $max = 0;
    for($i = 0; $i<count($x); $i++){ 
        if($max < $x[$i]['godine_staza'])
        $max = $x[$i]['godine_staza'];
    }
    $p_max = $max;
    

   echo "<br>";
   $y = array_filter($x, function($najveca_godina_staza){
       global $p_max;
        if($najveca_godina_staza['godine_staza'] == $p_max)
            return true;
        else
            return false;
   });
   prikaz($y);
   echo "<br>";

?>
Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)
Preko usort fje sortirati niz po godinama_staza,
 (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)
Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter)
 
