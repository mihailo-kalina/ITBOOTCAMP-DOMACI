<?php
    function createDivSpan($div, $span){
        for($i = 1; $i <= $div; $i++){
            echo "<div>";
                for($j = 1; $j <= $span; $j++){
                    echo "<span>$j<br/></span>";
                }
            echo "</div>";
        }
    }

    createDivSpan(5,5);
?>