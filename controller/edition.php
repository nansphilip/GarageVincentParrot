<?php

// PROCESS

$connect = true;
$type = "admin";
$value = "";

// Sets the page title.
if ($connect == true) {
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

// OUTPUT
App::setCss("main.css");
App::setJs("main.js");
App::getTemplate("edition", $tplVarList);