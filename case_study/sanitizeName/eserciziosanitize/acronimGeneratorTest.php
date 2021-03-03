<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acronim Generator</title>
    <style>
        .card {
            border:1px solid ;
            padding: 0.5rem;
            margin-bottom: 1rem;
        }

        .card-fail {
            color: hsl(0, 100%, 50%);
            background-color: hsl(0, 100%, 95%);
        }

        .card-pass {
            color: hsl(120, 100%, 25%);
            background-color: hsl(120, 100%, 95%);;
        }
    </style>
</head>
<body>
    

<?php
require './acronimGenerator.php';



$dataset = [
    ['gioco molto difficile','G.M.D.',__LINE__],
    ['General Motors','G.M.',__LINE__],
    ['Federal Bureau Investigation','F.B.I.',__LINE__],
];

?>

<?php

foreach ($dataset as $key => $row) {
    $text = $row[0];
    $atteso = $row[1];
    $line = $row[2];

    $result = acronimGenerator($text);
    
    
    echo "<div class='card ";
    if($result==$atteso){
        echo "card-pass'>";
        echo "PASS line:".$line."<br>";
        echo "Valore atteso: ".$atteso." (".gettype($atteso).")<br>";
        echo "Valore risultato: ".$result." (".gettype($result).")<br>";
    }else{
        echo "card-fail'>";
        echo "FAIL line: ".$line."<br>";
        echo "Valore atteso: ".$atteso." (".gettype($atteso).")<br>";
        echo "Valore risultato: ".$result." (".gettype($result).")<br>";
    }
    echo "</div>";

    
    // var_dump($result == $atteso);

}


?>

</body>
</html>