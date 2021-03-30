<?php

require "./class/Task.php";
require "./vendor/testTool.php";


$dataset =[
    ['2021-03-23',true,'task scaduta 23'],
    ['2021-03-24',true,'task scaduta 24'],
    ['2021-03-25',true,'task scaduta 25'],
    ['2021-03-26',true,'task scaduta 26'],
    ['2021-03-27',true,'task scaduta 27'],
    ['2021-03-28',true,'task scaduta 28'],
    ['2021-03-29',true,'task scaduta 29'],
    ['2021-03-30',false,'task scade oggi'],
    ['2021-04-01',false,'task scade domani'],
    ['2021-07-10',false,'task scade a luglio'],


];

foreach ($dataset as $testCase){
    list($inputDate,$expected,$description) = $testCase;

    $task = new Task();
    $task->taskName = 'ciccio';
    $task->expirationDate = $inputDate;
    $task->status = 'done';

    assertEquals($expected ,$task->isExpired(),$description);

}





