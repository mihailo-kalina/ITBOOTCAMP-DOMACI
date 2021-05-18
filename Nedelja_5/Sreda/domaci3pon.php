
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
    $prikaz1 = printa();
    echo "<p style='color:red'>$prikaz1</p>";


    function printa2(){
        global $a, $b;
        $ime1 = strlen($a);
        $ime2 = strlen($b);
        $print = " ";
        
        if($ime1 < $ime2) $print = $a;
        if($ime2 < $ime1) $print = $b; 
        
        return $print;
    }
    $prikaz2 = printa2();
    echo "<p style='color:green'>$prikaz2</p>";

?>

