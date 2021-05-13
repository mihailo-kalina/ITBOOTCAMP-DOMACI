<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = mt_rand(1,100);
        $b = mt_rand(1,100);
        echo "$a,$b";

        if($a >= $b){
            echo "<p style='color:green'>$a</p>";
        }
        else{
            echo "<p style='color:red'>$a</p>";
        }
        
        if($b >= $a){
            echo "<p style='color:green'>$b</p>";
        }
        else{
            echo "<p style='color:red'>$b</p>";

        }
    ?>






    
</body>
</html>