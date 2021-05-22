<?php
    $nova = 1;
    $i = 30;
    while($i >= 1){
        $nova *= $i;
        if($nova > 100000)break;
        $i--;
    }
    echo "<p style='color:red'>$nova</p><br/>";
    echo "<p style='color:green'>$i</p><br/>";



?>