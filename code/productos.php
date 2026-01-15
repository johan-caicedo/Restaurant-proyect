<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilo_pagina.css?v=1.0">
</head>
<body>
<form method = post>
    
        <div class="formulario">
        <h1>nombre</h1>
        <input  name= 'name' type="text">
        </div>
        
        <div class="formulario">
        <h1>tipo</h1>
        <input name= 'tipo' type="text">
        </div>
        
        <div class="formulario">
        <h1>precio</h1>
        <input name= 'precio' type="text">
        </div>

        <div class="botones">
        <input type="submit" name= 'reg_productos'>
        </div>
        
</form>

<a href="../code/menu.htm" class="ov-btn-slide-top">regresar</a>
    <?php
         include("registro_productos.php"); 
         ?>

</body>
</html>