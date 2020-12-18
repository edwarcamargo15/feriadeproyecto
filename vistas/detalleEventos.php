<?php
  session_start();

  if (!empty($_SESSION['active'])) {
     header("location: ../../../index.php");
  }

  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Crear Proyecto</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-red.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="inicio.php" class="logo">
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
              <img src="../dist/img/avatar5.png" class="user-image" alt="User Image">
            

              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">
        <p><?php echo $_SESSION['nombre']; ?></p>
              </li>
             <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="Perfil.php" class="btn btn-default btn-flat">Perfil</a>
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
          <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nombre']; ?></p>
          </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú</li>
        <li class="active"><a href="inicio.php"><i class="fa fa-link"></i> <span>Inicio</span></a></li>
        <li><a href="perfil.php"><i class="fa fa-link"></i> <span>Perfil</span></a></li>
        <li><a href="eventosOfertados.php"><i class="fa fa-link"></i> <span>Eventos Ofertados</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Proyectos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="detalleProyectos.php">Crear Proyectos</a></li>
            <li><a href="detalleEventos.php">Editar Proyectos</a></li>
          </ul>
        </li>
       <li><a href="historial/Historial.php"><i class="fa fa-link"></i> <span>Historial</span></a></li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Editar
        <small>Proyecto</small>
      </h1>
    </section>
    <section class="content container-fluid">
		<div class="pad margin no-print">
			<div class="callout callout-info" style="margin-bottom: 0!important;">
				<h4><i class="fa fa-info"></i> Nota:</h4>
				Tenga cuenta que al editar los datos, los cambios serán permanentes si guarda.
			</div>
		</div>
		<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del Proyecto</h3>
            </div>
            <div class="box-body">
              <form role="form">
                <div class="form-group">
                  <label>Título</label>
                  <input type="text" class="form-control" placeholder="Título">
                </div>
                <div class="form-group">
                  <label>Categorias</label>
                  <select class="form-control">
                    <option>Categoria 1</option>
                    <option>Categoria 2</option>
                    <option>Categoria 3</option>
                    <option>Categoria 4</option>
                    <option>Categoria 5</option>
                  </select>
                </div>
				<div class="form-group">
                 <label>Descripción</label>
				 <textarea class="form-control" rows="3" placeholder="Describa su proyecto..."></textarea>
			    </div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Guardar</button>
                </div>
			</div>
		</div>	
    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Proyecto BBDD
    </div>
    <strong>Copyright &copy; 2018 <a href="https://ww2.ufps.edu.co">Universidad Francisco de Paula Santander</a>.</strong> Todos los derechos reservados.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>