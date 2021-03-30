<?php

$passato = new DateTime('1969-12-31 23:59:00');
echo $passato->getTimestamp()."\n";

$unix = new DateTime('1970-01-01'); // unix timestamp

echo $unix->getTimestamp()."\n";

$minutelater = new DateTime('1970-01-01 00:01:00');
echo $minutelater->getTimestamp()."\n";

$hourlater = new DateTime('1970-01-01 01:00:00');
echo $hourlater->getTimestamp()."\n";

$today=new DateTime();

echo $today->getTimestamp()."\n";

//task | today
$passato->getTimestamp() < $today->getTimestamp();


// -------------------------------------------------------



echo $today->format('d M Y')."\n";


echo $today->format('w')."\n";

$settimana = [
    'Domenica',
    'Lunedì',
    'Martedì',
    'Mercoledì',
    'Giovedì',
    'Venerdì',
    'Sabato'
];

echo "Oggi è ".$settimana[$today->format('w')]."\n";