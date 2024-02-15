<?php

// PROCESS
$connected = false;

// Sets the page title.
$title = "Accueil";
App::setTitle($title);

// Imports the Service class
require_once("model/Service.php");
$serviceList = Service::getAll();

// Imports the Vehicle class
require_once("model/Vehicle.php");
$vehicleList = Vehicle::getAll();

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;
$tplVarList["connected"] = $connected;
$tplVarList["serviceList"] = $serviceList;
$tplVarList["vehicleList"] = $vehicleList;

// OUTPUT
App::getTemplate("home", $tplVarList);
