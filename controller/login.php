<?php

// PROCESS

// Sets the page title.
$title = "Se connecter";
App::setTitle($title);

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;

// OUTPUT
App::setCss("main.css");
App::setJs("main.js");
App::getTemplate("login", $tplVarList);