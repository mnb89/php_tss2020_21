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


// Dichiarativo
function extractName($item){
    // print_r($item);
    // echo "/-----------------/";

    return $item['name'];
}

$filterPippo = function ($person){
    return $person['name']=='Pippo';
};

// Dichiarativo quando ogni singola istruzione viene svolta tramite funzioni

// L'array_map serve a creare un'array finale usando una 'funzione' come callback per fare delle operazioni su una o più array.
$names=array_map('extractName', $persons);

print_r($names);

$pippos = array_filter($persons,function($person){
        return $person['name']=='Pippo';
});

// $pippos = array_filter($persons, $filterPippo);

print_r($pippos);
// passare una funzione come argomento definisce le funzioni valori di prima classe, possono essere trattati allo stesso modo di un valore.




