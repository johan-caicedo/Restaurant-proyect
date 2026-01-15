<?php

include("conexion.php");
if ($conex) 
if (isset($_POST["reg_pedidos"]))
{
    if  (strlen($_POST["name"]) >= 1 && strlen($_POST["cedula"]) >= 1  && strlen($_POST["telefono"]) >= 1 && strlen($_POST["producto"]) >= 1){
        $name = trim($_POST["name"]);
        $cedula = trim($_POST['cedula']);
        $telefono = trim($_POST['telefono']); 
        $producto = trim($_POST['producto']);
       
       $consulta = "INSERT INTO cliente(Nombre, cedula, telefono, producto)
         VALUES ('$name','$cedula','$telefono','$producto')";
        
        
        $resultado = mysqli_query($conex,$consulta);

        if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Has realizado el pedido correctamente!</h3>
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