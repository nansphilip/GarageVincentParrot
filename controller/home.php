<?php

// PROCESS
$connected = false;

// Sets the page title.
$title = "Accueil";
App::setTitle($title);

// Imports the Service class
require_once("model/Service.php");
$serviceList = Service::getAll();

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;
$tplVarList["connected"] = $connected;
$tplVarList["serviceList"] = $serviceList;

// OUTPUT
App::setCss("home-grid.css");
App::setCss("main.css");
App::setJs("main.js");
App::setJs("home-open-close.js");
App::getTemplate("home", $tplVarList);
