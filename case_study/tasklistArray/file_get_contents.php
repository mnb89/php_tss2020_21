<?php

$jsonString = file_get_contents('./dataset/TaskList.json');
$jsonArray = json_decode($jsonString, true);


// var_dump($jsonString);

// echo gettype($jsonString);



// print_r($jsonArray);
print_r($jsonArray[15]['expirationDate']);
?>