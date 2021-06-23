<?php

    class Baza{
        public $conn;

        function __construct($baza){
            $this->conn = new mysqli('localhost','root','',$baza);
            if ($this->conn->connect_error)
                die('Greska: '. $this->conn->connect_error);
            else
                echo 'Konektovan!';
        }
        
        function izvrsi_select($upit){
            $podaci = $this->conn->query($upit);
            if($podaci === false)
                return ['uspesno'=>false,'poruka'=>$this->conn->error];
            else{
                $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'niz'=>$niz];
            }
        }

        function prikazi_destinacije(){
            $p = $this->izvrsi_select(
                "SELECT  destinacije.drzava, destinacije.grad, putovanja.datum_polaska, putovanja.datum_povratka 
                FROM destinacije JOIN putovanja ON destinacije.id = putovanja.destinacija_id");
            if($p['uspesno'] == true){
                return $p['niz'];
            }else{
                die("Neuspesan upit: ".$p['poruka']);
            }
        }
        function prikazi_putnike(){
            $p = $this->izvrsi_select("SELECT
            putnici.ime_prezime, destinacije.drzava, destinacije.grad, putovanja.datum_polaska, putovanja.datum_povratka
            FROM destinacije JOIN putovanja ON destinacije.id = putovanja.destinacija_id
            JOIN putnici_putovanja ON putnici_putovanja.id_putovanja = putovanja.id
            JOIN putnici ON putnici.broj_pasosa = putnici_putovanja.broj_pasosa");
            if($p['uspesno'] == true){
                return $p['niz'];
            }else{
                die("Neuspesan upit: ".$p['poruka']);
            }
        }
        
        function otkazi_rezervaciju($id){
            $p = $this->izvrsi_select("DELETE  FROM putnici_putovanja WHERE id = '$id'");
            if($p['uspesno'] == true){
                return $p['niz'];
            }else{
                die("Neuspesan upit: ".$p['poruka']);
            }
        }
        function prikazi_putovanja(){
            $p = $this->izvrsi_select("SELECT broj_pasosa FROM putnici_putovanja");
            if($p['uspesno'] == true){
                return $p['niz'];
            }else{
                die("Neuspesan upit: ".$p['poruka']);
            }
        }
            
        
    }

    $b = new Baza('3820_domaci_32_2');

?>
Metoda prikazi_putnike prikazuje sve putnike i njihovo putovanje 
(ime_prezime, drzava, grad, datum_polaska, datum_povratka)
Metoda otkazi_rezervaciju koja za dati  broj_pasosa otkazuje sva njegova putovanja



