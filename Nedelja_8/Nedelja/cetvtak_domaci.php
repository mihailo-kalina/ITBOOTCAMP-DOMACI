<?php
    class SastojakHrane{
        public $naziv, $mera, $kalorije;

        function __construct($naziv, $mera, $kalorije){
            $this->naziv = $naziv;
            $this->mera = $mera;
            $this->kalorije = $kalorije;
        }
        function promeniMeru($novaMera){
            $this->mera = $novaMera;
        }
        function prikazi(){
            echo "<p>";
            echo $this->naziv.",";
            echo $this->mera.",";
            echo $this->kalorije;
        }
    }

    class Jelo{
        public $naslov, $opis, $podaci;
        
        function __construct($naslov,$opis,$podaci){
            $this->naslov = $naslov;
            $this->opis = $opis;
            $this->podaci = $podaci;
        }
        function promeniMeru($sastojak, $gramaza){
            foreach($this->podaci as $podatak){
                if($podatak->naziv == $sastojak)
                    $podatak->promeniMeru($gramaza);
            }
        }
        function prikazi(){
            echo "<p>";
            echo $this->naslov.",";
            echo $this->opis.",";
            foreach($this->podaci as $podatak)
                $podatak->prikazi();
        }    
    }

    $podaci[0]= new SastojakHrane("Jaja", "2kom", "300kcal");
    $podaci[1]= new SastojakHrane("Brasno", "200g", "600kcal");
    $podaci[2]= new SastojakHrane("Secer", "20g", "100kcal");
    $podaci[3]= new SastojakHrane("So", "5g", "40kcal");

    $jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
    $jelo->prikazi();
    echo "<br>";
    $jelo->promeniMeru("Brasno", "400g");
    $jelo->prikazi();
    echo "<br>";
?>




Napraviti klasu SastojakHrane koja ce imati clanice: 
naziv, mera, kalorije.
I metode: konstruktor, "promeniMeru" koja menja meru i "prikazi"
koja samo prikazuje sve podatke zajedno u jednom paragrafu.

Napraviti klasu Jelo koja ima naslov, opis i niz sastojaka hrane. 
U konstruktoru se dobija naslov, opis i niz $podaci. 
Naslov i opis samo upisati u this, a preko niza $podaci napraviti niz objekata koji su tip SastojakHrane. 
Napraviti metode "prikazi" i metodu za "promeniMeru" za promenu mere jednog sastojka.  

Proveriti kod sledecim naredbama:
$jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
$jelo->prikazi();
$jelo->promeniMeru("brasno", "400g");
$jelo->prikazi();

