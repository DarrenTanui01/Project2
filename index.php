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
    echo '<nav class="auth-nav">';
    echo '<a href="Sign_up.php">SIGN UP </a>';
    echo '<a href="SignOut.php">SIGN OUT </a>';
    echo '</nav>';
    echo '<div class="container">';
    echo '<nav class="menu">';
    echo '<h1>TravelNestor</h1>';
    echo '<ul>';
    echo '<li class="dropdown">';
    echo '<button class="dropbtn">MENU</button>';
    echo '<div class="dropdown-content">';
    echo '<a href="Home.php">HOME</a>';
    echo '<a href="BOOKINGS.php">BOOKINGS</a>';
    echo '<a href="ABOUT US.php">ABOUT US</a>';
    echo '<a href="CONTACTS.php">CONTACT US</a>';
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
   // Footer content
   $year = date("Y");
   $footer = "<footer><p>&copy $year TravelNestor. All Rights Reserved.</p></footer>";
   
   // Output footer
   print($footer);
   ?>
</body>
</html>
