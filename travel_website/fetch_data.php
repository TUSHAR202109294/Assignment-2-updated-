<?php
require 'db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $conn->prepare("SELECT id, destination, people_count, arrival_date, leaving_date, user_details FROM travel_details");
    $stmt->execute();
    $result = $stmt->get_result();

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    $stmt->close();
    $conn->close();

    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    header('Content-Type: application/json');
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method.'));
}
?>
