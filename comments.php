<!DOCTYPE html>
<html>
<head>
    <title>Hotel Room Booking System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="home">
    <div class="container">
        <div class="item header">
            <h1>Comments section</h1>
        </div>
        <div class="item nav">
            <h2 style="color: #fff;">MENU</h2>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="comments.php">COMMENTS</a></li>
                <li><a href="links.php">USEFUL LINKS</a></li>
            </ul>
            <div>
                <img src="./hotel/poly.avif" alt="studio image">
            </div>
        </div>
        <div class="item, book">
            <p class="para">We value your feedback!</p>
            <p class="para">Please keep your comments relevant and respectful.</p>
            <form method="POST" action="#">
                <div class="user-box">
                    <input type="text" name="customer_name" placeholder="name" required>
                </div> <br>
                <div class="user-box">
                    <input type="text" name="room_number" placeholder="e-mail" required>
                </div> <br>
                <div class="user-box">
                    <textarea id="comment" name="comment" placeholder="comment here....." required></textarea>
                </div> <br>
                <input class="button" type="submit" name="post" value="send">
            </form>
        </div>
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