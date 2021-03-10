<?php

// Carico le dipendenze - è tutto quello che mi serve per eseguire le mie operazioni
require "./lib/JSONReader.php";
require "./lib/searchFunctions.php";



// MODEL (JSONReader) - parte che gestisce i dati dell'applicazione
// CONTROLLER $tasklist = JSONReader()
$taskList = JSONReader('./dataset/TaskList.json');

// versione con if
if(isset($_GET['searchText']) && trim($_GET['searchText'])!==''){
    $searchText=trim(filter_var($_GET['searchText'], FILTER_SANITIZE_STRING));

    // var_dump($searchText, $_GET['searchText']);
    // die();

    $taskList = array_filter($taskList, searchTextDichiarative($searchText));
    // $taskList = searchTextImperative($searchText, $taskList);
}else{
    $searchText='';
}





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
    <form action="index.php">
        <input type="text" name="searchText" value="<?=$searchText?>">

        <button type="submit">CERCA</button>
    </form>

    <ul>
        <?php
        foreach ($taskList as $key => $task) { ?>

            <?php
            $status = $task['status'];
            $taskName = $task['taskName'];
            ?>
            
            <li class="tasklist-item tasklist-item-<?=$status?>">
                <?=$taskName?> 
                <b><?=$status?></b>
            </li>
        
        <?php } ?>



    </ul>

</body>
</html>
