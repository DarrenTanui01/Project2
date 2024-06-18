<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/aboutUS.css">
</head>
<style>
    body{
        background-color: darksalmon;
    }
</style>
<body>
    <?php
    // Header content
    echo '<header>';
    echo '<h1>TravelNestor</h1>';
    echo '<nav>';
    echo '<ul>';
    echo '<a href="Home.html">HOME</a>';
    echo '<a href="Singapore.html">DESTINATION</a>';
    echo '<a href="BOOKINGS.html">BOOKINGS</a>';
    echo '<a href="CONTACTS.html">CONTACTS</a>';
    echo '</ul>';
    echo '</nav>';
    echo '</header>';

    // Main content
    echo '<main>';
    
    // About us section
    echo '<section id="about-us">';
    echo '<h2>Welcome to TravelNestor - Your Gateway to the World!</h2>';
    echo '<p>TravelNestor is a passionate travel agency dedicated to crafting unforgettable travel experiences for our clients. We believe that travel is more than just visiting a place; it\'s about immersing yourself in new cultures, creating lasting memories, and discovering the beauty of the world.';
    echo '<br>';
    echo 'Our team of experienced travel specialists has extensive knowledge of destinations around the globe. We take pride in personalized service, ensuring your trip is tailored to your interests and budget. Whether you\'re dreaming of a relaxing beach getaway, an adventurous trek through ancient ruins, or a vibrant exploration of bustling cities, TravelNestor is here to make your travel dreams a reality.</p>';
    echo '</section>';

    // Our values section
    echo '<section id="our-values">';
    echo '<h2>Our Core Values</h2>';
    echo '<ul>';
    echo '<li>Expertise: We possess in-depth knowledge of global travel destinations.</li>';
    echo '<li>Personalization: We tailor each trip to your unique needs and desires.</li>';
    echo '<li>Customer Satisfaction: Your satisfaction is our top priority.</li>';
    echo '<li>Integrity: We operate with honesty and transparency.</li>';
    echo '<li>Sustainability: We promote responsible travel practices.</li>';
    echo '</ul>';
    echo '</section>';

   // Close main content
   echo '</main>';

   // Footer content
   $year = date("Y");
   $footer = "<footer><p>© $year TravelNestor. All Rights Reserved.</p></footer>";
   
   // Output footer
   print($footer);
   
  ?>
</body>
</html>
