<?php
  require 'conectare.php';
  $fname = $_POST['FirstName'];
  $lname = $_POST['LastName'] ;
  $age =  $_POST['Age'] ;
  $email =  $_POST['email'];

  $sql = "INSERT INTO users(FirstName, LastName, Age, email) VALUES ('$fname', '$lname', '$age', '$email')";
  $result = mysqli_query($conectare, $sql);
  header("Location: index.php");
 ?>
