<?php

// PROCESS

// Sets the page title.
$title = "Avis clients";
App::setTitle($title);

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;

// OUTPUT
App::getTemplate("review", $tplVarList);