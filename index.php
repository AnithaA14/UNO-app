<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>This is a simple PHP webpage.</p>

    <?php
        // PHP code to display current date and time
        echo "<p>Today is: " . date('l, F j, Y') . "</p>";
        echo "<p>Current time: " . date('h:i A') . "</p>";
    ?>
</body>
</html>
