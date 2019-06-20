<?php
$conectare = mysqli_connect("localhost", "(username)","(password)", "(db_name)");

if(!$conectare)
 {
    echo "EROARE!".'</br>';
    die(mysqli_connect_error());
  }
