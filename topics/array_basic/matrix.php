<?php

$classe=[   //uguale a scrivere = array();
    ["Mario","Rossi"],
    ["Gianni","Fantoni"],
    ["Guido","Lamoto"],
];


print_r($classe);

foreach ($classe as $key => $alunno) {
    $nome=$alunno[0];
    $cognome=$alunno[1];

    echo "ciao sono $nome $cognome \n";
}