<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .proizvod{
            width: 200px;
            display: inline-block;
        }
        img{
            width: 200px;
            height: 200px;
        }
        .popust{
            color: green;
        }
        .cena{
            color: red;
        }
        
    </style>
</head>
<body>
    
</body>
</html>
<?php
    function proizvod($cena, $popust, $slika, $naziv_proizvoda){
        echo "<div class='proizvod'>";
        echo "<img src='$slika' alt='Slika proizvoda'>
            <p class='naziv_proizvoda'>$naziv_proizvoda</p>";
        if($popust > 0){
            echo "<p>Cena: $<span class='cena'>$cena</span></p>";
            $nova_cena = 0;
            for($i=1; $i<=$popust; $i++){
                $nova_cena = $cena - ($cena/100*$i);
            }
            echo "<p>Popust: $popust%</p>";
            echo "<p>Cena sa popustom: $<span class='popust'>$nova_cena</span></p>";
        } else {
            echo "<p>Cena: $cena$</p>";
        } 
        echo "<div>";
    }

    proizvod(100,5,'bud.png','Budwiser');
    proizvod(50,20,'heineken.jpg','Heineken');
    proizvod(20,0,'stela.jpg','Stela');
?>

            
