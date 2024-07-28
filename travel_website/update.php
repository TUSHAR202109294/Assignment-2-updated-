<?php
// update.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $destination = $_POST['destination'];
    $people_count = $_POST['people_count'];
    $arrival_date = $_POST['arrival_date'];
    $leaving_date = $_POST['leaving_date'];
    $user_details = $_POST['user_details'];

    // Database connection credentials
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "travel_db"; 


    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update booking details
    $sql = "UPDATE travel_details SET destination=?, people_count=?, arrival_date=?, leaving_date=?, user_details=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sisssi', $destination, $people_count, $arrival_date, $leaving_date, $user_details, $id);

    if ($stmt->execute()) {
        header("Location: home.php?");
    } else {
        echo "Error updating booking: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
