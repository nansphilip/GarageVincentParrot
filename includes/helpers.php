<?php

// Verifies type before inserting into the database
function dbFormatInt($value) {
    return is_int($value) ? $value : null;
}

function dbFormatFloat($value) {
    return is_float($value) ? $value : null;
}

function dbFormatString($value) {
    return is_string($value) && trim($value) ? trim($value) : null;
}

function dbFormatBoolean($value) {
    return is_bool($value) || in_array($value, [0, 1]) ? boolval($value) : null;
}

// Displays errors
function dd($data, $die = true) {
    $debug = debug_backtrace();
    echo "<pre style='margin-left: 0.5rem; margin-bottom: 0.5rem;'>";
    echo "<b>" . gettype($data) . "</b> | line " . $debug[0]["line"] . " | <span style='color: #0070c3; font-weight: bold;'>" . $debug[0]["file"] . "</span>";
    echo "</pre>";
    // echo "<br>";
    echo "<pre style='display: inline-block; margin: 0; padding: 0.5rem; background-color: lightgrey;'>";
    print_r($data);
    echo "</pre>";
    if ($die) die;
}
