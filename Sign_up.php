<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TravelNestor Sign Up</title>
  <link rel="stylesheet" href="sign_up.css">
</head>
<body>
  <header>
    <h1 class="logo">TravelNestor</h1>
  </header>
  <a href="index.php">MAIN PAGE</a>

  <main>
    <section class="signup-form">
      <h2>Join the TravelNestor Family</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Sign Up</button>
      </form>
    </section>
  </main>

  <?php
    require 'Connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["name"], $_POST["email"], $_POST["password"],)) {
          $name = $_POST["name"];
          $email = $_POST["email"];
          $password = $_POST["password"];


          $duplicate = mysqli_query($conn, "SELECT * FROM signup WHERE name='$name' OR email='$email'");

          if (mysqli_num_rows($duplicate) > 0) {
              echo "<script>alert('Name or Email already exists');</script>";
          } else {
              $query = "INSERT INTO signup (name, email, password) VALUES ('$name', '$email', '$password')";
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
