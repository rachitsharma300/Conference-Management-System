<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $conference_id = $_POST['conference_id'];
    $comments = $_POST['comments'];

    $stmt = $conn->prepare("INSERT INTO feedback (user_id, conference_id, comments) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $user_id, $conference_id, $comments);

    if ($stmt->execute()) {
        echo "Feedback submitted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>