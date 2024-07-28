<?php
require 'db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    if (isset($data['destination'], $data['people_count'], $data['arrival_date'], $data['leaving_date'], $data['user_details'])) {
        $stmt = $conn->prepare("INSERT INTO travel_details (destination, people_count, arrival_date, leaving_date, user_details) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sisss", $data['destination'], $data['people_count'], $data['arrival_date'], $data['leaving_date'], $data['user_details']);

        if ($stmt->execute()) {
            $response = array('status' => 'success', 'message' => 'Travel details saved successfully.');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to save travel details.');
        }

        $stmt->close();
    } else {
        $response = array('status' => 'error', 'message' => 'Invalid input.');
    }

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    header('Content-Type: application/json');
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method.'));
}

$conn->close();
?>