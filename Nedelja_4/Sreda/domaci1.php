<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $dvesta = 200;
            $osamdeset = 80;
            echo 'A = 200 <br/>';
            echo 'B = 80 <br/>';
        ?>
        
        <?php
            echo "zbir=".$total = $dvesta + $osamdeset;
        ?>

        <?php
            echo "razika=".$total = $dvesta - $osamdeset;
        ?>

        <?php
            echo "kolicnik=".$total = $dvesta / $osamdeset;  
        ?>

        <?php
            echo "proizvod=".$total = $dvesta * $osamdeset;
        ?>
    </div>

    <div>
        <?php
            $a = 2;
            $b = 4;
            $c = 6;
            $total = $a + $b + $c
        ?><br>

        <?="a = 2" ?><br>
        <?="b = 4" ?><br>
        <?="c = 6 <br/>"?>

        <?php
            echo "Zbir brojeva a, b i c =";
            echo $total;
        ?>
    </div>
</body>
</html>