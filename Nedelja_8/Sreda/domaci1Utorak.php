<?php
    include "domaci1Ponedeljak.php";

    class Baldahin extends Krevet{
        public $visina, $cenaBaldahina;

        public function __construct($duzina,$sirina,$materijal,$cena,$visina, $cenaBaldahina){
            parent::__construct($duzina, $sirina, $materijal, $cena);
            $this->visina = $visina;
            $this->cenaBaldahina= $cenaBaldahina;
        }

        function __toString(){
            return "Cena kreveta bez baldahina je ...".$this->cena." a cena sa baldahinom je...".$this->cenaBaldahina."Zbir cena je:".($this->cena+$this->cenaBaldahina);
        }

    }
    echo "<br>";
    $krevet_3 = new Baldahin(50,20,"najlon",500,10,1000);
    echo $krevet_3;






?>