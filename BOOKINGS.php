<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/bookings.css">
</head>
<style>
    body{
        background-color: darksalmon;
    }
</style>
<body>
    <?php
    
    echo '<header>';
    echo '<h1 style="color: antiquewhite;">TravelNestor</h1>';
    echo '<nav>';
    echo '<ul>';
    echo '<a href="Home.html" style="color: antiquewhite;">HOME</a>';
    echo '<a href="Singapore.html" style="color: antiquewhite;">DESTINATION</a>';
    echo '<a href="ABOUT US.html" style="color: antiquewhite;">ABOUT US</a>';
    echo '<a href="CONTACTS.html" style="color: antiquewhite;">CONTACTS</a>';
    echo '</ul>';
    echo '</nav>';
    echo '</header>';

    // Main content
    echo '<main>';
    echo '<section id="booking-form">';
    echo '<h2>Book Your Dream Vacation</h2>';
    echo '<form action="booking-handler.php" method="post">';
    
    // Form groups
    // Destination select
    echo '<div class="form-group">';
    echo '<label for="destination">Choose Your Destination:</label>';
    echo '<select id="destination" name="destination" required>';
    echo '<option value="">Select Destination</option>';
    echo '<option value="paris">Paris, France</option>';
    echo '<option value="rome">Rome, Italy</option>';
    echo '<option value="bali">Bali, Indonesia</option>';
    echo '<option value="prague">Prague, Czech Republic</option>';
    echo '</select>';
    echo '</div>';

    // Check-in date
    echo '<div class="form-group">';
    echo '<label for="check-in">Check-In Date:</label>';
    echo '<input type="date" id="check-in" name="check_in" required>';
    echo '</div>';

    // Check-out date
    echo '<div class="form-group">';
    echo '<label for="check-out">Check-Out Date:</label>';
    echo '<input type="date" id="check-out" name="check_out" required>';
    echo '</div>';

    // Number of guests
    echo '<div class="form-group">';
    echo '<label for="guests">Number of Guests:</label>';
    echo '<input type="number" id="guests" name="guests" min="1" required>';
    echo '</div>';

   // Room type select
   echo '<div class="form-group">';
   echo '<label for="room-type">Room Type:</label>';
   echo '<select id="room-type" name="room_type" required>';
   echo '<option value="">Select Room Type</option>';
   echo '<option value="regular">Regular Room</option>';
   echo '<option value="premium">Premium Room</option>';
   echo '<option value="deluxe">Deluxe Room</option>';
   echo '<option value="penthouse">Penthouse Suite</option>';
   echo '</select>';
   echo '</div>';

   // Meal plan radio buttons
   echo '<div class="form-group">';
   echo '<label for="board">Meal Plan:</label>';
   echo '<fieldset id="board">';
   echo '<input type="radio" id="half-board" name="board" value="half-board" required>';
   echo '<label for="half-board">Half Board (Breakfast & Dinner)</label><br>';
   echo '<input type="radio" id="full-board" name="board" value="full-board" required>';
   echo '<label for="full-board">Full Board (Breakfast, Lunch & Dinner)</label><br>';
   echo '</fieldset>';
   echo '</div>';

   // Submit button
   echo '<button type=\"submit\">Check Availability & Rates</button>';

   // Close form and section
   echo '</form></section></main>';

   // Footer
   $year = date("Y");
   $footer = "<footer><p>© $year TravelNestor. All Rights Reserved.</p></footer>";
   
   // Output footer
   print($footer);
   
  ?>
</body>
</html>
