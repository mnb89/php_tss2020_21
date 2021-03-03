<?php

// index array

$colors = array('red','blue','green');


// echo $colors; 
// Stampa solo elementi semplici, quindi non le array

// print_r($colors); 
// Lo stampa per elementi complessi come le array

// var_dump($colors); 
// Uno stampa più complesso che ti da come risultato più informazioni

// in php ci sono due tipologie di errori "Notice", poco grave, che permette comunque l'esecuzione del resto del codice e il "Fatal Error", grave, che blocca il processo.

// color.length
for ($i=0; $i<count($colors) ; $i++) { 
    echo "Indice $i corrisponde a $colors[$i] \n";
}

echo "\n";
// colors.push("rebeccapurple")

$colors[]="rebeccapurple";

// ciclo perfetto per leggere tutti i valori di una array.

foreach($colors as $key => $color){ // la $key equivale all'indice e non è indispensabile nel for, e $color è la variabile che prende il valore ad ogni ciclo.
    echo "la chiave $key contiene $color \n";
}



