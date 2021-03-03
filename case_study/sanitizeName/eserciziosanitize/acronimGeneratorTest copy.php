<?php
require './acronimGenerator.php';



$dataset = [
    ['gioco molto difficile','G.M.D.',__LINE__],
    ['General Motors','G.M.',__LINE__],
    ['Federal Bureau Investigation','F.B.I.',__LINE__],
];


foreach ($dataset as $key => $row) {
    $text = $row[0];
    $atteso = $row[1];
    $line = $row[2];

    $result = acronimGenerator($text);
    
    
    if($result!=$atteso){
            echo "FAIL - test fallito alla linea: $line \n";
            echo "Valore risultato: |$result| \n";
    }

    
    // var_dump($result == $atteso);

}


?>