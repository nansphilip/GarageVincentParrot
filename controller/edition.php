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

require_once('model/User.php');
$employeeList = Admin::getAllEmployee();

require_once('model/Service.php');
$serviceList = Service::getAll();

// Send data and show popup
$validReview = false;
if (array_key_exists("send-review", $_POST)) {

    $validReview = true;

    $fullName = htmlspecialchars($_POST["firstName"]) . " " . htmlspecialchars($_POST["lastName"]);
    $message = htmlspecialchars($_POST["message"]);
    $rating = (int)htmlspecialchars($_POST["rating"]);

    // Insert data into Customer Review table
    $newReview = new CustomerReview(null, $fullName, $message, $rating, 0);
    $newReview->sendAndApproveReview();
}

$validVehicle = false;
if (isset($_POST['addVehicle'])) {
    
    $validVehicle = true;
}

$validSchedule = false;
if (isset($_POST['updateSchedule'])) {
    
    $validSchedule = true;
}

$validService = false;
if (isset($_POST['updateService'])) {
    
    $validService = true;
}

$validInscription = false;
if (isset($_POST['addEmployee'])) {
    
    $validInscription = true;
}

// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;
$tplVarList["userType"] = $userType;

$tplVarList["employeeList"] = $employeeList;
$tplVarList["serviceList"] = $serviceList;
$tplVarList["reviewList"] = $reviewList;

$tplVarList["validReview"] = $validReview;

$tplVarList["validVehicle"] = $validVehicle;
$tplVarList["validService"] = $validService;
$tplVarList["validSchedule"] = $validSchedule;
$tplVarList["validInscription"] = $validInscription;

// OUTPUT
App::setJs('view/edition.js');
App::getTemplate("edition", $tplVarList);
