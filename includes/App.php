<?php

/**
 * Class App serves as a utility class for handling common web application tasks such as managing page titles, loading template files, and handling static resources like JavaScript, CSS, images, and vendor files.
 *
 * Features:
 * - File Existence: Checks if a given file exists on the server, enhancing file handling reliability.
 * - Page Title Management: Allows setting and retrieving the title of the current web page, aiding in dynamic title updates.
 * - Template Loading: Facilitates loading PHP template files with the ability to pass variables to the templates, promoting template reusability and separation of concerns.
 * - Static Files Management: Manages lists of static files (JS, CSS, images, vendor files) to be included in web pages, simplifying the inclusion and organization of static resources.
 * - Path Retrieval: Provides methods to construct and retrieve the paths of static files if they exist, throwing an exception if a file is not found, which aids in debugging and error handling.
 * 
 * 
 * Usage exemple:
 * 
 * - How to include App class ?
 * 
 * -> in the router file (e.g. index.php):
 * ```php
 * require_once("includes/App.php");
 * ```
 * 
 * - How to include a CSS and JS files ?
 * 
 * -> in a controller file (e.g. controller/home.php):
 * ```php
 * App::setCss("main.css");
 * App::setJs("main.js");
 * ```
 * 
 * -> in a view file (e.g. view/home.php) :
 * ```php
 * <?php
 * if (isset(App::$staticFileList["css"])) {
 *     foreach (App::$staticFileList["css"] as $fileName) {
 *         echo '<link rel="stylesheet" href="' . App::getCss($fileName) . '">';
 *     }
 * }
 * if (isset(App::$staticFileList["js"])) {
 *     foreach (App::$staticFileList["js"] as $fileName) {
 *         echo '<script src="' . App::getJs($fileName) . '"></script>';
 *     }
 * } ?>
 * ```
 * 
 * - How to include a template file and includes variables in its scope ?
 * 
 * -> in a controller file (e.g. controller/home.php):
 * ```php
 * $tplVarList = [];
 * $tplVarList["title"] = "Accueil";
 * App::getTemplate("home", $tplVarList);
 * ```
 * 
 * -> in a template file (e.g. view/home.php):
 * ```php
 * <main>
 *    <h1><?= $title ?></h1>
 * </main>
 * ```
 */
class App {
    public static $pageTitle;
    public static $staticFileList = [];

    // Checks if a given file exists in the file system
    public static function fileExists($fileDir) {
        return file_exists($fileDir);
    }

    // Sets the title for the current web page
    public static function setTitle($title) {
        self::$pageTitle = $title;
    }

    // Loads a PHP template file and extracts variables for use within the template
    // TODO : add a catching system for HTML errors in PHP files
    public static function getTemplate($template, $tplVarList = []) {

        foreach ($tplVarList as $variable => $value) {
            ${$variable} = $value;
        }

        ob_start();

        require_once("view/$template.php");

        ob_end_flush();
    }

    // Adds a JS, CSS, img or vendors file to the list of static files to be included in the web page
    public static function setJs($fileName) {
        self::$staticFileList["js"][] = $fileName;
    }

    public static function setCss($fileName) {
        self::$staticFileList["css"][] = $fileName;
    }

    // Retrieves the path for a specified JS, CSS, img or vendors file if it exists
    public static function getJs($fileName) {
        return self::getStatic("js", $fileName);
    }

    public static function getImg($fileName) {
        return self::getStatic("img", $fileName);
    }

    public static function getCss($fileName) {
        return self::getStatic("css", $fileName);
    }

    public static function getVendor($fileName) {
        return self::getStatic("vendors", $fileName);
    }

    // A helper function that constructs the file path, checks for the file's existence, and returns the path if the file exists
    private static function getStatic($type, $fileName) {
        $fileDir = "static/" . strtolower($type) . "/$fileName";
        if (App::fileExists($fileDir)) {
            return $fileDir;
        } else {
            throw new Exception(strtoupper($type) . " file does not exists: '$fileDir'");
        }
    }
}
