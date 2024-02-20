<?php

// PROCESS

// Sets the page meta
$title = "Avis clients";
App::setTitle($title);
App::setDescription("Découvrez les avis de nos clients sur nos services.");

// Imports Customer Review class
require_once('model/CustomerReview.php');
$reviewList = CustomerReview::getAllApproved();

// Send data and show popup
$sendConfirmation = false;
if (array_key_exists("send-review", $_POST)) {

    $sendConfirmation = true;

    $fullName = htmlspecialchars($_POST["firstName"]) . " " . htmlspecialchars($_POST["lastName"]);
    $message = htmlspecialchars($_POST["message"]);
    $rating = (int)htmlspecialchars($_POST["rating"]);

    // Insert data into Customer Review table
    $newReview = new CustomerReview(null, $fullName, $message, $rating, 0);
    $newReview->sendReview();
}

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;
$tplVarList["reviewList"] = $reviewList;
$tplVarList["sendConfirmation"] = $sendConfirmation;

// OUTPUT
App::setJs("view/review.js");
App::getTemplate("review", $tplVarList);