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

    /* Topbar con degradado lila */
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

    .profile {
      display: flex;
      align-items: center;
      gap: 10px;
      background: rgba(255,255,255,0.2);
      padding: 6px 12px;
      border-radius: 20px;
      backdrop-filter: blur(10px);
    }

    .profile-img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid white;
    }

    .username {
      font-weight: 600;
    }

    .user-role {
      font-size: 0.8rem;
      opacity: 0.9;
    }

    /* Contenido principal */
    main {
      flex: 1;
      padding: 2rem;
      text-align: center;
      color: #333;
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

  

  </style>

  <script>
    const base_url = "<?php echo BASE_URL; ?>";
  </script>
</head>

<body>
  <!-- Barra superior -->
  <div class="topbar">
    <div class="brand">
      <i class="bi bi-flower1"></i>
      <span>Panel Administrativo</span>

      <a href="<?php echo BASE_URL;?>api-request">Consumo Api</a>
    </div>

   
  </div>



      <!-- Contenido principal -->
      <div class="content py-4">
        
