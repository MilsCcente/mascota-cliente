<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel de Administración</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <style>
    body {
      background: #f9f5ff;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* 🔹 Topbar con degradado lila */
    .topbar {
      background: linear-gradient(90deg, #a855f7, #c084fc);
      color: white;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      border-bottom-left-radius: 20px;
      border-bottom-right-radius: 20px;
    }

    .topbar .brand {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 1.2rem;
      font-weight: bold;
    }

    .topbar .brand i {
      font-size: 1.5rem;
    }

    /* 🔹 Contenedor de botones */
    .topbar-buttons {
      display: flex;
      gap: 10px;
      align-items: center;
    }

    /* 🔹 Botón personalizado (degradado, redondeado) */
    .btn-topbar {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: white;
      color: #7e22ce;
      font-weight: 600;
      border: none;
      border-radius: 25px;
      padding: 8px 16px;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .btn-topbar:hover {
      background: #7e22ce;
      color: white;
      transform: translateY(-2px);
    }

    .card-custom {
      background: white;
      border-radius: 20px;
      padding: 2rem;
      max-width: 600px;
      margin: 2rem auto;
      box-shadow: 0 6px 15px rgba(0,0,0,0.05);
      transition: transform 0.2s ease-in-out;
    }

    .card-custom:hover {
      transform: translateY(-4px);
    }

    .btn-logout {
      background: #a855f7;
      border: none;
      color: white;
      border-radius: 30px;
      padding: 10px 20px;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-logout:hover {
      background: #9333ea;
      color: #fff;
    }
     /* 🔴 Botón de cerrar sesión */
     .btn-logout {
      background: #ef4444;
      color: white;
    }

    .btn-logout:hover {
      background: #dc2626;
      color: white;
    }

  </style>

  <script>
    const base_url = "<?php echo BASE_URL; ?>";

   // Cerrar sesión
   async function cerrar_sesion() {
      try {
        let respuesta = await fetch(base_url + 'src/controller/login.php?tipo=cerrar_sesion', {
          method: 'POST',
          mode: 'cors',
          cache: 'no-cache',
        });
        let json = await respuesta.json();
        if (json.status) {
          location.replace(base_url + 'login');
        } else {
          alert("No se pudo cerrar sesión correctamente.");
        }
      } catch (e) {
        console.error(e);
      }
    }
  </script>
  
</head>

<body>
  <!-- 🌸 Barra superior -->
  <div class="topbar">
    <div class="brand">
      <i class="bi bi-flower1"></i>
      <span>Panel Administrativo</span>
    </div>

    <!-- 🔹 Botones en la parte derecha -->
    <div class="topbar-buttons">
      <a href="<?php echo BASE_URL;?>api-request" class="btn-topbar">
        <i class="bi bi-cloud-arrow-down"></i> Consumo API
      </a>

      <a href="<?php echo BASE_URL;?>inicio" class="btn-topbar">
        <i class="bi bi-arrow-left-circle"></i> Regresar
      </a>
      <button class="btn-topbar btn-logout" onclick="cerrar_sesion()">
        <i class="bi bi-box-arrow-right"></i> Cerrar sesión
      </button>
    </div>
  </div>

  <!-- 🧠 Contenido principal -->
  <main class="content py-4">
    


