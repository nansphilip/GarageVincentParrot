<?php

$success = true;
$msg = null;
$data = null;

// PROCESS
$idData = $_POST["id"];
$actionData = $_POST["action"];
$tableData = $_POST["table"];

$sql = "";
$bindList = [];

if ($actionData == "approve") {
    $sql = "UPDATE $tableData SET approved = 'APPROVED' WHERE id = :id";
    $bindList = [':id' => $idData];
}
else if ($actionData == "deny") {
    $sql = "UPDATE $tableData SET approved = 'DENIED' WHERE id = :id";
    $bindList = [':id' => $idData];
}
else if ($actionData == "delete") {
    $sql = "DELETE FROM $tableData WHERE id = :id";
    $bindList = [':id' => $idData];
}
else {
    $success = false;
    throw new Exception("Invalid POST parameters");
}

// Executes the SQL query
Database::query($sql, $bindList);

// OUTPUT
echo json_encode([
    "success" => $success,
    "msg" => $msg,
]);
