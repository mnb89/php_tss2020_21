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

    $taskList = array_filter($taskList, searchTextDichiarative($searchText));
    
    // $taskList = searchTextImperative($searchText, $taskList);
    if(isset($_GET['status']) && ($_GET['status'])!=='all'){
        $status=($_GET['status']);
    
        
        $taskList= array_filter($taskList, searchStatus($status));
        
    }else{
        
        $status='all';
    }
}else{

    $searchText='';

    if(isset($_GET['status']) && ($_GET['status'])!=='all'){
        $status=($_GET['status']);
    
        
        $taskList= array_filter($taskList, searchStatus($status));
        
    }else{
        
        $status='all';
    }
}





// if(isset($_GET['status']) && ($_GET['status'])!=='all'){
//     $status=($_GET['status']);

    
//     $taskList= array_filter($taskList, searchStatus($status));
    
// }else{
    
//     $status='all';
// }

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

        <div id="status">
            <input type="radio" name="status" id="progress" value="progress" <?php if (isset($status) && $status== "progress") echo "checked";?>>
            <label for="progress">PROGRESS</label> 
            <input type="radio" name="status" id="done" value="done" <?php if (isset($status)&& $status== "done") echo "checked";?>> 
            <label for="done">DONE</label> 
            <input type="radio" name="status" id="todo" value="todo" <?php if (isset($status)&& $status== "todo") echo "checked";?>>
            <label for="todo">TO DO</label> 
            <input type="radio" name="status" id="all" value="all" <?php if (isset($status)&& $status== "all") echo "checked";?>>
            <label for="all">ALL</label> 
        </div>

    </form>



    <p><?= "Risultato: "?><b><?=count($taskList)?></b><?=" task per: "?><b><?=$searchText?></b><?=" filtro: "?><b><?=$status?></b></p>


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
