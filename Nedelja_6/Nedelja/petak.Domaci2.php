Napisati fju koja za dati niz stringova pomocu fje "palindrom" (radjeno na casu)
 ispituje i prikazuje samo palindrome tog niza.  
 Npr za niz ("potop", "buducnost", "lul", "nije")  prikazuje reci "potop" i "lul".


<?php
    echo "<br>";
    $niz = array("potop buducnsost lul nije");
    echo join("," ,$niz);
    echo "<br>";
    
    function palindrom($niz){
        $k = count($niz);
        for($i = 0; $i < $k; $i++){
            if($niz[$i] === strrev($niz[$i])){
                echo $niz[$i];
            }
        }
       
    }
    echo "<br>";

    palindrom($niz);

    
?>