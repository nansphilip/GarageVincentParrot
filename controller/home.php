<?php

// PROCESS

// Sets the page title.
$title = "Accueil";
App::setTitle($title);

// VARIABLES FOR VIEW
$tplVarList = [];
$tplVarList["title"] = $title;

// OUTPUT
App::setCss("home-grid.css");
App::setCss("main.css");
App::setJs("main.js");
App::getTemplate("home", $tplVarList);
