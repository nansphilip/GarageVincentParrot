<?php

// PROCESS
$connected = false;

// Sets the page title.
$title = "Se connecter";
App::setTitle($title);

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;
$tplVarList["connected"] = $connected;

// OUTPUT
App::getTemplate("login", $tplVarList);