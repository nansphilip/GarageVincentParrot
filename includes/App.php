<?php

class App {
    public static $pageTitle;
    public static $staticFileList = [];

    // 
    public static function fileExists($fileDir) {
        return file_exists($fileDir);
    }

    // Sets the page title
    public static function setTitle($title) {
        self::$pageTitle = $title;
    }

    // Requires a view template
    public static function getTemplate($template, $tplVarList = []) {

        foreach ($tplVarList as $variable => $value) {
            ${$variable} = $value;
        }

        ob_start();

        require_once("view/$template.php");

        ob_end_flush();
    }

    // 
    public static function setJs($fileName) {
        self::$staticFileList["js"][] = $fileName;
    }

    public static function setCss($fileName) {
        self::$staticFileList["css"][] = $fileName;
    }

    // 
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

    // 
    private static function getStatic($type, $fileName) {
        $fileDir = "static/" . strtolower($type) . "/$fileName";
        if (App::fileExists($fileDir)) {
            return $fileDir;
        } else {
            throw new Exception(strtoupper($type) . " file does not exists: '$fileDir'");
        }
    }
}
