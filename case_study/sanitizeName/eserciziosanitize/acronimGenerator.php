<?php

function acronimGenerator($name){

    $explodeName = explode(' ',$name);
    $correctNames = array_map('correctCase', $explodeName);
    $dotNames = preg_replace('/[a-z]+/m', '.', $correctNames);
    $correctString = implode('', $dotNames);

return $correctString;
}

function correctCase($name){
    // aAa | AAA | aaA ---> aaa
    $nameLowecase = strtolower($name);
    // aaa --> Aaa
    $upcaseName = ucfirst($nameLowecase);
    
    return $upcaseName;

}