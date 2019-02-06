<?php
  include("conn.php");

  $sql = "SELECT prenotazioni_has_ospiti.id, prenotazioni_has_ospiti.prenotazione_id, prenotazioni_has_ospiti.ospite_id
          from prenotazioni_has_ospiti";

  $resultPrenotazione = $conn->query($sql);

  if ($resultPrenotazione->num_rows >0) {

    while ($row = $resultPrenotazione->fetch_array()) {
      var_dump($row); die();
    }
  }
  else {
    echo "errore";
  }



 ?>
