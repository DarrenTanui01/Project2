<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="CSS/bookings.css">
</head>
<style>
  body {
    background-color: darksalmon;
  }
</style>
<body>
<header>
  <h1 style="color: antiquewhite;">TravelNestor</h1>
  <nav>
    <ul>
      <a href="Home.php" style="color: antiquewhite;">HOME </a>
      <a href="Singapore.php" style="color: antiquewhite;">DESTINATION </a>
      <a href="ABOUT US.php" style="color: antiquewhite;">ABOUT US </a>
      <a href="CONTACTS.php" style="color: antiquewhite;">CONTACTS</a>
    </ul>
  </nav>
</header>

<main>
  <section id="booking-form">
    <h2>Book Your Dream Vacation</h2>
    <form action="" method="post">
      <div class="form-group">
        <label for="destination">Choose Your Destination:</label>
        <select id="destination" name="destination" required>
          <option value="">Select Destination</option>
          <option value="paris">Paris, France</option>
          <option value="rome">Rome, Italy</option>
          <option value="bali">Bali, Indonesia</option>
          <option value="prague">Prague, Czech Republic</option>
        </select>
      </div>

      <div class="form-group">
        <label for="check-in">Check-In Date:</label>
        <input type="date" id="check-in" name="check_in" required>
      </div>

      <div class="form-group">
        <label for="check-out">Check-Out Date:</label>
        <input type="date" id="check-out" name="check_out" required>
      </div>

      <div class="form-group">
        <label for="guests">Number of Guests:</label>
        <input type="number" id="guests" name="guests" min="1" required>
      </div>

      <div class="form-group">
        <label for="room-type">Room Type:</label>
        <select id="room-type" name="room_type" required>
          <option value="">Select Room Type</option>
          <option value="regular">Regular Room</option>
          <option value="premium">Premium Room</option>
          <option value="deluxe">Deluxe Room</option>
          <option value="penthouse">Penthouse Suite</option>
        </select>
      </div>

      <div class="form-group">
        <label for="board">Meal Plan:</label>
        <fieldset id="board">
          <input type="radio" id="half-board" name="board" value="half-board" required>
          <label for="half-board">Half Board (Breakfast & Dinner)</label><br>
          <input type="radio" id="full-board" name="board" value="full-board" required>
          <label for="full-board">Full Board (Breakfast, Lunch & Dinner)</label><br>
        </fieldset>
      </div>

      <button type="submit">Submit</button>

    </form>
  </section>
</main>
    <?php
    require 'Connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["destination"], $_POST["check_in"], $_POST["check_out"],$_POST["guests"],$_POST["room_type"],$_POST["board"])) {
            $destination = $_POST["destination"];
            $check_in = $_POST["check_in"];
            $check_out = $_POST["check_out"];
            $guests = $_POST["guests"];
            $room_type = $_POST["room_type"];
            $board = $_POST["board"];

            $duplicate = mysqli_query($conn, "SELECT * FROM bookings WHERE check_in='$check_in'");

            if (mysqli_num_rows($duplicate) > 0) {
                echo "<script>alert('Check in date is  full!');</script>";
            } else {
                $query = "INSERT INTO bookings(destination, check_in, check_out, guests, room_type, board) VALUES ('$destination', '$check_in', '$check_out', '$guests', '$room_type', '$board')";
                mysqli_query($conn, $query);
                echo "<script>alert('Submission Successful');</script>";
            }
        }
    }
   // Footer
   $year = date("Y");
   $footer = "<footer><p>© $year TravelNestor. All Rights Reserved.</p></footer>";
   
   // Output footer
   print($footer);
   
  ?>

  
</body>
</html>
