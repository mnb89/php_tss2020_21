<?php

require "./class/Task_copy.php";
require "./vendor/testTool.php";


$testCases = [
    [
        'date' => '20-02-2021',
        'expectedCount' => 0,
        'description' => '20-02-2021 | ricerca di una data scritta in gg-mm-yyyy non ancora scadute'
    ],
    [
        'date' => '2024-10-02',
        'expectedCount' => 9,
        'description' => '2024-10-02 | ricerca di una data scritta in yyyy-mm-gg con tutte scadute'
    ],
    [
        'date' => '2021-Jul-02',
        'expectedCount' => 2,
        'description' => '2021-Jul-02 | ricerca di una data scritta con il mese a parole con tutte scadute'
    ],
    [
        'date' => 'ciccio',
        'expectedCount' => 0,
        'description' => 'FAIL  ciccio | Il formato della data inserita è sbagliato'
    ],
];


$mockTaskList = array(
    array("id"=>4574,"taskName"=>"task1","status"=>"done","expirationDate"=>"2021-03-01"),
    array("id"=>6727,"taskName"=>"task2","status"=>"todo","expirationDate"=>"2021-03-20"),
    array("id"=>4639,"taskName"=>"task3","status"=>"progress","expirationDate"=>"2021-09-02"),
    array("id"=>5718,"taskName"=>"task4","status"=>"done","expirationDate"=>"2023-09-02"),
    array("id"=>2637,"taskName"=>"task5","status"=>"progress","expirationDate"=>"2021-10-02"),
    array("id"=>5497,"taskName"=>"task6","status"=>"done","expirationDate"=>"2022-09-21"),
    array("id"=>5492,"taskName"=>"task7","status"=>"todo","expirationDate"=>"2021-09-21"),
    array("id"=>6697,"taskName"=>"task8","status"=>"todo","expirationDate"=>"2021-11-13"),
    array("id"=>6695,"taskName"=>"task9","status"=>"todo","expirationDate"=>"2021-11-13")
);

$taskListObj=[];
foreach ($mockTaskList as $taskArray){
    $taskObj = new Task();
    $taskObj->id = $taskArray['id'];
    $taskObj->taskName = $taskArray['taskName'];
    $taskObj->status = $taskArray['status'];
    $taskObj->expirationDate = $taskArray['expirationDate'];

    $taskListObj[] = $taskObj;

}


foreach ($testCases as $testCase){

    echo "\n";
    extract($testCase);
    echo "\n";
    try {
        // print_r($testCase);
        $actual=0;
        foreach ($taskListObj as $task ){
            $datetoday = new DateTime($date);
            $task->isExpired($datetoday) ? "":$actual+=1;
            // print_r($task);
            // echo "\n";
    
            // echo $actual;
        }
        // echo $actual;
        // foreach ($actual as $test){
        //     // if ($test){
    
        //     // }
        // }
    
        assertEquals($expectedCount, $actual, $description);
        echo "\n";
    } catch (\Throwable $th) {
        echo "\t".$description."\n";
    }
}


?>