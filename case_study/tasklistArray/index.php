<?php

// Carico le dipendenze - è tutto quello che mi serve per eseguire le mie operazioni
require "./lib/JSONReader.php";


// MODEL (JSONReader) - parte che gestisce i dati dell'applicazione
// CONTROLLER $tasklist = JSONReader()
$tasklist = JSONReader('./dataset/TaskList.json');












?>


<!-- ------------------------------------------------------------------------------------------------------ -->

<!-- VIEW - parte di visualizzazione / intercettazione azioni utente -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="./asset/style.css">

</head>
<body>
    <form action="">
        <input type="text" name="searchText">

        <button type="submit">CERCA</button>
    </form>

    <ul>
        <?php
        foreach ($tasklist as $key => $task) { ?>

            <?php
            $status = $task['status'];
            $taskName = $task['taskName'];
            ?>
            
            <li class="tasklist-item tasklist-item-<?=$status?>">
                <?=$taskName?> 
                <b><?=$status?></b>
            </li>
        
        <?php } ?>

<!--         
        <li class="tasklist-item tasklist-item-progress">Latte <b>progress</b></li>
        <li class="tasklist-item tasklist-item-done">Uova <b>done</b></li>
        <li class="tasklist-item tasklist-item-todo">Burro <b>todo</b></li> -->

    </ul>

</body>
</html>
