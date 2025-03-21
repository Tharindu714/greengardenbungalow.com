<?php

require "connection.php";

header('Content-Type: application/json');

if (isset($_POST['action']) && isset($_POST['id'])) {
    $action = $_POST['action'];
    $id = $_POST['id'];
    $response = [];

    try {
        if ($action == "approve") {
            Database::insUpdelete("UPDATE `feedback` SET `status`='2' WHERE `id`='$id'");
            $response['success'] = true;
            $response['message'] = "Feedback approved successfully.";
        } elseif ($action == "delete") {
            Database::insUpdelete("DELETE FROM `feedback` WHERE `id`='$id'");
            $response['success'] = true;
            $response['message'] = "Feedback deleted successfully.";
        } else {
            $response['success'] = false;
            $response['message'] = "Invalid action.";
        }
    } catch (Exception $e) {
        $response['success'] = false;
        $response['message'] = "Error: " . $e->getMessage();
    }

    echo json_encode($response);
} else {
    echo json_encode([
        'success' => false,
        'message' => "Invalid request."
    ]);
}

