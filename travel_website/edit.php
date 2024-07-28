<?php
// Check if the id is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

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

    // Fetch booking details
    $sql = "SELECT * FROM travel_details WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No booking found.";
        exit;
    }

    $conn->close();
} else {
    echo "Invalid request.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Booking</h2>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-3">
                <label for="destination" class="form-label">Destination</label>
                <input type="text" class="form-control" id="destination" name="destination" value="<?php echo htmlspecialchars($row['destination']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="peopleCount" class="form-label">No. of People</label>
                <input type="number" class="form-control" id="peopleCount" name="people_count" value="<?php echo htmlspecialchars($row['people_count']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="arrivalDate" class="form-label">Arrival Date</label>
                <input type="date" class="form-control" id="arrivalDate" name="arrival_date" value="<?php echo htmlspecialchars($row['arrival_date']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="leavingDate" class="form-label">Leaving Date</label>
                <input type="date" class="form-control" id="leavingDate" name="leaving_date" value="<?php echo htmlspecialchars($row['leaving_date']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="userDetails" class="form-label">Additional Details</label>
                <textarea class="form-control" id="userDetails" name="user_details" rows="5"><?php echo htmlspecialchars($row['user_details']); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update and Close</button>
        </form>
    </div>
</body>
</html>
