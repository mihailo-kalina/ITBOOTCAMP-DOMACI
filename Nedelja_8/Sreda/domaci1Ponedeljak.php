<?php

    class Krevet{

        public $duzina;
        public $sirina;
        public $materijal;
        protected $cena;

        public function __construct($duzina, $sirina, $materijal, $cena){
            $this->duzina = $duzina;
            $this->sirina = $sirina;
            $this->materijal = $materijal;
            $this->cena = $cena;
        }
        
        public function citanje_cene(){
            return $this->cena;
        }
            
        public function __toString(){
            return "Krevet je duzine:".$this->duzina." i sirine:".$this->sirina.",napravljen od-".$this->materijal.",po ceni:".$this->cena;
        }
        public function popust($procenat){
            $popust = 0;
            $popust = $this->citanje_cene()-(($this->citanje_cene()/100) * $procenat);
            return $popust;
        }
    }

    $krevet_1 = new Krevet(10,5, "platno", 40000);
    $krevet_2 = new Krevet(8,4,"Najlon", 25000);

    if($krevet_1->citanje_cene() > $krevet_2->citanje_cene())
        echo $krevet_1;
    else
        echo $krevet_2;
    echo "<br>";

    $krevet_popust = new Krevet(10, 20, "platno", 1000);
    echo $krevet_popust;
    echo "<br>";
    echo "Cena sa popustom je: ".$krevet_popust->popust(10);
    
?>  





