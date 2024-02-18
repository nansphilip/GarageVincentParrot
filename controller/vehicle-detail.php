<?php

// PROCESS

// Sets the page title.
$title = "Véhicules d'occasion";
App::setTitle($title);

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;

// require_once("includes/AjaxVehicle.php");
// require_once("includes/AjaxOption.php");

// OUTPUT
App::setJs("common/Ajax.js");
App::setJs("view/vehicle-detail.js");
App::getTemplate("vehicle-detail", $tplVarList);