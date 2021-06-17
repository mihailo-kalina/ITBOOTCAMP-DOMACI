<?php 
    include "petak_podaci.php";
    
    class Proizvod{
        public $id, $ime,$slika,$opis,$naslov, $cena,$grupa;

        function __construct($niz){
            //['id'=>100, 'ime'=>'Cokolada100g', 'naslov'=>"Cokolada 100 grama ima sa lesnicima", 'cena'=>100, 'slika'=>'coko.jpg', 'opis'=>'1  Ovo je neki bas duzi opis .']
            $this->id = $niz['id'];
            $this->ime = $niz['ime'];
            $this->slika = $niz['slika'];
            $this->opis = $niz['opis'];
            $this->naslov = $niz['naslov'];
            $this->cena = $niz['cena'];
            $this->grupa =$niz['grupa'];
        }
        function prikazi_proizvod(){
            echo "<div style='border:2px solid  black; width:400px; display:inline-block'>";
            echo "<h1 class='naslov_proizvoda'>$this->naslov $this->grupa</h1>";
            echo "<img style='width:200px' src='".$this->slika."' alt='slika'/>";
            echo "<a href='petak_detaljnije.php?id=$this->id'>Detaljnije</a>";
            echo "</div>";
        }
        function prikazi_proizvod_detaljnije() {
            echo "<h1>$this->naslov</h1>";
            echo "<img style='width:400px'  src='$this->slika' alt='slika'>";
            echo "<p>$this->opis</p>";
            echo "<p>$this->cena</p>";
        }

    }

    class ListaProizvoda{
        public $p;


        function __construct(){
            $this->p = [];
        }
        function dodaj_proizvode($podaci){
            for($i=0; $i<count($podaci); $i++){
                $pr = new Proizvod($podaci[$i]);
                array_push($this->p, $pr);
            }

        }
        function dodaj_4_proizvoda($proizvod0, $proizvod1, $proizvod2, $proizvod3){
            $this->p[0] = new Proizvod($proizvod0);
            $this->p[1] = new Proizvod($proizvod1);
            $this->p[2] = new Proizvod($proizvod2);
            $this->p[3] = new Proizvod($proizvod3);
        }
        function prikazi_sve_proizvode($grupa=""){
            if($grupa === "")
                for($i=0; $i<count($this->p); $i++){
                    $this->p[$i]->prikazi_proizvod();
                }
            else{
                for($i = 0; $i < count($this->p); $i++){
                    if($this->p[$i]->grupa == $grupa){
                        $this->p[$i]->prikazi_proizvod();
                    }
                }
            }
        }

        function prikazi_jedan_proizvod_detaljnije($id){
            for($i=0; $i<count($this->p); $i++){
                if($this->p[$i]->id == $id)
                    $this->p[$i]->prikazi_proizvod_detaljnije();
            }
        }
        function prikazi_grupu_proizvoda($grupa){
            echo "<h1>$grupa</h1>";
            for($i=0; $i<count($this->p); $i++){
                if($this->p[$i]->grupa == $grupa){
                    $this->p[$i]->prikazi_proizvod_detaljnije();
                }
            }
        }
    }

    class WebSite{
        
        function header(){
            echo "<h1>";
            echo "<a href='petak_index.php'>Dobro dosli u web-shop</a>";
            echo "</h1>";
        }
        function footer(){
            echo "<h3>Bolje vas nasli</h3>";
        }
        function meni($podaci){
            echo "<ul>";
            $grupe = array_unique(array_column($podaci, "grupa"));
            for($i=0; $i< count($grupe); $i++) {
                echo "<li><a href='petak_grupa_proizvoda.php?grupa=$grupe[$i]'>".$grupe[$i]."</a></li>";
            }     
            echo "</ul>";
        }
/*
        function prikazi_jednu_grupu_proizvoda($grupa){
            for($i=0; $i<count($podaci); $i++){
                if($podaci[$i]['grupa'] == $grupa){
                    $this->p[$i]->prikazi_proizvod_detaljnije();
                }
            }
        }
*/
         
    } 
    $lp = new ListaProizvoda();
    //$pom->dodaj_4_proizvoda($podaci[0], $podaci[1], $podaci[2], $podaci[3]);
    $lp->dodaj_proizvode($podaci);
    
    

?>
<!--
Nastaviti zadatak sa casa i :
Napraviti klasu WebSite. Metode: 
 - header() sa naslovom "Dobro dosli u web-shop" - link ka index.php.
 - footer() sa naslovom "Bolje vas nasli" 
 - meni() koji prikazuje listu svih grupa. Svaki naziv grupe je link - index.php?grupa=…
2. Prepraviti index.php i detaljnije.php da prikazuju i header, pa meni, pa proizvode, pa footer...
3.* dopunski - neobavezno: napraviti meni tako sto se pokupe sve grupe iz niza podaci, i naprave svi linkovi.
-->