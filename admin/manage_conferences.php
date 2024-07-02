<?php
include '../db.php';

$admin_username = "rachitsharma300@gmail.com";
$admin_password = "admin123";

//  fetch feedback
function fetchFeedback($conn) {
    $sql = "SELECT f.id, u.username, c.title, f.comments
            FROM feedback f
            LEFT JOIN users u ON f.user_id = u.id
            LEFT JOIN conferences c ON f.conference_id = c.id";
    $result = $conn->query($sql);

    $feedback = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $feedback[] = $row;
        }
    }
    return $feedback;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'], $_POST['password'])) {

    if ($_POST['username'] === $admin_username && $_POST['password'] === $admin_password) {
        
        //  total  conference schedules
        $result = $conn->query("SELECT COUNT(*) AS total FROM conferences");
        $row = $result->fetch_assoc();
        $total_conferences = $row['total'];

        // total  registered users
        $result = $conn->query("SELECT COUNT(*) AS total FROM users");
        $row = $result->fetch_assoc();
        $total_users = $row['total'];

        //total number  feedback
        $result = $conn->query("SELECT COUNT(*) AS total FROM feedback");
        $row = $result->fetch_assoc();
        $total_feedback = $row['total'];
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Manage Conferences</title>
            <link rel="stylesheet" href="../styles.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        </head>
        <body>
            <nav class="navbar">
                <div class="nav-container">
                    <h1 class="nav-content">Conference Management System</h1>
                    <ul class="nav-links">
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>

            

            <!-- For Fun and Apperenece  -->
    <div class="count-container">
    <h2>Total Conference Schedules: <span id="totalConferences">0</span></h2>
    <h2>Total Registered Users: <span id="totalUsers">0</span></h2>
    <h2>Total Feedback: <span id="totalFeedback">0</span></h2>
    </div>
    <script>
    const totalConferences = <?php echo $total_conferences; ?>;
    const totalUsers = <?php echo $total_users; ?>;
    const totalFeedback = <?php echo $total_feedback; ?>;
    document.addEventListener('DOMContentLoaded', () => {
        startCounter('totalConferences', totalConferences);
        startCounter('totalUsers', totalUsers);
        startCounter('totalFeedback', totalFeedback);
    });
    </script>
            <div class="conference-container">
                <h1>Manage Conferences</h1>

                <!-- Add Conference Form -->
                <form action="manage_conferences.php" method="post">
                    <input type="hidden" name="admin_username" value="<?php echo $admin_username; ?>">
                    <input type="hidden" name="admin_password" value="<?php echo $admin_password; ?>">
                    <div class="form-group">
                        <input type="text" name="title" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <textarea name="description" placeholder="Description" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="add_conference">Add Conference</button>
                    </div>
                </form>
            </div>

            <div class="existing-cont">
                <h1>Existing Conferences</h1>
                <table>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    // Fetch existing conferences
                    $sql = "SELECT * FROM conferences";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['description'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>
                                    <form action='manage_conferences.php' method='post' style='display:inline;'>
                                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                                        <input type='hidden' name='admin_username' value='$admin_username'>
                                        <input type='hidden' name='admin_password' value='$admin_password'>
                                        <button type='submit' name='delete_conference' class='actions-button'>Delete</button>
                                    </form>
                                    <form action='manage_conferences.php' method='post' style='display:inline;'>
                                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                                        <input type='hidden' name='title' value='" . $row['title'] . "'>
                                        <input type='hidden' name='description' value='" . $row['description'] . "'>
                                        <input type='hidden' name='date' value='" . $row['date'] . "'>
                                        <input type='hidden' name='admin_username' value='$admin_username'>
                                        <input type='hidden' name='admin_password' value='$admin_password'>
                                        <button type='submit' name='edit_conference' class='actions-button'>Edit</button>
                                    </form> 
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No conferences found</td></tr>";
                    }
                    ?>
                </table>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_conference'])) {
                    ?>
                    <h2>Edit Conference</h2>
                    <form action="manage_conferences.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                        <input type="hidden" name="admin_username" value="<?php echo $admin_username; ?>">
                        <input type="hidden" name="admin_password" value="<?php echo $admin_password; ?>">
                        <div class="form-group">
                            <input type="text" name="title" value="<?php echo $_POST['title']; ?>" required>
                        </div>
                        <div class="form-group">
                            <textarea name="description" required><?php echo $_POST['description']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <input type="date" name="date" value="<?php echo $_POST['date']; ?>" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="edit_conference">edit Conference</button>
                        </div>
                    </form>
                    <?php
                }
                ?>
            </div>

            <!-- Feedback Section -->
            <div class="feedback-container">
                <h1>Submitted Feedback</h1>
                <?php
                // Display feedback
                $feedback = fetchFeedback($conn);
                if (!empty($feedback)) {
                    echo "<table>";
                    echo "<tr><th>Conference</th><th>Comments</th></tr>";
                    foreach ($feedback as $entry) {
                        echo "<tr>";
                        
                        // echo "<td>" . $entry['username'] . "</td>";


                        echo "<td>" . $entry['title'] . "</td>";
                        echo "<td>" . $entry['comments'] . "</td>";

                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No feedback available";
                }
                ?>
            </div>

            <script src="../script.js"></script>
        </body>
        </html>
        <?php
    } else {
        
        die("Authentication failed. Please go back and try again.");
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_conference'])) {
    // Handle add conference 
    if ($_POST['admin_username'] === $admin_username && $_POST['admin_password'] === $admin_password) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];

        $sql = "INSERT INTO conferences (title, description, date) VALUES ('$title', '$description', '$date')";

        if ($conn->query($sql) === TRUE) {
            echo "Conference added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        
        die("Re-authentication failed.");
    }

    $conn->close();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_conference'])) {
    // Handle delete conference
    if ($_POST['admin_username'] === $admin_username && $_POST['admin_password'] === $admin_password) {
        $id = $_POST['id'];

        $sql = "DELETE FROM conferences WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Conference deleted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        
        die("Re-authentication failed.");
    }

    $conn->close();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_conference'])) {
    // Handle update conference 
    if ($_POST['admin_username'] === $admin_username && $_POST['admin_password'] === $admin_password) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];

        $sql = "UPDATE conferences SET title='$title', description='$description', date='$date' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Conference updated successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        
        die("Re-authentication failed.");
    }

    $conn->close();
} else {
    die("Access denied.");
}
?>
