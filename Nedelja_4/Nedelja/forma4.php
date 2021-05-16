<?php
    $ime = $_GET['ime'];
    $i = substr($ime, 0, 1);
    $search = ' ';
    $pomocna = strpos($ime, $search);
    $p = substr($ime, $pomocna, 2);

    echo "$i. $p.";

?>