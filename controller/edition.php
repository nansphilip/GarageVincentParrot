<?php

// PROCESS
$connected = $_SESSION['connected'] ?? false;
$userType = $_SESSION['userType'] ?? null;
$value = "";

// Verify if the user is connected, else redirect to the login page
if ($connected == false) {
    header('Location: /index.php?p=login');
    exit();
}

$title = "Tableau de bord";
App::setTitle($title);

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;
$tplVarList["userType"] = $userType;

// OUTPUT
App::getTemplate("edition", $tplVarList);
