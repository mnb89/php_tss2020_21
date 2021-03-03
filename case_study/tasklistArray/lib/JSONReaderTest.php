<?php
declare(strict_types=1);

system("clear");
require "./JSONReader.php";
require "../../../vendor/testTools/testTool.php";

echo testHeader(__FILE__);

$dataset = [
    [
        'description'=>'Gestione dell\'errore per file esistente',
        'filepath' => '../dataset/ciccio.json',
        'error' => 'not-exist',
        'errorcode' => 404,
    ],
    [
        'description'=>'Lettura dei dati di un array di 20 elementi',
        'filepath' => '../dataset/TaskList.json',
        'type' => 'array',
        'count' => 20,
    ],
    [
        'description' => 'Gestione file con errori di sintassi',
        'filepath' => '../dataset/TaskList-error.json',
        'error' => 'syntax-error',
        'errorcode' => 123,
    ],
    [
        'description' => 'Lettura di un file con un array vuoto',
        'filepath' => '../dataset/TaskList-zero.json',
        'type' => 'array',
        'count' => 0,
    ],
];


foreach ($dataset as $key => $row) {
    
    echo datasetHeader($key+1, $dataset);

    try{

        $filepath = $row['filepath'];
        $actual = JSONReader($filepath);
        
        if (empty($row['error'])){
            $type = $row['type'];
            assertEquals($type, gettype($actual), 'tipo di dato');
            assertEquals($row['count'], count($actual), 'numero di elemento');
        }else{
            assertEquals($row['error'], null, 'era attesa un eccezione');
            assertEquals($row['errorcode'], null, 'era attesa un eccezione');
        }

    }catch(Exception $e){
        assertEquals($e->getMessage(), $row['error'], 'messaggio di errore');
        assertEquals($e->getCode(), $row['errorcode'], 'codice di errore');
    }

}
