<?php
include("conexion.php");

$consulta = "DELETE FROM cliente"; // ⚠️ Elimina todos
// Si prefieres solo los que están 'listo':
// $consulta = "DELETE FROM cliente WHERE estado = 'listo'";

$resultado = mysqli_query($conex, $consulta);

if ($resultado) {
    echo "ok";
} else {
    echo "error";
}
?>
