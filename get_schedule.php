<?php
include 'db.php';

$sql = "SELECT * FROM conferences";
$result = $conn->query($sql);

$schedule = array();

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $schedule[] = $row;
        }
        echo json_encode($schedule);
    } else {
        echo json_encode(array("message" => "No conferences found"));
    }
} else {
    echo json_encode(array("error" => "Error executing query: " . $conn->error));
}

$conn->close();
?>
