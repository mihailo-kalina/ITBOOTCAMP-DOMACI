<?php
    $n =mt_rand(1,10);
    $x =mt_rand(1,10);
    echo "$n, $x";
    echo "<br/>";

    function n_span(){
        global $n;
        for($i = 1 ; $i <= $n; $i++ ){
            echo "<span>Ovo je span $i...</span>";
        }
    }
    function x_div(){
        global $x;
        for($i = 1; $i <= $x; $i++){
            echo "<div>";
            n_span();
            echo "</div>";
        }
    }
    x_div();
?>