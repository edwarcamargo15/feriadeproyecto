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
  <title>Inicio</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-red.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
        <p>
                  <?php echo $_SESSION['nombre']; ?>
                </p>
              </li>
             <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="Perfil.php" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <form action="../controlador/salir.php">
                    <button type="submit" class="btn btn-default btn-flat">Salir</button>
                  </form>
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
        Feria De Proyectos
        <small> Ing Sistemas - UFPS </small> 
      </h1>
    </section>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Feria De Proyectos</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>

              <div class="box-body">
                <div class="row">
                  <div class="col-md-8">


    <section class="content container-fluid">
    <div class="row" width:100%; >
         <div class="col-lg-12 col-xs-3 "width:100%; >
          <div class="box box-solid"width:100%; >
            <div class="box-body" width:100%;>
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" width:100%;>
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner" >
                  <div class="item active">
                    <img src="../img/1.jpg" alt="First slide">

                    <div class="carousel-caption">
                      First Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="../img/2.jpg" alt="Second slide">

                    <div class="carousel-caption">
                      Second Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="../img/3.jpg" alt="Third slide">

                    <div class="carousel-caption">
                      Third Slide
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
          </div>
          </div>
        </div>
    </section>


                  </div>
                </div>
              </div>

              <section class="content">
      <div class="row" >
        <div class="col-lg-3 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-aqua" >
            <div class="inner" >
              <h3>Eventos</h3>

              <p>Nuevos eventos</p>
            </div>
            <div class="icon">
              <!--<i class="ion ion-bag"></i>-->
            </div>
            <a href="../vistas/eventosOfertados.php" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Proyectos</h3>
              <p>Proyectos Nuevos</p>
            </div>
            <div class="icon">
              <!--<i class="ion ion-stats-bars"></i>-->
            </div>
            <a href="detalleProyectos.php" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </section>


            </div>
          </div>
        </div>
      </div>

  </div>

       

              
          
            <!-- /.box-header -->

       
          



    





    
  
  <footer class="main-footer">
    
    <strong>Copyright &copy; 2018 <a href="https://ww2.ufps.edu.co">Universidad Francisco de Paula Santander</a>.</strong> Todos los derechos reservados.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>