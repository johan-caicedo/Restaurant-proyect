<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilo_pagina.css?v=1.0">
</head>
<body>
<form method = 'post'>
    <div class="formulario">
        <h1>nombre</h1>
        <input name= 'name' type="text">
    </div>
        <div class="formulario">
        <h2>cedula</h2>
        <input name = 'cedula'type="text">
    </div>
        <div class="formulario">
        <h3>telefono</h3>
        <input name = 'telefono' type="text">
    </div>
        
    
    <div class="formulario">
        <input type="submit"  name= "reg_proveedor">
    </div>
    <a href="../code/menu.htm" class="ov-btn-slide-top">regresar</a>
</form>

    <?php
         include("registro_proveedor.php"); 
         ?>

</body>
</html>