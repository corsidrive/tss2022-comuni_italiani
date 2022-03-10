<?php
include "../include/funzioni.php";
if(cercaComune('Torino','Roma') === false){

    echo "Test ok 1 non trovato<br>";
};

if(cercaComune('torino','Torino') === true){
    echo "Test ok 2 no Case sensitive<br>";
}

if(cercaComune('to','Torino') === true){
    echo "Test ok 3<br>";
}

if(cercaComune('torinO','Torino') === true){
    echo "Test ok 4 <br>";
}

if(cercaComune('torin0','Torino') === false){
    echo "Test ok 4.1 <br>";
}

if(cercaComune('Torino    ','Torino') === true){
    echo "Test ok 5 <br>";
}

if(cercaComune('    Torino    ','Torino') === true){
    echo "Test ok 6<br>";
}
   

// if(pulisciHTML('<h1>ciao') === 'ciao') {
//     echo "Test ok";
// }

