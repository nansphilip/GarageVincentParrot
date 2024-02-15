<?php

/**
 * INDEX & ROUTER
 * 
 * Launches php server
 * php -S localhost:8000 -d error_reporting=E_ALL
 */
try {

    // Initialization
    require_once("includes/App.php");
    require_once("includes/Database.php");
    require_once("includes/Helpers.php");

    // date_default_timezone_set("UTC");

    // Comments this line to switch to production mode
    define("ENVIRONMENT", "DEV");

    // Router
    if (array_key_exists("p", $_GET)) {
        $page = $_GET["p"];
    } else {
        $page = "home";
    }
    
    $controllerPath = "controller/$page.php";

    if (file_exists($controllerPath)) {
        require_once($controllerPath);
    } else {
        throw new Exception("Error 404: given controller '$page' is not found");
    }

} catch (\Throwable $th) {

    // GLOBAL ERROR MANAGEMENT
    ob_end_clean();

    require_once("controller/error.php");
}

