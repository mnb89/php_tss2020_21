<?php

// associative array gli indici sono stringhe e non numerici

// $task=array();
$task= [
    'taskName' => 'Comprare il latte',
    'date' => '2021-02-11', // yyyy-mm-dd
    'id' => 4212
];

$person= [
    'name' => 'Alberto',
    'surname' => 'Vacca',
    'age' => 31,
    'cf' => 'VCCLRT89L21H856F',
    'address' => [
        'street' => 'Via Ormea',
        'number' => '22/2',
        'postalcode' => '10100'
    ]
];


// echo "il ".$task['date']." ".$person['name']." è andato a ".$task['taskName']."\n";
// echo $person['address']['street'];

$name = $person['name'];
$street = $person['address']['street'];
$number = $person['address']['number'];

echo "$name abita in $street numero $number\n";