<?php
    $ime = $_GET['ime'];
    $prezime = $_GET['prezime'];
    $i = substr($ime, 0 , 1);
    $p = substr($prezime, 0 , 1);
    echo "$i. $p."
?>