<?php

// PROCESS

// Sets the page title.
$title = "Demande de devis";
App::setTitle($title);

// Import vehicle name if needed
$vehicle;
if (array_key_exists("id", $_GET)) {
    $idVehicle = $_GET["id"];

    // Imports Vehicle class
    require_once("model/Vehicle.php");
    $vehicle = Vehicle::get($idVehicle);
}

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;

if (isset($vehicle)) {
    $tplVarList["vehicle"] = $vehicle;
}

// OUTPUT




App::setJs("common/Helpers.js");
App::setJs("view/quote-request.js");
App::getTemplate("quote-request", $tplVarList);
