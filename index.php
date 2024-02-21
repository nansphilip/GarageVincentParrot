<?php

/**
 * INDEX & ROUTER
 * 
 * Launches php server
 * php -S localhost:8000 -d error_reporting=E_ALL
 */

$returnJson = false;

try {

    // Initialization
    require_once("includes/App.php");
    require_once("includes/Database.php");
    require_once("includes/Helpers.php");

    // date_default_timezone_set("UTC");

    // Comments this line to switch to production mode
    define("ENVIRONMENT", "PROD");
    // define("ENVIRONMENT", "DEV");

    // ROUTER
    if (array_key_exists("p", $_GET)) {
        // Valid page name
        $page = $_GET["p"];
    } else if (array_key_exists("a", $_GET)) {
        // AJAX requests
        $page = $_GET["a"];
        header('Content-Type: application/json');
        $returnJson = true;
    } else {
        // Invalid page name
        $page = "home";
    }
    
    $controllerPath = "controller/$page.php";

    if (file_exists($controllerPath)) {

        // Launches session
        session_start();

        // Opens the controller
        require_once($controllerPath);
    } else {
        throw new Exception("Error 404: given controller '$page' is not found");
    }

} catch (\Throwable $th) {

    // GLOBAL ERROR MANAGEMENT

    ob_end_clean();

    if ($returnJson) {

        echo json_encode([
            "success" => false,
            "msg" => ENVIRONMENT === "DEV" ? $th->getMessage() : null,
            "data" => null,
        ]);

    } else {
        require_once("controller/error.php");
    }
}
