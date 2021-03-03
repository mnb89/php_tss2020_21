<?php

$persons = array(
    [
        'name' => 'Pippo',
        'surname' => 'Baudo',
    ],
    [
        'name' => 'Giancarlo',
        'surname' => 'Magalli',
    ],
    [
        'name' => 'Pippo',
        'surname' => 'Franco',
    ],
);

// += in javascript equivale al .= in php

// $resoultimo= "";
// foreach ($persons as $person){
//     $resultimo.=$person["name"]."\n";
// }

// echo $resultimo;

// trasformazione
// Imperativo
// ['Luca','Giancarlo','Pippo'];
$name = [];

foreach ($persons as $person) {
    $name[]= $person['name'];
}

// imperativo quando le istruzioni sono all'interno del ciclo

// print_r($name);

echo implode("\n",$name);
// implode scompone l'array di stringhe e la riversa in una stringa unica con un separatore che si inserisce dentro le ""

// filtro
$pippos =[];

foreach ($persons as $person){
    if($person['name']=='Pippo'){
        array_push($pippos, $person);
    }
}

print_r($pippos);