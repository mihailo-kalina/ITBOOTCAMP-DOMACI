<?php
    $br1 = mt_rand(10,15);
    $br2 = mt_rand(10,15);

   
    if($br1 > $br2){
        echo "<p style='color:red'>$br1 , $br2</p><br />";
    }elseif($br2 > $br1) {
        echo "<p style='color:red'>$br2 , $br1</p><br/>";
    }else {
        echo "<p style='color:green'>$br1, $br2 </p>";
    }


?>