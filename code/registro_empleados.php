<?php

include("conexion.php");
if ($conex) {}
if (isset($_POST["reg_empleados"]))
{
    if  (strlen($_POST["name"]) >= 1 && strlen($_POST["cedula"]) >= 1  && strlen($_POST["telefono"]) >= 1 && strlen($_POST["especialidad"]) >= 1){
        $name = trim($_POST["name"]);
        $cedula = trim($_POST['cedula']);
        $telefono = trim($_POST['telefono']); 
        $especialidad = trim($_POST['especialidad']);
       
       $consulta = "INSERT INTO empleados(Nombre, cedula, telefono, especialidad)
         VALUES ('$name','$cedula','$telefono','$especialidad')";
        
        
        $resultado = mysqli_query($conex,$consulta);

        if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
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