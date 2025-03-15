<?php
// include "database.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hotel Room Booking System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="home">
    <div class="container">
        <div class="item header">
            <h1>RESTFUL Hotel</h1>
        </div>
        <div class="item nav">
            <h2 style="color: #fff;">MENU</h2>
            <ul>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="comments.php">COMMENTS</a></li>
                <li><a href="links.php">USEFUL LINKS</a></li>
            </ul>
            <div>
                <img src="./hotel/poly.avif" alt="studio image">
            </div>
        </div>
        <div class="item, book">
            <p class="para">Welcome to RESTFUL Hotel Room Booking System</p>
            <form method="POST" action="book.php">
                <div class="user-box">
                    <input type="text" name="customer_name" placeholder="name" required>
                </div> <br>
                <div class="user-box">
                    <input type="number" name="room_number" placeholder="room_number" required>
                </div> <br>
                <div class="user-box">
                   <span style="color:black">Check-in</span><br>
                    <input type="date" name="check_in" required>
                </div> <br>
                <div class="user-box">
                    <span style="color:black">Check-out </span><br>
                    <input type="date" name="check_out" required>
                </div> <br>
                <input class="button" type="submit" name="book" value="Book Now">
            </form>
        </div>
        <a href="rooms.php" style="text-decoration: none;"><input class="button" type="submit" name="check" value="Check Available Rooms"></a>
        <div class="item item1">
            <h2 style="color: white;">SOCIAL MEDIA LINKS</h2>
            <ul class="second">
                <li><a href="#">FACEBOOK</a></li>
                <li><a href="#">INSTAGRAM</a></li>
                <li><a href="#">TELEGRAM</a></li>
                <li><a href="#">LINKEDIN</a></li>
            </ul>
            <p class="last">© 2025 by MUWANGUZI ALVIN KIGGUNDU™ | <a href="mailto:alvinmuwanguzi1@gmail.com">alvinmuwanguzi1@gmail.com</a></p>
        </div>
    </div>
</body>
</html>
