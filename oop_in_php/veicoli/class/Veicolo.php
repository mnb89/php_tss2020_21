<?php

abstract class Veicolo {

    /**
     * @var npasseggeri numero di persone max trasportabili
     * @var motore cilindrata del motore in cc
     * @var serbatoio dimentione massima del serbatoio
    */
    private $npasseggeri;
    private $nome;
    private $motore;
    private $serbatoio;
    private $carburante=0;
    private $posizione=0;
    private $patente;

    abstract function __construct($name,$np,$mt,$seb);
        
    abstract function avvia();

    abstract function sposta($spostamento):float;

    abstract function rifornisci($litri);

    public function serbatoioCarburante():string {

        $dicitura=$this->carburante+"/"+$this->serbatoio+" lt";
        
        return $dicitura;

    }


    public function Passeggeri() {

        return $this->npasseggeri;

    }

    public function getMotore():int {

        return $this->motore;
        
    }

    abstract function spegni();

}