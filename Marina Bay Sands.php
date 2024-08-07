<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/marina.css">
</head>
<style>
    body{
        background-color: darksalmon;
    }
</style>
<body>
    <?php
    
    echo '<header>';
    echo '<h1 align = "center" style="color: antiquewhite;" >Marina Bay Sands</h1>';
    echo '<nav>';
    echo '<ul >';
    echo '<a href="Home.php"  style="color: antiquewhite;">HOME </a>';
    echo '<a href="Singapore.php"  style="color: antiquewhite;">DESTINATION </a>';
    echo '<a href="ABOUT US.php"  style="color: antiquewhite;">ABOUT US </a>';
    echo '<a href="CONTACTS.php"  style="color: antiquewhite;">CONTACTS </a>';
    echo '</ul>';
    echo '</nav>';
    echo '</header>';

    echo '<p>Redefining the city\'s skyline, Marina Bay Sands is an architectural marvel that cannot be missed. Its three interconnected towers are crowned by a gravity-defying rooftop infinity pool, offering panoramic views of the cityscape. Visitors can indulge in world-class dining, witness captivating performances at the Esplanade, or explore the luxury shopping precinct.</p>';

    echo '<p>It features three 55-story towers housing around 2,600 extravagant hotel rooms and suites. Some even come with personal butler service! This resort boasts the world\'s largest atrium casino, with over 500 gaming tables and 1,600 slot machines, offering entertainment for high rollers.The Shoppes at Marina Bay Sands is a massive mall with over 300 boutiques. Whether you\'re looking for luxury brands or a shopping spree, this place has you covered. From fine-dining restaurants helmed by celebrity chefs to casual eateries and quick bites, Marina Bay Sands caters to all palates. The defining feature is the three hotel towers topped by the Sands SkyPark, a skyway connecting the towers with a staggering 150-meter infinity pool, all perched on a public cantilevered platform.</p>';

    echo '<img src = "images/Destination1/Marina2.jpg" alt = "" width = "50%">';
    echo '<img src = "images/Destination1/Marina1.jpg" alt = "" width = "30%">';
    echo '<img src = "images/Destination1/Marina3.jpg" alt = "" width = "45%">';
    echo '<img src = "images/Destination1/Marina4.jpg" alt = "" width = "50%">';

    // Footer content
   $year = date("Y");
   $footer = "<footer><p>&copy $year TravelNestor. All Rights Reserved.</p></footer>";
   
   // Output footer
   print($footer);  
   ?>
</body>
</html>
