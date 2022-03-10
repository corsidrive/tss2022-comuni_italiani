<?php

function cerca($cerca,$confronta)
{
    if(trim($cerca) === ""){
        return false;
    }
    $cerca = trim(strtolower($cerca));
    $confronta = trim(strtolower($confronta));

    //        false === 0 --> false 
    //        false == 0  --> true 
    $result = strpos($confronta,$cerca) === 0;

    return $result;
}


function cercaInArray(array $array,string $key,string $cerca){
        // $comune['nome'] == $array[$key];
        // $comune['codice']
        // $comune['cap']
        $confronta = $array[$key];
        $result = cerca($cerca,$confronta);
        return $result;
}
