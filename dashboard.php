<?php
session_start(); // Start session if not already started

// Check if user is logged in with appropriate role
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Connect to MySQL database
$conn = new mysqli("localhost", "root", "", "your_database_name");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];
$role = $_SESSION['role'];

// Retrieve dashboard content based on role
$sql = "SELECT dashboard_content FROM dashboards WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($dashboard_content);
$stmt->fetch();

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Dashboard</h1>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Welcome, <?php echo $_SESSION['username']; ?>!</h5>
                <p class="card-text"><?php echo $dashboard_content; ?></p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
