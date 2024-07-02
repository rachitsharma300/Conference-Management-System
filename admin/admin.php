<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <!-- Nav Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <h1 class="nav-content">Conference Management System</h1>
            <!-- <div class="clock"></div> -->
            <ul class="nav-links">
                <li><a href="../index.html">Home</a></li> 
            </ul>
        </div>
    </nav>

    <div class="admin-container">
        <h1>Admin Login🔒</h1>
        <form action="manage_conferences.php" method="post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Admin Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Admin Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>

    <script src="../script.js"></script>
</body>
</html>
