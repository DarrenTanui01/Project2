<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/gardens.css">
</head>
<style>
    body{
        background-color: darksalmon;
    }
</style>
<body>
    <?php
    
    echo '<header>';
    echo '<h1 align = "center" style="color: antiquewhite;">Gardens By The Bay</h1>';
    echo '<nav>';
    echo '<ul >';
    echo '<a href="Home.php"  style="color: antiquewhite;">HOME </a>';
    echo '<a href="Singapore.php"  style="color: antiquewhite;">DESTINATION </a>';
    echo '<a href="ABOUT US.php"  style="color: antiquewhite;">ABOUT US </a>';
    echo '<a href="CONTACTS.php"  style="color: antiquewhite;">CONTACTS </a>';
    echo '</ul>';
    echo '</nav>';
    echo '</header>';

    echo '<p>A testament to Singapore\'s commitment to sustainability, Gardens by the Bay is a breathtaking fusion of nature and technology. This horticultural wonderland showcases futuristic Supertrees, towering vertical gardens that come alive with a dazzling light and sound show at night. Explore the Cloud Forest and Flower Dome, where exotic flora from around the world thrives in controlled environments.Here are some of the attractions explained: </p>';
    
    echo '<p>1.Supertree Grove:These iconic tree-like structures are the centerpiece of the gardens. They range in height from 25 to 50 meters and feature vertical gardens, providing a habitat for plants and flowers. At night, the Supertrees come alive with a stunning light and sound show called "Garden Rhapsody."</p>';
    
    echo '<p>2.Cloud Forest:This cooled conservatory features a mountain covered in lush vegetation, waterfalls, and a mist cloud. Visitors can explore the Cloud Walk, a walkway that winds through the trees, and get a panoramic view of the gardens from the top of the mountain.</p>';
    
    echo '<p>3.Flower Dome:This conservatory houses plants and flowers from flower fields around the world, such as the Mediterranean, South Africa, and Australia. Visitors can stroll through the different gardens and learn about the plants on display.</p>';

    echo '<img src = "images/Destination2/ariel-view.jpg" alt = "" width = "50%">';
    echo '<img src = "images/Destination2/Garden-Lighting.jpg" alt = "" width = "45%">';
    echo '<img src = "images/Destination2/ground-view.jpg" alt = "" width = "50%">';
    echo '<img src = "images/Destination2/Night-garden.jpg" alt = "" width = "45%">';

    // Footer content
   $year = date("Y");
   $footer = "<footer><p>&copy $year TravelNestor. All Rights Reserved.</p></footer>";
   
   // Output footer
   print($footer);  
   ?>
</body>
</html>
