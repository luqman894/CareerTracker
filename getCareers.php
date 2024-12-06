<?php
include 'db.php';  // Include the database connection

$sql = "SELECT career_name, description, image_url FROM careers";
$result = $conn->query($sql);

$careers = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $careers[] = $row;
    }
}

// Return data in JSON format
echo json_encode($careers);

$conn->close();
?>
