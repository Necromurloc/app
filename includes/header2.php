<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="CDRA es una herramienta de rastreo de rutas asignadas de facil manejo, creado con MariaDB, PHP, JQuery y Html5 ." />
  <meta name="author" content="xxledgerxx@gmail.com">
  <meta name="keywords" content="CDRA, apache, php, perl, mariadb" />

  <title>winscdra.ddns.org</title>

  <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <script src="../public/js/modernizr.js" type="text/javascript"></script>
  <script src="../public/assets/js/ie-emulation-modes-warning.js"></script>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../public/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    
  <!-- Todo el estilo -->
  <link rel="stylesheet" type="text/css" href="../public/css/signin.css">
  <link rel="stylesheet" type="text/css" href="../public/css/register.css">
  <link rel="stylesheet" type="text/css" href="../public/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../public/css/all.css">
  <link rel="stylesheet" type="text/css" href="../public/jquery-ui/jquery-ui.css">
    
  <link href="favicon.png" rel="icon" type="image/png" />

</head>

<body class="index">
  <div class="contain-to-grid">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="logo"><img src="../public/img/logo.png" height="30px"></li>
        <!-- <li class="name"><h1><a href="/app/index.php">CDRA</a></h1></li> -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <!-- Right Nav Section -->
      <section class="top-bar-section">

        <ul class="right">
          <li class=""><a href="/applications.php">Aplicaciones</a></li>
          <li class=""><a href="/faq.php">FAQ's</a></li>
          <li class=""><a href="/howto.php">Guías</a></li>
          <li class=""><a href="/phpmyadmin/">phpMyAdmin</a></li>
          <li class=""><a>Bienvenido, <span><?php echo $_SESSION['session_username'];?>! </span></a></li>
          <li class=""><a href="logout.php">Salir</a></li>
        </ul>
      </section> <!-- ToDo -->

    </nav>
  </div>