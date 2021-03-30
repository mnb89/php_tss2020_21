<?php

/**
 * Apre un file JSON e lo converte in array associativa
 * 
 * @var string $filepath percorso del file da leggere
 * @return array $res array associativa corrispondente
 */
function JSONReader(string $filepath):?array {

    if(file_exists($filepath)){

        $fileString = file_get_contents($filepath);
        $res = json_decode($fileString, true);
        $code = json_last_error();

        if ( $code != JSON_ERROR_NONE ){
            throw new Exception('syntax-error', 123);
        }

    }else{

        throw new Exception('not-exist', 404);

    }

    return $res;
};
