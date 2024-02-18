<?php

$results = [];
require_once("Database.php");

if ($_POST['type'] === '#brand') {
    $data = Database::query("SELECT DISTINCT brand FROM vehicle ORDER BY brand ASC;");

    foreach ($data as $value) {
        $results[] = $value["brand"];
    }
}
else if ($_POST['type'] === '#model') {
    $data = Database::query("SELECT DISTINCT model FROM vehicle ORDER BY model ASC;");

    foreach ($data as $value) {
        $results[] = $value["model"];
    }
}
else if ($_POST['type'] === '#mileage-min' || $_POST['type'] === '#mileage-max') {
    $results = Database::query("SELECT MIN(mileage) AS min, MAX(mileage) AS max FROM vehicle;");
}
else if ($_POST['type'] === '#year-min' || $_POST['type'] === '#year-max') {
    $results = Database::query("SELECT MIN(entry_year) AS min, MAX(entry_year) AS max FROM vehicle;");
}
else if ($_POST['type'] === '#price-min' || $_POST['type'] === '#price-max') {
    $results = Database::query("SELECT MIN(price) AS min, MAX(price) AS max FROM vehicle;");
}

header('Content-Type: application/json');
echo json_encode($results);

