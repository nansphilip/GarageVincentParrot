<?php

// PROCESS

// Sets the page title.
$title = "Véhicules d'occasion";
App::setTitle($title);

// Imports Vehicle class
require_once("model/Vehicle.php");
$vehicleList = Vehicle::getAll();
$vehicleBrandList = Vehicle::getBrandList();
$vehicleModelList = Vehicle::getModelList();
$vehicleBrandModelList = Vehicle::getBrandModelList();
$vehiclePriceRange = Vehicle::getPriceRange();
$vehicleYearRange = Vehicle::getYearRange();
$vehicleMileageRange = Vehicle::getMileageRange();

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;

$tplVarList["vehicleList"] = $vehicleList;
$tplVarList["vehicleBrandList"] = $vehicleBrandList;
$tplVarList["vehicleModelList"] = $vehicleModelList;
$tplVarList["vehicleBrandModelList"] = $vehicleBrandModelList;
$tplVarList["vehiclePriceRange"] = $vehiclePriceRange;
$tplVarList["vehicleYearRange"] = $vehicleYearRange;
$tplVarList["vehicleMileageRange"] = $vehicleMileageRange;

// OUTPUT
App::setJs("view/vehicle-detail.js");
App::getTemplate("vehicle-detail", $tplVarList);