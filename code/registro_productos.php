<?php

include("conexion.php");
if ($conex) 
if (isset($_POST["reg_productos"]))
{
    if  (strlen($_POST["name"]) >= 1 && strlen($_POST["tipo"]) >= 1  && strlen($_POST["precio"]) >= 1 ){
        $name = trim($_POST["name"]);
        $tipo = trim($_POST['tipo']);
        $precio = trim($_POST['precio']); 
       
       
        $consulta = "INSERT INTO producto(`nombre`, `tipo`, `precio`) VALUES ('$name','$tipo','$precio')";
        
       
       
        $resultado = mysqli_query($conex,$consulta);

        if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡has hecho tu pedido correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php

    
    }
}
?>