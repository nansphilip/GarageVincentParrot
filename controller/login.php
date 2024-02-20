<?php

// Redirects to the dashboard if already connected
$alreadyConnected = $_SESSION['connected'] ?? false;
if ($alreadyConnected) {
    header('Location: /index.php?p=edition');
    exit();
}

// PROCESS

// Sets the page meta
$title = "Se connecter";
App::setTitle($title);

// Login form
$connected;
$username;
$password;

// Connection after form submitted
if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    //Imports
    require_once("model/User.php");
    $connected = User::login($username, $password);

    // Connection approved
    if ($connected) {

        // Redirects to the dashboard
        header('Location: /index.php?p=edition');
        exit();
    }
}

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["connectionFailed"] = false;

// Connection denied/failed
if (isset($connected) && !$connected) {
    $tplVarList["connectionFailed"] = true;
}

// OUTPUT
App::getTemplate("login", $tplVarList);
