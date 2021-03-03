<?php

function sanitizeName($name){

    // $nofirstSpace = preg_replace('/^[ ]+/m','', $name);
    // $nolastSpace = preg_replace('/[ ]+$/','', $nofirstSpace);
    // $notagNames = filter_var($nolastSpace,FILTER_SANITIZE_STRING);
    // $clearNames = preg_replace('/[^a-z .A-Z]+/', '', $notagNames);
    // $explodeName = explode(' ',$clearNames);
    // $correctNames = array_map('correctCase', $explodeName);
    // $correctString = implode(' ', $correctNames);
    // $nodoubleSpace = preg_replace('/[ ]+/',' ', $correctString);
    $nojsNames = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $name);
    $notagNames = filter_var($nojsNames,FILTER_SANITIZE_STRING);
    $clearNames = preg_replace('/[^a-z .A-Z]+/', '', $notagNames);
    $explodeName = explode(' ',$clearNames);
    $correctNames = array_map('correctCase', $explodeName);
    $correctString = implode(' ', $correctNames);
    $nodoubleSpace = preg_replace('/[ ]+/',' ', $correctString);
    // $nofirstSpace = preg_replace('/^[ ]+/m','', $nodoubleSpace);
    // $nolastSpace = preg_replace('/[ ]+$/','', $nofirstSpace);
    $nofirstlastSpace =trim($nodoubleSpace);
    

    return $nofirstlastSpace;
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