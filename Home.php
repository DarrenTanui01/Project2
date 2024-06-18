<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <?php
    
    echo '<header>';
    echo '<img src="images/Singapore/Singapore5.png" alt="Icon" class="icon-placeholder">';
    echo '<h1>TravelNestor-Singapore</h1>';
    echo '<nav>';
    echo '<ul style="text-align: right;">';
    echo '<a href="BOOKINGS.php">BOOKINGS </a>';
    echo '<a href="ABOUT US.php">ABOUT US </a>';
    echo '<a href="CONTACTS.php">CONTACTS </a>';
    echo '</ul>';
    echo '</nav>';
    echo '</header>'; 
    echo '<main>';
    echo '<section id="Singapore">';
    echo '<h2>Singapore in a nutshell!</h2>';
    echo '<a href="Singapore.php">LEARN MORE</a>';
    echo '</section>';

    echo '<section id="Marina Bay Sands">';
    echo '<h2>Redefining the city skyline...</h2>';
    echo '<a href="Marina Bay Sands.php">LEARN MORE</a>';
    echo '</section>';

    echo '<section id="Gardens by the Bay">';
    echo '<h2>Testament to Singapore\'s sustainability...</h2>';
    echo '<a href="Gardens By the Bay.php">LEARN MORE</a>';
    echo '</section>';

    echo '<section id="Chinatown">';
    echo '<h2>Singapore\'s Chinese heritage...</h2>';
    echo '<a href="ChinaTown.php">LEARN MORE</a>';
    echo '</section>';
    echo '</main>';
    // Footer content
   $year = date("Y");
   $footer = "<footer><p>&copy $year TravelNestor. All Rights Reserved.</p></footer>";
   
   // Output footer
   print($footer);  
   ?>
</body> 
</html>
