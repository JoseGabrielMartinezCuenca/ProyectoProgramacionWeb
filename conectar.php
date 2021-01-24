<<?php
require "nuevaconexion.php";

$raza = $_GET["campo"]

$sql = "SELECT raza FROM mascota WHERE raza LIKE '$raza'";
$resultado = &mysqli->query($sql);

$respuesta = "";
while ($row = $resultado->fetch_assoc()) {
  // code...
  $respuesta = $row["raza"];
}

echo $respuesta === "" ? "No hay Resultados" : $respuesta;
   ?>
