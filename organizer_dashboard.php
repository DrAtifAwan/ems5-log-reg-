<?php
session_start();

// Check if user is logged in and role is organizer
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'organizer') {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer Dashboard</title>
</head>
<body>
    <h1>Welcome, Organizer <?php echo $_SESSION['user_name']; ?>!</h1>
    <p>This is your dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
