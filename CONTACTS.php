<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/contactUs.css">
</head>
<style>
    body{
        background-color: darksalmon;
    }
</style>
<body>
    <?php
    
    echo '<header>';
    echo '<h1>TravelNestor</h1>';
    echo '<nav>';
    echo '<ul>';
    echo '<a href="Home.html">HOME</a>';
    echo '<a href="Singapore.html">DESTINATION</a>';
    echo '<a href="BOOKINGS.html">BOOKINGS</a>';
    echo '<a href="ABOUT US.html">ABOUT US</a>';
    echo '</ul>';
    echo '</nav>';
    echo '</header>';

    echo '<main>';
    echo '<section id="contact-info">';
    echo '<h2>Contact Information</h2>';
    echo '<p>We\'d love to hear from you! Feel free to reach out using the information below, or fill out the contact form on this page.</p>';
    echo '<ul class="contact-details">';
    echo '<li><i class="fas fa-phone-alt"></i> +254 743-176-677</li>';
    echo '<li><i class="fas fa-envelope"></i> darrenjack@travelnestor.com</li>';
    echo '<li><i class="fas fa-map-marker-alt"></i> 123 Main Street, Nairobi West, CA 12345</li>';
    echo '</ul>';
    echo '</section>';

    echo '<section id="contact-form">';
    echo '<h2>Get in Touch</h2>';
    // The form action should point to a PHP file that will handle the form submission
    // Ensure 'form-handler.php' exists and can process the POST request
    echo '<form action="form-handler.php" method="post">';
    echo '<div class="form-group">';
    echo '<label for="name">Name:</label>';
    echo '<input type="text" id="name" name="name" required>';
    echo '</div>';
    
    echo '<div class="form-group">';
    echo '<label for="email">Email:</label>';
    echo '<input type="email" id="email" name="email" required>';
    echo '</div>';

    echo '<div class="form-group">';
    echo '<label for="message">Message:</label>';
    echo '<textarea id="message" name="message" rows="5" required></textarea>';
    echo '</div>';

    // The button will submit the form data to 'form-handler.php'
    echo '<button type="submit">Send Message</button>';
    
   ?>
</body>
</html>
