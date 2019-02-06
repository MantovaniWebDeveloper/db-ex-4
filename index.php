<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>db-ex-4 by Dario Mantovani</title>
  </head>
  <body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL | E_STRICT);
    include("prenotazione.php");
    ?>
    <div class="container">
      <h2 class="text-center">Prenotazioni</h2>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th class="text-center" scope="col">iD</th>
            <th class="text-center" scope="col">prenotazione_id</th>
            <th class="text-center" scope="col">ospite_id</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($prenotazioni as  $prenotazione): ?>
          <tr>
            <td class="text-center"><?php echo $prenotazione["id"]; ?></td>
            <td class="text-center"><?php echo $prenotazione["prenotazione_id"]; ?></td>
            <!--gli inserisco nel link l'id del ospite -->
            <td class="text-center"><a href="ospite.php?id=<?php  echo $prenotazione["ospite_id"]; ?>"><?php echo $prenotazione["ospite_id"]; ?></a></td>
          </tr>
          <?php endforeach; ?>

        </tbody>
      </table>

    </div>


  </body>
</html>
