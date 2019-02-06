<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL | E_STRICT);

include "conn.php";
$getId = intval($_GET["id"]);
//var_dump($getId);

// echo $getId;
$stmt = $conn->prepare("SELECT * FROM ospiti where id = ?");
$stmt->bind_param("i", $getId);
$stmt->execute();
$ospiteRisultato = $stmt->get_result()->fetch_all();


foreach($ospiteRisultato as $key => $ospite):?>

<h3>nome: <?php echo $ospite["1"];?></h3>
<h3>cognome: <?php echo $ospite["2"];?></h3>
<h3>data di nascita: <?php echo $ospite["3"];?></h3>
<h3>tipo documento: <?php echo $ospite["4"];?></h3>
<h3>numero documento: <?php echo $ospite["5"];?></h3>

<?php endforeach; ?>
