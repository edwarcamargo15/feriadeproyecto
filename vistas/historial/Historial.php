<?php
  session_start();

  if (!empty($_SESSION['active'])) {
     header("location: ../../../index.php");
  }

  
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Historial de eventos</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../dist/css/skins/skin-red.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="../inicio.php" class="logo">
       <span class="logo-mini"><b>F</b>U</span>
      <span class="logo-lg"><b>Feria</b>UFPS</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes notificaciones</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Prueba
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">Ver Todo</a></li>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../../dist/img/avatar5.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"> <?php echo $_SESSION['nombre']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../../dist/img/avatar5.png" class="img-circle" alt="User Image">
        <p>
                 <?php echo $_SESSION['nombre']; ?>
                </p>
              </li>
             <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="../Perfil.php" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="../index.php" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
         </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nombre']; ?></p>
          </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú</li>
        <li class="active"><a href="../inicio.php"><i class="fa fa-link"></i> <span>Inicio</span></a></li>
        <li><a href="../perfil.php"><i class="fa fa-link"></i> <span>Perfil</span></a></li>
        <li><a href="../eventosOfertados.php"><i class="fa fa-link"></i> <span>Eventos Ofertados</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Proyectos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../detalleProyectos.php">Crear Proyectos</a></li>
            <li><a href="../detalleEventos.php">Editar Proyectos</a></li>
          </ul>
        </li>
        <li><a href="Historial.php"><i class="fa fa-link"></i> <span>Historial</span></a></li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Historial
        <small>Eventos</small>
      </h1>
    </section>
    <section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Evento 1</h3>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th></th>
                  <td><img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"></td>
                </tr>
                <tr>
                  <th>Titulo</th>
                  <td>Feria de Proyectos 1.0</td>
                </tr>
                <tr>
                  <th>Fecha</th>
                  <td>31-08-2020</td>
                </tr>
                <tr>
                  <th>Más</th>
                  <td><a href="#">Ver Detalles</a></td>
                </tr>
              </table>
          </div>
      </div>
      </div>

      <br>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Evento 2</h3>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th></th>
                  <td><img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"></td>
                </tr>
                <tr>
                  <th>Titulo</th>
                  <td>Feria de Proyectos 2.0</td>
                </tr>
                <tr>
                  <th>Fecha</th>
                  <td>20-10-2020</td>
                </tr>
                <tr>
                  <th>Más</th>
                  <td><a href="#">Ver Detalles</a></td>
                </tr>
              </table>
          </div>
      </div>
      </div>

      <br>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Evento 3</h3>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th></th>
                  <td><img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"></td>
                </tr>
                <tr>
                  <th>Titulo</th>
                  <td>Feria de Proyectos 3.0</td>
                </tr>
                <tr>
                  <th>Fecha</th>
                  <td>10-11-2020</td>
                </tr>
               <tr>
                  <th>Más</th>
                  <td><a href="#">Ver Detalles</a></td>
                </tr>
              </table>
          </div>
      </div>
      </div>

    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Proyecto Seminario Integrador III
    </div>
    <strong>Copyright &copy; 2020 <a href="https://ww2.ufps.edu.co">Universidad Francisco de Paula Santander</a>.</strong> Todos los derechos reservados.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>