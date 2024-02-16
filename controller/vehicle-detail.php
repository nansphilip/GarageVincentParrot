<?php

// PROCESS

// Sets the page title.
$title = "Véhicules d'occasion";
App::setTitle($title);

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;

// OUTPUT
App::getTemplate("vehicle-detail", $tplVarList);