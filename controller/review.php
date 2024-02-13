<?php

// PROCESS

// Sets the page title.
$title = "Avis clients";
App::setTitle($title);

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;

// OUTPUT
App::setCss("main.css");
App::setJs("main.js");
App::getTemplate("review", $tplVarList);