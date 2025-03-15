<?php
    $levels=["Level-1","Level-2","Level-3","Level-4","Level-5"];
    $rooms=[1,2,8,9];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div style="background-image: url(./hotel/office.jpg); background-size: cover;">
        <div class="header">
            <h1>Available Rooms</h1>
        </div><br>
        <button class="button1"><a href="index.php" style="text-decoration: none; color:white; font-size:larger;">↩Return Home</a></button> <br><br>
        
        <?php
            foreach($levels as $level){
                echo "<div class='header'><h3 style='text-align: center; color: bisque'>$level</h3></div> <br>";
                    foreach($rooms as $room) {
                        echo "<div class='room'><h3 style='text-align: center; color:white;'>$room</h3></div><br>";
                    }
                
            }
        ?>
    </div>
</body>
</html>
