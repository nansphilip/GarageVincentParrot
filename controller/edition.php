<?php

// PROCESS
$connected = true;
$type = "admin";
$value = "";

// Sets the page title.
if ($connected == true) {
    if ($type == "admin") {
        $value = " administrateur";
    }
    if ($type == "user") {
        $value = " employé(e)";
    }
}

$title = "Tableau de bord" . $value;
App::setTitle($title);

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;
$tplVarList["connected"] = $connected;

// OUTPUT
App::getTemplate("edition", $tplVarList);