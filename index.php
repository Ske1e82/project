<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
</head>
<body>
    <h1>Welcome to Event Registration System</h1>
    
    <?php if (isset($_SESSION['user_id'])): ?>
        <!-- แสดงชื่อจริงและนามสกุลของผู้ใช้ -->
        <p>Welcome, <?= htmlspecialchars($_SESSION['first_name']) . ' ' . htmlspecialchars($_SESSION['last_name']); ?>!</p>
        <a href="my_events.php">My events</a> |
        <a href="my_registrations.php">My Registrations</a> | 
        <a href="create_event.php">Create Event</a> | 
        <a href="event_list.php">Event List</a> | 
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a> | 
        <a href="register.php">Register</a>
    <?php endif; ?>
</body>
</html>
