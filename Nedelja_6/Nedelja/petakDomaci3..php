Napisati fju koja od niza reči pravi html listu kao meni... 
Npr.  ['Stavka 1', 'Stavka 2', …] pretvara u <ul><li>Stavka 1</li><li>Stavka 2</li>…</ul>.  

<?php

    
    $niz = [];
    for($i = 0; $i < 5; $i++){
        $niz[$i] = "Stavka$i"; 
    }

    echo join("," , $niz);
    
    function list_ul($niz){
        echo "<ul>";
        for($i = 0; $i < count($niz); $i++){
            echo "<li>".$niz[$i]."</li>";
        }
        echo "</ul>";
    }

    list_ul($niz);

?>