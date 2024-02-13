<?php

/**
 * INDEX & ROUTER
 * 
 * Launches php server
 * php -S localhost:8000 -d error_reporting=E_ALL
 */

try {

    // INITIALIZE
    require_once("includes/App.php");
    require_once("includes/helpers.php");

    // TODO: add this config into a non-versioned config file
    define("ENVIRONMENT", "DEV");
    // define("ENVIRONMENT", "PROD");


    // ROUTER
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
