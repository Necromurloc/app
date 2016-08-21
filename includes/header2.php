<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="CDRA is an easy route track, containing MariaDB, PHP and Perl." />
  <meta name="author" content="Jesús A. Gómez G.">
  <meta name="keywords" content="CDRA, apache, php, perl, mariadb" />

  <title>winscdra.ddns.org</title>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../public/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    
    <!-- Todo el estilo -->
    <link href="../public/css/signin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../public/css/register.css">
    <link href="../public/css/all.css" rel="stylesheet">
    <!-- <link href="../public/css/bootstrap.css" rel="stylesheet"> -->
    
  <link href="favicon.png" rel="icon" type="image/png" />

</head>

<body>
  <div class="contain-to-grid">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="/app/index.php">CDRA</a></h1>
        </li>
        <li class="toggle-topbar menu-icon">
          <a href="#">
            <span>Menu</span>
          </a>
        </li>
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