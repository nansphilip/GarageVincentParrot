<?php

// PROCESS

// Sets the page title.
$title = "Véhicules d'occasion";
App::setTitle($title);

// require_once("model/Vehicle.php");
// $vehicle = Vehicle::get($_GET["id"]);


// VARIABLES FOR VIEW
$tplVarList = [];
$tplVarList["title"] = $title;

// OUTPUT
App::setCss("main.css");
App::setJs("main.js");
App::getTemplate("vehicle-detail", $tplVarList);