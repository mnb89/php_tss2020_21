<?php

/**
 * Funzione di ordine superiore che restituisce una funzione
 * Programmazione Funzionale - dichiarativo
 */
function searchText($searchText){
    

    // la variabile $searchText è una variabile locale per la funzione esterna
    // per fare in modo che $searchText sia visibile (ambito) all'interno della funzione anonima devo usare "use
    return function ($taskItem) use ($searchText){ 

        $result = strpos($taskItem['taskName'], $searchText) !== false;
        // print_r($searchText);
        // print_r($taskItem);

        return $result;
    };

}
