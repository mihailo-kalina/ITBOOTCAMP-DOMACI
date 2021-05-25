<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
        }
        td{
            border: 1px solid black;
            width: 30px;
            height: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    $a = mt_rand(1,64);
   
    echo "<table>";
    for($i = 0; $i <= 7; $i++){
        echo "<tr>";
        for($j=1; $j<=8; $j++){
            if($a == ($i*8+$j)){
                echo "<td style='background:black;color:white'>".($i*8+$j)."</td>";
            }else{
                echo "<td></td>";
            }
        }    
        echo "<tr>";
    }
    echo "</table>";


?>
    
</body>
</html>
