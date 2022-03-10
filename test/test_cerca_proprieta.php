<?php
include "../include/funzioni.php";

/**
  [codice] => 004001
    [nome] => Acceglio
    [nomeStraniero] => 
    [codiceCatastale] => A016
    [cap] => 12021
    [prefisso] => 0171
    [provincia] => 004
    
 */
$comune = [
    'codice' => '004001',
    'nome' => 'Torino',
    'cap' => '10100',    
];

 if(cercaInArray($comune,'nome','Torino') === true){
     echo "test ok 1. nome trovato<br>";
 };
 
 if(cercaInArray($comune,'codice','004001') === true){
    echo "test ok 2. codice trovato<br>";
 };

 if(cercaInArray($comune,'cap','10100') === true){
    echo "test ok 3. cap trovato<br>"; 
 }
 