<?php

/**
 * Funzione di ordine superiore che restituisce una funzione
 * Programmazione Funzionale - dichiarativo
 */
function searchTextDichiarative($searchText){
    // la variabile $searchText è una variabile locale per la funzione esterna
    // per fare in modo che $searchText sia visibile (ambito) all'interno della funzione anonima devo usare "use"
    return function ($taskItem) use ($searchText){ 

        $result = strpos($taskItem['taskName'], $searchText) !== false;
        return $result;
    };

}


/**
 * Stile imperativo
 * 
 * @param string $searchText testo da cercare nella chiave "taskName"
 * @param array $taskList elenco delle task da cercare
 * @return array $result un nuovo array con le task che rispettano il criterio
 */

function searchTextImperative(string $searchText, array $taskList):array{
    $result = [];
    foreach ($taskList as $taskItem) {
        
        if(strpos($taskItem['taskName'], $searchText) !== false){
            
            $result[]=$taskItem;

        }

    }
    return $result;
}



/**
 * Ricerca delle task con un determinato stato di progressione.
 * 
 * @param string $status è la stringa che corrisponde allo stato da cercare
 * (progress|done|todo)
 * @return callback la funzione che verrà utilizzata da array_filter
 */

function searchStatus(string $status){

    return function ($taskItem) use ($status){ 

        if ($status!='all') {
            $result = strpos($taskItem['status'], $status) !==false;
        }else{
            $result = "";
        }
        return $result;
    };
}