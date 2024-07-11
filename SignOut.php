<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TravelNestor Sign Out</title>
  <link rel="stylesheet" href="CSS/SignOut.css">
  <?php
  session_start(); // Start session
  ?>
</head>
<body>
  <h1>You have been successfully logged out.</h1>
  <?php
  if (isset($_SESSION['previousPage'])) {
    $previousPage = $_SESSION['previousPage'];
    echo "<p><a href='$previousPage'>Go back to previous page</a></p>";
    // Destroy the session variable after use
    unset($_SESSION['previousPage']);
  } else {
    echo "<p><a href='Sign_up.php'>Sign Up</a> or go back to <a href='index.php'>Home Page</a>.</p>";
  }
  ?>
  <?php
  session_destroy(); // Destroy the session (optional)
  ?>
</body>
</html>
