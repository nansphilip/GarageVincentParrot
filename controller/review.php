<?php

// PROCESS

// Sets the page title.
$title = "Avis clients";
App::setTitle($title);

// Imports Customer Review class
require_once('model/CustomerReview.php');
$reviewList = CustomerReview::getAllApproved();

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;
$tplVarList["reviewList"] = $reviewList;

// OUTPUT
App::getTemplate("review", $tplVarList);