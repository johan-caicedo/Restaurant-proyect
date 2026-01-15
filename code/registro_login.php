


<?php 
session_start();
include("conexion.php");

if (isset($_POST["enviar"])) {
    if (!empty($_POST["name"]) && !empty($_POST["past"])) {
        $name = trim($_POST["name"]);
        $past = trim($_POST["past"]);
        
        $_SESSION['name'] = $name;

        $conex = mysqli_connect("localhost", "root", "", "restaurante");

        if (!$conex) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        $consulta = "SELECT * FROM restaurante WHERE nombre='$name' AND contraseña='$past'";
        $resultado = mysqli_query($conex, $consulta);

        if (!$resultado) {
            die("Error en la consulta: " . mysqli_error($conex));
        }

        // Verificamos si encontró algún usuario
        if (mysqli_num_rows($resultado) == 1) {
            $filas = mysqli_fetch_array($resultado);

            if ($filas['id_restaurante'] == 4) {
                header("Location: menu.htm");
                exit;
            } elseif ($filas['id_restaurante'] == 7) {
                header("Location: mostrar.php");
                exit;
            } else {
                echo "<script>alert('Rol no reconocido.');</script>";
            }
        } else {
            echo "<script>alert('Credenciales incorrectas');</script>";
        }

        mysqli_free_result($resultado);
        mysqli_close($conex);
    } else {
        echo "<script>alert('Por favor, llena todos los campos.');</script>";
    }
}
?>
