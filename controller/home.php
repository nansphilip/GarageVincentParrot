<?php

// PROCESS

// Sets page title.
$title = "Accueil";
App::setTitle($title);

// Imports Service class
require_once("model/Service.php");
$serviceList = Service::getAll();

// Imports Vehicle class
require_once("model/Vehicle.php");
$vehicleList = Vehicle::getAll();

// Imports Customer Review class
require_once('model/CustomerReview.php');
$reviewList = CustomerReview::getAllApproved();

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;

$tplVarList["serviceList"] = $serviceList;
$tplVarList["vehicleList"] = $vehicleList;
$tplVarList["reviewList"] = $reviewList;

// OUTPUT
App::getTemplate("home", $tplVarList);
