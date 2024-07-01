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
    <header>
    <h1>TravelNestor</h1>
    <nav>
      <ul>
        <a href="Home.php">HOME </a>
        <a href="Singapore.php">DESTINATION </a>
        <a href="BOOKINGS.php">BOOKINGS </a>
        <a href="ABOUT US.php">ABOUT US</a>
      </ul>
    </nav>
  </header>
  
  <main>
    <section id="contact-info">
      <h2>Contact Information</h2>
      <p>We'd love to hear from you! Feel free to reach out using the information below, or fill out the contact form on this page.</p>
      <ul class="contact-details">
        <li><i class="fas fa-phone-alt"></i> +254 743-176-677</li>
        <li><i class="fas fa-envelope"></i> darrenjack@travelnestor.com</li>
        <li><i class="fas fa-map-marker-alt"></i> 123 Main Street, Nairobi West, CA 12345</li>
      </ul>
    </section>
  
    <section id="contact-form">
      <h2>Get in Touch</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit">Send Message</button>
      </form>
    </section>
  </main>

  <?php
        require 'Connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["name"], $_POST["email"], $_POST["message"],)) {
            $Name = $_POST["name"];
            $Email = $_POST["email"];
            $Message = $_POST["message"];

            $duplicate = mysqli_query($conn, "SELECT * FROM contactus WHERE Name='$Name' OR email='$Email'");

            if (mysqli_num_rows($duplicate) > 0) {
                echo "<script>alert('Name or Email already exists');</script>";
            } else {
                $query = "INSERT INTO contactus (Name, Email, Message) VALUES ('$Name', '$Email', '$Message')";
                mysqli_query($conn, $query);
                echo "<script>alert('Submission Successful');</script>";
            }
        }
    }
  
    // Footer content
    $year = date("Y");
   $footer = "<footer><p>&copy $year TravelNestor. All Rights Reserved.</p></footer>";
   
   // Output footer
   print($footer);
    
   ?>


</body>
</html>
