<?php


class Automobile extends Veicolo {

    private $portabagagli=0;
    private $patente="B";



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

            $this->posizione += $spostamento;
            $this->carburante--;

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

    function caricaBagagli($chili){

        $this->portabagagli+=$chili;

    }

    function scaricaBagagli($chili){

        $this->portabagagli-=$chili;
        
    }


    function spegni(){

        echo "Motore Spento";

    }


}