<?php
  // connessione al database
  $servername = "localhost";
  $dbname = "schema";
  $user = "root";
  $pass = "root";

  $conn = new Mysqli($servername,$user,$pass,$dbname);

  if($conn->connect_error) {
    echo("non sono riuscito a connnettermi!" .$conn->connect_error);
  }
 ?>
