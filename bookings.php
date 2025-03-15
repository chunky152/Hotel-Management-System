<?php
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-image: url(./hotel/office.jpg);">
    <button class="button1"><a href="index.php" style="text-decoration: none; color:white; font-size:larger;">↩Return Home</a></button> <br><br>
    <h1 class="header" style="color: bisque;">All My Bookings</h1>

    <?php
        $query = "SELECT * FROM bookings";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Room Number</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                    </tr>";

            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['customer_name']}</td>
                        <td>{$row['room_number']}</td>
                        <td>{$row['check_in_date']}</td>
                        <td>{$row['check_out_date']}</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No bookings found.";
        }
    ?>    
</body>
</html>

