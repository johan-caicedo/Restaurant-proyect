<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos Pendientes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <h1 class="mb-4 text-center">📋 Pedidos Pendientes</h1>

        <div class="row">
            <?php
/*$inc = include("conexion.php");
if ($inc) {
    $consulta = "SELECT * FROM cliente";
    $resultado = mysqli_query($conex, $consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $id_cliente = $row["id_cliente"];
            $nombre = $row["nombre"];
            $cedula = $row["cedula"];
            $telefono = $row["telefono"];
            $producto = $row["producto"];
            ?>

            <div id="pedido-<?php echo $id_cliente; ?>" style="border:1px solid #ccc; padding:10px; margin:10px 0;">
                <h2><?php echo $nombre; ?></h2>
                <p>
                    <b>ID:</b> <?php echo $id_cliente; ?><br>
                    <b>Nombre:</b> <?php echo $nombre; ?><br>
                    <b>Cédula:</b> <?php echo $cedula; ?><br>
                    <b>Teléfono:</b> <?php echo $telefono; ?><br>
                    <b>Producto:</b> <?php echo $producto; ?>
                </p>
                <button onclick="ocultarPedido(<?php echo $id_cliente; ?>)">Ocultar pedido</button>
            </div>

            <?php
        }
    }
}
?>

<script>
function ocultarPedido(id) {
    const div = document.getElementById("pedido-" + id);
    if (div) {
        div.style.display = "none";
    }
}
</script>*/

           
            $inc = include("conexion.php");
            if ($inc) {
                $consulta = "SELECT * FROM cliente";
                $resultado = mysqli_query($conex, $consulta);
                if ($resultado) {
                    while ($row = $resultado->fetch_array()) {
                        $id_cliente = $row["id_cliente"];
                        $nombre = $row["nombre"];
                        $cedula = $row["cedula"];
                        $telefono = $row["telefono"];
                        $producto = $row["producto"];
                        ?>

                        <div class="col-md-4" id="pedido-<?php echo $id_cliente; ?>">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-primary"><?php echo $nombre; ?></h5>
                                    <p class="card-text">
                                        <strong>ID:</strong> <?php echo $id_cliente; ?><br>
                                        <strong>Cédula:</strong> <?php echo $cedula; ?><br>
                                        <strong>Teléfono:</strong> <?php echo $telefono; ?><br>
                                        <strong>Producto:</strong> <?php echo $producto; ?>
                                    </p>
                                    <button class="btn btn-success" onclick="ocultarPedido(<?php echo $id_cliente; ?>)">
                                        Marcar como Listo
                                    </button>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS (opcional si no usas dropdowns, modals, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para ocultar el pedido -->
    <script>
        function ocultarPedido(id) {
            const div = document.getElementById("pedido-" + id);
            if (div) {
                div.style.display = "none";
            }
        }
    </script>
<button class="btn btn-danger rounded-circle position-fixed bottom-0 end-0 m-4 shadow"
        style="width: 60px; height: 60px; font-size: 24px;"
        onclick="eliminarPedidos()">
    🗑
</button>
<script>
function eliminarPedidos() {
    if (confirm("¿Estás seguro de que quieres eliminar todos los pedidos? Esta acción no se puede deshacer.")) {
        fetch('eliminar_pedidos.php', {
            method: 'POST'
        })
        .then(response => response.text())
        .then(data => {
            if (data === 'ok') {
                alert("Pedidos eliminados correctamente.");
                location.reload(); // recarga la página
            } else {
                alert("Hubo un error al eliminar los pedidos.");
            }
        });
    }
}
</script>

</body>
</html>




