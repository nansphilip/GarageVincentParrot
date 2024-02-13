<?php

// PROCESS

// Sets the page title.
$title = "Demande de devis";
App::setTitle($title);

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;

// OUTPUT
App::setCss("main.css");
App::setJs("main.js");
App::getTemplate("quote-request", $tplVarList);