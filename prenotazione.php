<?php
  include("conn.php");
  
  $sql = "SELECT prenotazioni_has_ospiti.id, prenotazioni_has_ospiti.prenotazione_id, prenotazioni_has_ospiti.ospite_id
          from prenotazioni_has_ospiti";

  $resultPrenotazione = $conn->query($sql);


 ?>
