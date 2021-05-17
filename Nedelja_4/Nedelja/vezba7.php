<?php
    $br1 = mt_rand(10,15);
    $br2 = mt_rand(10,15);
    
    if($br1 > $br2){
        echo "<p style ='color:blue'>$br1</p> <p style='color:red'>$br2</p><br/>";
    }elseif($br2 > $br1){
        echo "<p style ='color:blue'>$br2</p> <p style='color:red'>$br1</p>";
    }else {
        echo "<p style='color:green'>$br1, $br2 </p>";
    }
?>