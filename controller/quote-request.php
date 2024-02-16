<?php

// PROCESS

// Sets the page title.
$title = "Demande de devis";
App::setTitle($title);

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;

// OUTPUT
App::getTemplate("quote-request", $tplVarList);