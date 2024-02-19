<?php

// PROCESS

// Sets the page title.
$title = "Véhicules d'occasion";
App::setTitle($title);

require_once "model/Vehicle.php";
$brandList = Vehicle::getBrandList();
$modelList = Vehicle::getModelList();
$brandModelList = Vehicle::getBrandModelList();
$mileageRange = Vehicle::getMileageRange();
$yearRange = Vehicle::getYearRange();
$priceRange = Vehicle::getPriceRange();

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;

$tplVarList["brandList"] = $brandList;
$tplVarList["modelList"] = $modelList;
$tplVarList["brandModelList"] = $brandModelList;
$tplVarList["mileageRange"] = $mileageRange;
$tplVarList["yearRange"] = $yearRange;
$tplVarList["priceRange"] = $priceRange;

// OUTPUT
App::setJs("common/Ajax.js");
App::setJs("view/vehicle-detail.js");
App::getTemplate("vehicle-detail", $tplVarList);