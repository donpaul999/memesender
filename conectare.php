<?php
$conectare = mysqli_connect("localhost", "id8253802_my_user","123456789", "id8253802_my_db");

if(!$conectare)
 {
    echo "EROARE!".'</br>';
    die(mysqli_connect_error());
  }
