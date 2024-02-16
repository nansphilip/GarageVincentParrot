<?php

// PROCESS
$connected = $_SESSION['connected'] ?? false;
$userType = $_SESSION['userType'] ?? null;
$value = "";

// Sets the page title.
if ($connected) {
    if ($userType == "ADMIN") {
        $value = " admin";
    } else {
        $value = " employé(e)";
    }
} else {
    header('Location: /index.php?p=login');
    exit();
}

$title = "Tableau de bord" . $value;
App::setTitle($title);

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;

// OUTPUT
App::getTemplate("edition", $tplVarList);
