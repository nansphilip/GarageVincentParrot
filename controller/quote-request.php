<?php

// PROCESS

// Sets the page meta
$title = "Demande de devis";
App::setTitle($title);
App::setDescription("Demandez un devis pour l'entretien de votre véhicule.");

require_once('model/Schedule.php');
$scheduleList = Schedule::getAll();

// Import vehicle name if needed
$vehicle;
if (array_key_exists("vehicle", $_GET)) {
    $idVehicle = $_GET["vehicle"];

    // Imports Vehicle class
    require_once("model/Vehicle.php");
    $vehicle = Vehicle::get($idVehicle);
}

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;
$tplVarList["scheduleList"] = $scheduleList;

if (isset($vehicle)) {
    $tplVarList["vehicle"] = $vehicle;
}

if (isset($_POST['quote-request'])) {
    $tplVarList["popup"] = true;
}

// OUTPUT
App::setJs("common/Helpers.js");
App::setJs("view/quote-request.js");
App::getTemplate("quote-request", $tplVarList);
