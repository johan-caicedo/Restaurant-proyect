<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/estilo_LOGIN.css"/>
    
    
    
    <style>
        body{
            background: linear-gradient(120deg,#BDC3C7, #E5E7E9) ;
            height: 100vh;}
    </style>
</head>
<body>
    <div class="formulario">
        <h1 style="color: rgb(0, 0, 0); " ><strong></strong>RESTAURANTE</h1>
        <h1 style="color: rgb(0, 0, 0); " ><strong>Los Pollos Hermanos</strong></h1>
        <h1 style="color: rgba(0, 0, 0, 0.789);"><strong>INICIO DE SESION</strong></h1>
        

        <form method="post" >
        <div class="labels">
            <input name="name" placeholder="nombre" type="text">
            
            <br>            
            <input name="past" placeholder="contraseña" type="password">
            <br>
           
            <input name="enviar" type="submit" >
        
        </div>
        </form>
         
            <div class="recordar" >Olvido contrasena?</div>
        </div>
         </div>
            <div class="contenedor">
            <img  src="../img/pollos_hermanos2.png  " >
    
    
            </div>
         </form>

         <?php
         include("registro_login.php"); 
         ?>
         
</body>
</html>
