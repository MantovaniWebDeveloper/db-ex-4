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

var_dump($ospiteRisultato);

?>
