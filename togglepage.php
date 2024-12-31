<?php
// Start a session for user state
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle Role - Event Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 100px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
        }
        .button {
            display: inline-block;
            margin: 10px 0;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Event Management System</h1>
        <p>Are you an Attendee or an Organizer?</p>
        <div>
            <!-- Toggle buttons -->
            <a href="attendee_form.php" class="button">Attendee</a>
            <a href="organizer_form.php" class="button">Organizer</a>
        </div>
    </div>
</body>
</html>
