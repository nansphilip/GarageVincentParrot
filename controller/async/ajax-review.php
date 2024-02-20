<?php

$success = true;
$msg = null;
$data = null;

// PROCESS

if (!$_POST["idReview"] || !$_POST["action"]) {
    throw new Exception("Invalid POST parameters");
}

if ($_POST["action"] === "approve") {
    $approvement = "APPROVED";
} else if ($_POST["action"] === "deny") {
    $approvement = "DENY";
} else {
    throw new Exception("Invalid POST parameters");
}

// Builds the SQL query with bind values
$sql = "UPDATE customer_review SET approved = :approvement WHERE id = :id";
$bindList = [':approvement' => $approvement, ':id' => $_POST["idReview"]];

try {
    $data = Database::query($sql, $bindList);
} catch (Exception $e) {
    throw new Exception("Invalid POST parameters");
}

// OUTPUT
echo json_encode([
    "success" => $success,
    "msg" => $msg,
    "data" => $data,
]);
