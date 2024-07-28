

<?php
require 'db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    if (isset($data['id'])) {
        $id = $data['id'];

        $stmt = $conn->prepare("DELETE FROM travel_details WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            $response = array('status' => 'success', 'message' => 'Record deleted successfully.');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to delete record.');
        }

        $stmt->close();
    } else {
        $response = array('status' => 'error', 'message' => 'Invalid input.');
    }

    echo json_encode($response);
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method.'));
}

$conn->close();
?>
