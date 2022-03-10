<?php
include "../include/funzioni.php";
if(cerca('Torino','Roma') === false){

    echo "Test ok 1 non trovato<br>";
};

if(cerca('torino','Torino') === true){
    echo "Test ok 2 no Case sensitive<br>";
}

if(cerca('to','Torino') === true){
    echo "Test ok 3<br>";
}

if(cerca('torinO','Torino') === true){
    echo "Test ok 4 <br>";
}

if(cerca('torin0','Torino') === false){
    echo "Test ok 4.1 <br>";
}

if(cerca('Torino    ','Torino') === true){
    echo "Test ok 5 <br>";
}

if(cerca('    Torino    ','Torino') === true){
    echo "Test ok 6<br>";
}
   

// if(pulisciHTML('<h1>ciao') === 'ciao') {
//     echo "Test ok";
// }

