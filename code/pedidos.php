
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pedidos</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Animaciones -->
  <style>
    
  body {
    background-image: url('../img/3692584.jpg'); /* cambia la ruta si tu imagen está en otro lugar */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
  }

  .form-container {
    background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semi-transparente */
    backdrop-filter: blur(5px); /* efecto vidrio */
  }


    .form-container {
      max-width: 600px;
      margin: 40px auto;
      padding: 30px;
      background-color: #f8f9fa;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .form-label {
      font-weight: bold;
    }

    .btn-space {
      margin-right: 10px;
    }

    .btn-regresar {
      margin-top: 20px;
      display: inline-block;
      text-decoration: none;
    }
  </style>
</head>

<body class="bg-light">
  <div class="container">
    <div class="form-container">
      <h2 class="text-center mb-4">Realiza tu pedido</h2>

      <form method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-3">
          <label for="cedula" class="form-label">Cédula</label>
          <input type="text" class="form-control" name="cedula" id="cedula" required>
        </div>

        <div class="mb-3">
          <label for="telefono" class="form-label">Teléfono</label>
          <input type="text" class="form-control" name="telefono" id="telefono" required>
        </div>

        <div class="mb-3">
          <label for="producto" class="form-label">Producto</label>
          <input type="text" class="form-control" name="producto" id="producto" required>
        </div>

        <div class="d-flex justify-content-between mt-4">
          <button type="submit" class="btn btn-success btn-space" name="reg_pedidos">
            <i class="fas fa-paper-plane"></i> Pedir
          </button>
          <button type="reset" class="btn btn-warning btn-space">
            <i class="fas fa-eraser"></i> Restablecer
          </button>
          <a href="../index.htm" class="btn btn-secondary btn-space">
            <i class="fas fa-arrow-left"></i> Regresar
          </a>
        </div>
      </form>

      <?php include("registro_pedidos.php"); ?>
    </div>
  </div>

  <!-- Font Awesome para iconos -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <!-- Bootstrap JS opcional -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
