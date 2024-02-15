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
App::getTemplate("vehicle-detail", $tplVarList);