<?php


class Camion extends Veicolo {

    private $rimorchio=0;
    private $patente="C";


    function __construct($name,$np,$mt,$seb){
        $this->nome=$name;
        $this->npasseggeri=$np;
        $this->motore=$mt;
        $this->serbatoio=$seb;
    }

    function avvia(){

        echo "Motore Avviato";

    }

    function sposta($spostamento):float{

        if($this->carburante|=0){

            $this->posizione += $spostamento/2;
            $this->carburante-=2;

        }

        return $this->posizione;

    }

    function rifornisci($litri){

        if($this->carburante+$litri > $this->serbatoio){

            $this->carburante = $this->serbatoio;
            echo "Troppa benzina";
            
        }else{

            $this->carburante+=$litri;

        }

    }

    function caricaRimochio($chili){

        $this->rimorchio+=$chili;
    }

    function scaricaRimorchio($chili){

        $this->rimorchio-=$chili;

    }

    function mostraCarico(){

        return $this->rimorchio;

    }

    function spegni(){

        echo "Motore Spento";
        
    }
}