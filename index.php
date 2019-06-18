<?php
  require 'conectare.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
      <title> Memes Newsletter </title>
      <link rel="shortcut icon" type="image/x-icon" href="iconita.png" />
  </head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
  }

  li a {
    display: block;
    color: #000;
    transition: .3s;
    padding: 8px 16px;
    text-decoration: none;
  }

  li a.active {
    background-color:#3366ff  ;
    color: white;
  }

  li a:hover:not(.active) {
    background-color: #555;
    color: white;
  }
  </style>
  <body>
    <header>
      <ul>
        <li><a class="active" href="index.php">Sign Up</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </header>
    <div class="form-wrap">
      <form method="POST" action="signup.php">
          <h1>Memes Newsletter</h1>
          <input type="text" name="FirstName" placeholder="First Name">
          <input type="text" name="LastName" placeholder="Last Name">
          <input type="number" name="Age" placeholder="Age(For NSFW Memes)">
          <input type="email" name="email" placeholder="Email">
          <input type="submit" value="Sign Up">
       </form>
    </div>
  </body>
</html>
