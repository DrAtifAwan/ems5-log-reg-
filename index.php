<?php
session_start(); // Start a session to manage user state
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }
        .container {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1, h2 {
            color: #007bff;
        }
        .roles {
            display: flex;
            justify-content: space-around;
            margin: 30px 0;
        }
        .role-card {
            background: #f4f4f4;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            flex: 0 0 45%;
        }
        .role-card h3 {
            margin-bottom: 10px;
        }
        .role-card a {
            display: inline-block;
            padding: 10px 15px;
            margin-top: 10px;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            border-radius: 5px;
        }
        .role-card a:hover {
            background-color: #0056b3;
        }
        footer {
            text-align: center;
            margin: 20px 0;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Event Management System</h1>
    </header>

    <div class="container">
        <h2>About the System</h2>
        <p>Our Event Management System simplifies the process of organizing and managing events. Whether you're an organizer or an attendee, this platform provides all the tools you need to ensure seamless event coordination. Register today and make event management effortless!</p>

        <h2>Choose Your Role</h2>
        <div class="roles">
            <div class="role-card">
                <h3>Organizer</h3>
                <p>Create and manage your events. Keep track of attendees and their RSVPs with ease.</p>
                <a href="organizer_form.php">Get Started as Organizer</a>
            </div>
            <div class="role-card">
                <h3>Attendee</h3>
                <p>Browse and RSVP to events. Stay updated with the latest event details.</p>
                <a href="attendee_form.php">Get Started as Attendee</a>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Event Management System. All rights reserved.</p>
    </footer>
</body>
</html>
