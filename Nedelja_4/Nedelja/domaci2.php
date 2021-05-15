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
        $c = mt_rand(1,100);
        echo "$a,$b,$c<br/>";
        
        if($a < $b){
            if($a < $c){
                if($b < $c){
                    echo "$a, $b,$c";
                }else{
                    echo "$a, $c, $b";
                }  
            }else{
                echo "$c, $a, $b";
            }
        }elseif($b < $c){
            if($c < $a){
                echo "$b, $c, $a";
            }else {
                echo "$b, $a, $c";
            }
        }else {
            echo "$c,$b,$a";
        }
    ?>
</body>
</html>