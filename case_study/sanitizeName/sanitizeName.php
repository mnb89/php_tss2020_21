<?php

function sanitizeName($name){

    // $notagNames = strip_tags($name);
    // il FILTER_SANITIZE_STRING va meglio dello strip_tags perchè più completo
    $notagNames = filter_var($name,FILTER_SANITIZE_STRING);

    $clearNames = preg_replace('/[^a-z A-Z]+/', '', $notagNames);
    $explodeName = explode(' ',$clearNames);
    $correctNames = array_map('correctCase', $explodeName);
    $correctString = implode(' ', $correctNames);

    return $correctString;
}

function correctCase($name){
    // aAa | AAA | aaA ---> aaa
    $nameLowecase = strtolower($name);
    // aaa --> Aaa
    $upcaseName = ucfirst($nameLowecase);
    
    return $upcaseName;
}


// function clearCase($name){
//     $re = '/[^a-z A-Z]+/';
//     $subst = '';
    
//     $result = preg_replace($re, $subst, $name);
    
//     return $result;
// }