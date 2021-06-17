<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-size:2em">
    <?php
        if(!isset($_GET['grupa'])){
            die("Trazite nepostojecu stranicu!");
        }
        $grupa =  $_GET['grupa'];
        include "petak_Proizvod.php";
        $website = new WebSite();

        $website->header();
        $website->meni($podaci);
        $lp->prikazi_grupu_proizvoda($grupa);
        $website->footer();

    ?>
</body>
</html>