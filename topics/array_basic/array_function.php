<?php



// in_array()

$names = ['Mario','Luigi','Paolo'];

// voglio sapere se all'interno dell'array c'è Mario?



/**
 * Questa funzione cerca il nome nell'array //questo commento descrive la funzione sotto
 */
function findName(string $nametofind,array $names):bool{
    foreach($names as $name){
        if ($name===$nametofind){ // === è lo strettamente uguale, quindi verifica anche il tipo di dato.
            return true;
        }
    }
    return false;
}

var_dump(findName('Mario', $names));
var_dump(in_array('Mario', $names));