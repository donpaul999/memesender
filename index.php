<?php
  require 'conectare.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <style>
    img[alt="www.000webhost.com"] {
        display: none !important;
    }
    </style>
      <title> Memes Newsletter </title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="iconita.png" />
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="form-wrap">
      <form method="POST" action="signup.php">
          <h1>Memes Newsletter</h1>
          <input type="text" name="FirstName" placeholder="First Name">
          <input type="text" name="LastName" placeholder="Last Name">
          <input type="number" name="Age" placeholder="Age(For NSFW Memes)">
          <input type="email" name="email" placeholder="Email">
          <input type="submit" value="Sign Up">
          <a href = "contact.html"><input type = "contact" value="Contact Us"></a>
      </form>
    </div>
  </body>
</html>
