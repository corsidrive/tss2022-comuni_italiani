<?php
require "./include/funzioni.php";
require "./model/ComuniModel.php";
require "./view/ElencoComuniView.php";

// var_dump(isset($_GET));
// var_dump($_GET);
// print_r(count($_GET));

$comuniModel   =  new ComuniModel();
if(count($_GET) > 0  && isset($_GET['nome_comune'])){

    $risultato = $comuniModel->findByName($_GET['nome_comune']);
    
    $w = new ElencoComuniView($risultato);
    $w->render();
}else{
    //echo "aaaa";
    header('Location: ./ricerca-controller.php');
}
