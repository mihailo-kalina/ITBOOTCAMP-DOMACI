<?php
    function largerNumber($a,$b,$c){
       if($a > $b and $a > $c){
           return $a;
       }elseif($b > $c){
           return $b;
       }else{
           return $c;
       }
    }
    
    echo largerNumber(mt_rand(1,20), mt_rand(1,20), mt_rand(1,20));
?>