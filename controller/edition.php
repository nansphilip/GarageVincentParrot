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
$validReview = false;
if (array_key_exists("send-review", $_POST)) {
    $validReview = true;
    $fullName = htmlspecialchars($_POST["firstName"]) . " " . htmlspecialchars($_POST["lastName"]);
    $message = htmlspecialchars($_POST["message"]);
    $rating = (int)htmlspecialchars($_POST["rating"]);
    $newReview = new CustomerReview(null, $fullName, $message, $rating, 0);
    $newReview->sendAndApproveReview();
}


$validVehicle = false;
require_once('model/Vehicle.php');
if (isset($_POST['addVehicle'])) {
    $brand = htmlspecialchars($_POST['brand']);
    $model = htmlspecialchars($_POST['model']);
    $entryYear = (int)htmlspecialchars($_POST['year']);
    $mileage = (int)htmlspecialchars($_POST['mileage']);
    $price = (int)htmlspecialchars($_POST['price']);

    // Todo : verify if this path is already used

    $pictureFileTmpName = $_FILES['picture']['tmp_name'];
    $newFileName = strtolower($brand) . "_" . strtolower($model) . ".webp";
    $targetDirectory = "static/img/vehicle/" . $newFileName;

    move_uploaded_file($pictureFileTmpName, $targetDirectory);

    Vehicle::addVehicle($brand, $model, $entryYear, $mileage, $price, $newFileName);

    $validVehicle = true;
}


// Update schedule
$validSchedule = false;
require_once('model/Schedule.php');
if (isset($_POST['updateSchedule'])) {
    $updateList = [];
    if ($_POST['monday'] != null) $updateList['Lundi'] = htmlspecialchars($_POST['monday']);
    if ($_POST['tuesday'] != null) $updateList['Mardi'] = htmlspecialchars($_POST['tuesday']);
    if ($_POST['wednesday'] != null) $updateList['Mercredi'] = htmlspecialchars($_POST['wednesday']);
    if ($_POST['thursday'] != null) $updateList['Jeudi'] = htmlspecialchars($_POST['thursday']);
    if ($_POST['friday'] != null) $updateList['Vendredi'] = htmlspecialchars($_POST['friday']);
    if ($_POST['saturday'] != null) $updateList['Samedi'] = htmlspecialchars($_POST['saturday']);
    if ($_POST['sunday'] != null) $updateList['Dimanche'] = htmlspecialchars($_POST['sunday']);
    Schedule::updateSchedules($updateList);
    $validSchedule = true;
}
// Get schedule
$scheduleList = Schedule::getAll();


// Insert service
$validService = false;
require_once('model/Service.php');
if (isset($_POST['addService'])) {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $price = (int)htmlspecialchars($_POST['price']);
    Service::addServices($title, $description, $price);
    $validService = true;
}
// Get service
$serviceList = Service::getAll();


// Insert employee
$validInscription = false;
$alreadyUsed = false;
require_once('model/User.php');
if (isset($_POST['addEmployee'])) {
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $alreadyUsed = Admin::addEmployee($email, $username, $password);

    if ($alreadyUsed == false) $validInscription = true;
}
// Get employee
$employeeList = Admin::getAllEmployee();


// VARIABLES
$tplVarList = [];
$tplVarList["title"] = $title;
$tplVarList["page"] = $page;
$tplVarList["userType"] = $userType;

$tplVarList["employeeList"] = $employeeList;
$tplVarList["serviceList"] = $serviceList;
$tplVarList["reviewList"] = $reviewList;
$tplVarList["scheduleList"] = $scheduleList;

$tplVarList["validReview"] = $validReview;
$tplVarList["validVehicle"] = $validVehicle;
$tplVarList["validService"] = $validService;
$tplVarList["validSchedule"] = $validSchedule;
$tplVarList["validInscription"] = $validInscription;
$tplVarList["alreadyUsed"] = $alreadyUsed;

// OUTPUT
App::setJs('view/edition.js');
App::getTemplate("edition", $tplVarList);
