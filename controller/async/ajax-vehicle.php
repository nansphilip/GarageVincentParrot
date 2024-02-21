<?php

$success = true;
$msg = null;
$data = null;

// PROCESS

// Fetches the data from the form sent by the ajax client request
$formSelect = [
    'brand' => $_POST['brand'] == "" ? null : $_POST['brand'],
    'model' => $_POST['model'] == "" ? null : $_POST['model']
];

$formMin = [
    'mileage' => $_POST['mileage-min'] == "" ? null : $_POST['mileage-min'],
    'entry_year' => $_POST['year-min'] == "" ? null : $_POST['year-min'],
    'price' => $_POST['price-min'] == "" ? null : $_POST['price-min']
];

$formMax = [
    'mileage' => $_POST['mileage-max'] == "" ? null : $_POST['mileage-max'],
    'entry_year' => $_POST['year-max'] == "" ? null : $_POST['year-max'],
    'price' => $_POST['price-max'] == "" ? null : $_POST['price-max']
];


// Conditions and bind values for the SQL query
$conditionList = " 1=1"; // Always true condition to start the WHERE clause like "WHERE 1=1 AND ..." but not like "WHERE AND ..." which is invalid
$bindList = [];

foreach ($formSelect as $key => $value) {
    if (isset($value)) {
        $conditionList .= " AND $key = :select_$key";
        $bindList[":select_$key"] = $value;
    }
}

foreach ($formMin as $key => $value) {
    if (isset($value)) {
        $conditionList .= " AND $key >= :min_$key";
        $bindList[":min_$key"] = $value;
    }
}

foreach ($formMax as $key => $value) {
    if (isset($value)) {
        $conditionList .= " AND $key <= :max_$key";
        $bindList[":max_$key"] = $value;
    }
}

// Builds the SQL query with bind values
$sql = "SELECT * FROM vehicle WHERE" . $conditionList;

$data = Database::query($sql, $bindList);

// OUTPUT
echo json_encode([
    "success" => $success,
    "msg" => $msg,
    "data" => $data,
]);
