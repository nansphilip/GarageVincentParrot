<?php

// PROCESS
$connected = false;

// Sets the page title.
$title = "Véhicules d'occasion";
App::setTitle($title);

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;
$tplVarList["connected"] = $connected;

// OUTPUT
App::setCss("main.css");
App::setJs("main.js");
App::getTemplate("vehicle-detail", $tplVarList);