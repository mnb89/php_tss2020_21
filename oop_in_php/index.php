<?php
require "./vendor/JSONReader.php";
require "./class/Task.php";

$taskList = JSONReader('./dataset/TaskList.json');

// print_r($taskList);

$taskListObj=[];
foreach ($taskList as $taskArray){
    $taskObj = new Task();
    $taskObj->id = $taskArray['id'];
    $taskObj->taskName = $taskArray['taskName'];
    $taskObj->status = $taskArray['status'];
    $taskObj->expirationDate = $taskArray['expirationDate'];

    $taskListObj[] = $taskObj;

}

// print_r($taskListObj);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Tasklist a oggetti</title>
</head>
<body>
    
<table>

    <tr>
        <th>Nome attività</th>
        <th>SCADUTA?</th>    
    </tr>
    <?php foreach($taskListObj as $task){?>
        <tr>
            <td><?= $task->taskName; ?></td>
            <td><?= $task->isExpired() ? "SI" : "NO" ?></td>
        </tr>
    <?php } ?>

</table>




</body>
</html>