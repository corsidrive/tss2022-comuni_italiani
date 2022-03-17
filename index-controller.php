<?php
require "./model/ComuniModel.php";
require "./view/ElencoComuniView.php";

// Model chiede i dati
$comuniModel = new ComuniModel();
$comuni = $comuniModel->all();

$view = new ElencoComuniView($comuni);
$view->render();