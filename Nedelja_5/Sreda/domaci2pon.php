<?php
    $a = "Mihailo";
    $b = "MihailoVUkojicic";

    function printa(){
        global $a, $b;
        $ime1 = strlen($a);
        $ime2 = strlen($b);
        $print = " ";
        
        if($ime1 > $ime2) $print = $a;
        if($ime2 > $ime1) $print = $b; 
        
        return $print;
    }
    echo printa();
?>
