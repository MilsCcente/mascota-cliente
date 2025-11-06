<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acceso al Panel</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- SweetAlert -->
  <link href="<?php echo BASE_URL ?>src/views/pp/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

  <script>
    const base_url = '<?php echo BASE_URL; ?>';
    const base_url_server = '<?php echo BASE_URL_SERVER; ?>';
  </script>

  <style>
    /* Fondo degradado con ondas lilas */
    body {
      height: 100vh;
      background: radial-gradient(circle at top left, #d8b4fe, #b197fc, #a78bfa);
      background-attachment: fixed;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
    }

    /* Ondas animadas en el fondo */
    .wave {
      position: absolute;
      width: 200%;
      height: 200%;
      top: 0;
      left: -50%;
      background: radial-gradient(circle at 50% 50%, rgba(255,255,255,0.15), transparent 70%);
      animation: moveWave 6s infinite linear;
      z-index: 0;
    }

    @keyframes moveWave {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    /* Tarjeta de login con efecto glass */
    .login-glass {
      position: relative;
      z-index: 1;
      width: 100%;
      max-width: 380px;
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(20px);
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      padding: 2rem;
      color: white;
    }

    /* Encabezado */
    .login-glass h2 {
      text-align: center;
      font-weight: 600;
      color: #fff;
      margin-bottom: 1.5rem;
      letter-spacing: 1px;
    }

    /* Ícono superior */
    .icon-container {
      text-align: center;
      margin-bottom: 1rem;
    }

    .icon-container i {
      font-size: 4rem;
      color: #fff;
      text-shadow: 0 0 15px rgba(255,255,255,0.6);
    }

    /* Inputs */
    .form-control {
      background-color: rgba(255,255,255,0.2);
      border: none;
      color: #fff;
      border-radius: 10px;
      padding: 10px 12px;
      font-size: 15px;
    }

    .form-control:focus {
      background-color: rgba(255,255,255,0.3);
      box-shadow: 0 0 5px rgba(255,255,255,0.5);
      color: #fff;
    }

    ::placeholder {
      color: rgba(255,255,255,0.8);
    }

    /* Botón */
    .btn-lila {
      background: linear-gradient(135deg, #a855f7, #7c3aed);
      border: none;
      color: white;
      font-weight: 600;
      border-radius: 10px;
      padding: 10px;
      transition: all 0.3s ease;
      letter-spacing: 1px;
    }

    .btn-lila:hover {
      background: linear-gradient(135deg, #7c3aed, #6d28d9);
      transform: scale(1.03);
    }

    /* Pie de página */
    .login-glass p {
      text-align: center;
      font-size: 0.9rem;
      margin-top: 1.5rem;
      color: rgba(255,255,255,0.8);
    }

    @media (max-width: 480px) {
      .login-glass {
        margin: 0 1rem;
        padding: 1.5rem;
      }
    }
  </style>
</head>

<body>
  <div class="wave"></div>

  <div class="login-glass">
    <div class="icon-container">
      <i class="fa-solid fa-shield-halved"></i>
    </div>
    <h2>Acceso al Panel</h2>

    <form id="frmIniciar">
      <div class="mb-3">
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-lila">Entrar</button>
      </div>
    </form>
  </div>

  <!-- Scripts -->
  <script src="<?php echo BASE_URL; ?>src/views/js/funtions_login.js"></script>
  <script src="<?php echo BASE_URL ?>src/views/pp/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
