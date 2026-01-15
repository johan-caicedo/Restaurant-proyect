<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilo_pagina.css?v=1.0">
</head>
<body>
    <form  method = post>  
    <div class="formulario">
        <h1>nombre</h1>
        <input name = "name" type="text">
    </div>
        <div class="formulario">
        <h1>cedula</h1>
        <input name = "cedula" type="text">
    </div>
        <div class="formulario">
        <h1>telefono</h1>
        <input name = "telefono" type="text">
    </div>
        <div class="formulario">
        <h1>especialidad</h1>
        <input name = "especialidad" type="text">
     </div>
    
    <div class="botones">
        <input type="submit" name = "reg_empleados">
        
    </div>

    <a href="../code/menu.htm" class="ov-btn-slide-top">regresar</a>
</form>

    <?php
         include("registro_empleados.php"); 
         ?>

</body>
</html>