<?php

// PROCESS

// Sets page title.
$title = "Accueil";
App::setTitle($title);
App::setDescription("Bienvenue au Garage Vincent Parrot, votre concessionnaire automobile à Toulouse. Découvrez notre sélection de véhicules d'occasion et nos services de qualité.");

// Imports Service class and gets data
require_once("model/Service.php");
$serviceList = Service::getAll();

// Imports Vehicle class and gets data
require_once("model/Vehicle.php");
$vehicleList = Vehicle::getAll();

// Imports Customer Review class and gets data
require_once('model/CustomerReview.php');
$reviewList = CustomerReview::getAllApproved();

require_once('model/Schedule.php');
$scheduleList = Schedule::getAll();

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;

$tplVarList["serviceList"] = $serviceList;
$tplVarList["vehicleList"] = $vehicleList;
$tplVarList["reviewList"] = $reviewList;
$tplVarList["scheduleList"] = $scheduleList;

// OUTPUT
App::getTemplate("home", $tplVarList);
