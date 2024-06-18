<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelNestor</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
    <?php
    
    echo '<img src="images/Singapore/Singapore5.png" alt="Icon" class="icon-placeholder">';
    echo '<div class="container">';
    echo '<nav class="menu">';
    echo '<h1>TravelNestor</h1>';
    echo '<ul>';
    echo '<li class="dropdown">';
    echo '<button class="dropbtn">MENU</button>';
    echo '<div class="dropdown-content">';
    echo '<a href="Home.php">HOME</a>';
    echo '<a href="BOOKINGS.html">BOOKINGS</a>';
    echo '<a href="ABOUT US.html">ABOUT US</a>';
    echo '<a href="CONTACTS.html">CONTACT US</a>';
    echo '</div>';
    echo '</li>';
    echo '</ul>';
    echo '</nav>';
       
    echo '</div>';

   echo '<div class="slideshow">';
   echo '<img src="images/Destination1/Marina2.jpg" alt="Marina" class="slide" >';
   echo '<img src="images/Destination2/ground-view.jpg" alt="Ground View" class="slide">';
   echo '<img src="images/Singapore/Singapore1.jpg" alt="Singapore" class="slide">';
   echo '<img src="images/Destination3/Chinatown1.jpg" alt="Chinatown" class="slide">';
   echo '</div>';
   echo '<footer>';
   echo '<p style="text-align: center;">&copy  2024 TravelNestor. All Rights Reserved.</p>';
   echo '</footer>'; 
   ?>
</body>
</html>
