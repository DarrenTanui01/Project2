<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/chinatown.css">
</head>
<style>
    body{
        background-color: darksalmon;
    }
</style>
<body>
    <?php
    
    echo '<header>';
    echo '<h1 style="color: antiquewhite;">Chinatown</h1>';
    echo '<nav>';
    echo '<ul>';
    echo '<a href="Home.php" style="color: antiquewhite;">HOME</a>';
    echo '<a href="Singapore.php" style="color: antiquewhite;">DESTINATION</a>';
    echo '<a href="ABOUT US.php" style="color: antiquewhite;">ABOUT US</a>';
    echo '<a href="CONTACTS.php" style="color: antiquewhite;">CONTACTS</a>';
    echo '</ul>';
    echo '</nav>';
    echo '</header>';

    // Content of the body
    echo '<p>Immerse yourself in the vibrant tapestry of Singapore\'s Chinese heritage by exploring the bustling streets of Chinatown. Marvel at the beautifully preserved shophouses, visit ornate temples like the Buddha Tooth Relic Temple, and navigate through the lively street markets offering tantalizing street food, traditional crafts, and antiques.</p>';
    echo '<p>Chinatown is a vibrant neighborhood in Singapore that blends Chinese heritage with modernity. It\'s made up of four sub-areas that were developed at different times: Telok Ayer (1820s), Kreta Ayer (1830s), Bukit Pasoh (early 1900s), and Tanjong Pagar (1920s). Chinatown is known for its hawker centers, temples, teahouses, bars, cafes, and independent art galleries.</p>';

    // Images
    echo '<img src = "images/Destination3/Chinatown1.jpg" alt = "" width = "50%">';
    echo '<img src = "images/Destination3/Chinatown2.jpg" alt = "" width = "45%">';
    echo '<img src = "images/Destination3/Chinatown3.jpg" alt = "" width = "50%">';
    echo '<img src = "images/Destination3/Chinatown4.jpg" alt = "" width = "45%">';

    // Footer content
   $year = date("Y");
   $footer = "<footer><p>&copy $year TravelNestor. All Rights Reserved.</p></footer>";
   
   // Output footer
   print($footer);
    
   ?>
</body>
</html>
