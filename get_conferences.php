<?php
include 'db.php';

$sql = "SELECT id, title FROM conferences";
$result = $conn->query($sql);

$conferences = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $conferences[] = $row;
    }
}

echo json_encode($conferences);

$conn->close();
?>