<?php

// Verify if the user is connected, else redirect to the login page
$connected = $_SESSION['connected'] ?? false;
$userType = $_SESSION['userType'] ?? null;

if ($connected == false) {
    header('Location: /index.php?p=login');
    exit();
}

// PROCESS

// Sets the page meta
$title = "Tableau de bord";
App::setTitle($title);

// Imports Customer Review class
require_once('model/CustomerReview.php');
$reviewList = CustomerReview::getAllPending();

// Send data and show popup
$sendConfirmation = false;
if (array_key_exists("send-review", $_POST)) {

    $sendConfirmation = true;

    $fullName = htmlspecialchars($_POST["firstName"]) . " " . htmlspecialchars($_POST["lastName"]);
    $message = htmlspecialchars($_POST["message"]);
    $rating = (int)htmlspecialchars($_POST["rating"]);

    // Insert data into Customer Review table
    $newReview = new CustomerReview(null, $fullName, $message, $rating, 0);
    $newReview->sendAndApproveReview();
}

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;
$tplVarList["userType"] = $userType;

$tplVarList["reviewList"] = $reviewList;
$tplVarList["sendConfirmation"] = $sendConfirmation;

// OUTPUT
App::setJs('view/edition.js');
App::getTemplate("edition", $tplVarList);
