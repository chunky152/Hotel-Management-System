<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book a room</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-image: url(./hotel/office.jpg);">
    <?php
        include "database.php";

        if (isset($_POST['book'])) {
            $customer_name = $_POST['customer_name'];
            $room_number = $_POST['room_number'];
            $check_in = $_POST['check_in'];
            $check_out = $_POST['check_out'];

            // Checking if room is already booked
            $query = "SELECT * FROM bookings WHERE room_number = '$room_number' 
                    AND check_in_date <= '$check_out' 
                    AND check_out_date >= '$check_in'";
            
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                echo "<header class='header' style='background-color: rgba(0,0,0,0.5); color: red; font-size:larger;'>Room already booked! Choose another room.</header> <br>";
                echo "<button class='button1'><a href='index.php' style='text-decoration: none; color:white; font-size:larger;'>↩Return Home</a></button>";
            } else {
                // Inserting booking into database
                $insert = "INSERT INTO bookings (customer_name, room_number, check_in_date, check_out_date) 
                        VALUES ('$customer_name', '$room_number', '$check_in', '$check_out')";
                
                if ($conn->query($insert)) {
                    echo "<h1 style='text-align:center; color:green;'>Booking successful!</h1><br><br>";
                    echo "<button class='button1'><a href='index.php' style='text-decoration: none; color:white; font-size:larger;'>↩Return Home</a></button>||<button class='button1'><a href='bookings.php' style='text-decoration: none; color:white; font-size:larger;'>Checkout my bookings</a></button>";
                } else {
                    echo "Error: " . $conn->error;
                }
            }
        }
    ?>
</body>
</html>


