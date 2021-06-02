<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .zeleni{
            color: green;
        }
        .crveni{
            color: red;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
    echo "<br>";
    $niz = array("Ova", "recenica", "glupa", "ima", "da", "ostane", "najduza");
    echo join("," , $niz);
    echo "<br>";

    $novi_niz = [];
    for($i = 0 ; $i < count($niz); $i++){
        if(strlen($niz[$i]) > 5){
            $novi_niz[$i] = "<span class='zeleni'>".$niz[$i]."</span>";
        }else{
            $novi_niz[$i] =  "<span class='crveni'>".$niz[$i]."</span>";
        }
    }
    echo join(",", $novi_niz);

?>