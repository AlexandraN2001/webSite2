<?php
// Set the timezone to Ecuador
date_default_timezone_set("America/Guayaquil");
$time = date("h:i A"); // Time format (12-hour with AM/PM)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h1 {
            font-size: 24px;
            color: #4CAF50; /* Green color for the name */
            margin-bottom: 10px;
        }

        .time {
            font-size: 20px;
            color: #FF5722; /* Orange color for the time */
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>My name is Nayeli</h1>
        <div class="time">The time is: <?php echo $time; ?></div>
    </div>

</body>
</html>
