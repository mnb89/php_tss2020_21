<?php

$nome = "Mirella";

//  single quote (non interpreta nulla e passa tutto come stringa)

echo 'Ciao mi chiamo $nome \n';
echo "\n"; // Il simbolo che rispecchia l'invio per cambiare riga.


// double quote (interpretano le variabili e i caratteri speciali)

echo "Ciao mi chiamo $nome \n";
echo "\t $nome ha detto: \"Dammi 5 \$ \" \n";

echo "$nome è composto da ".strlen($nome).' lettere';
?>