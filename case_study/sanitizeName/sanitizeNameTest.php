<?php
require './case_study/sanitizeName/sanitizeName.php';

//  __LINE__ è una costante che prende il valore della linea dove si trova
//  <== qui __LINE__ vale 5.

$dataset=[
    ["mario","Mario",__LINE__],
    ["mAriO","Mario",__LINE__],
    ["MARIO","Mario",__LINE__],
    ["De giovanni","De Giovanni",__LINE__],
    ["de Giovanni","De Giovanni",__LINE__],
    ["Mario83","Mario",__LINE__],
    ["Mario@","Mario",__LINE__],
    ["<h1>Mario</h1>","Mario",__LINE__],
    ["<h1></h1>Mario","Mario",__LINE__],
];


foreach ($dataset as $key => $row) {
    $text = $row[0];
    $atteso = $row[1];
    $line = $row[2];

    $result = sanitizeName($text);

    
    if($result!=$atteso){
    //     echo "PASS - tutto ok\n";
    // }else{
        echo "FAIL - test fallito alla linea: $line \n";
    }

    
    // var_dump($result == $atteso);

}

?>