<?php
    function createSpan($num){
        echo "<div>";
            for($i = 1; $i <= $num ; $i++)
            echo "<span>Span$i<br/></span>";
        echo "</div>";
    }

    createSpan(1);
?>


