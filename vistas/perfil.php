<?php
session_start();

if (!empty($_SESSION['active'])) {
 header("location: ../index.php");
}

 require '../aplicacion/feria.php';
  $cargar=new Feria();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Datos Personales</title>
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
        Inicio
        <small>  </small> 
      </h1>
    </section>
    <section class="content container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Datos Personales</h3>

              <div class="pull-left image">
                <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image" align="center">
              </div>

              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">

                  <tr>
                   <th>Nombre</th>
                   <td><?php echo $_SESSION['nombre']; ?></td>
                 </tr>
                 <tr>
                   <th>Codigo</th>
                   <td><?php echo $_SESSION['codigo']; ?></td>
                 </tr>
                 <tr>
                   <th>Cargo</th>
                   <td><?php echo $_SESSION['cargo']; ?></td>
                 </tr>
                 <tr>
                   <th>Telefono</th>
                   <td><?php echo $_SESSION['telefono']; ?></td>
                 </tr>
                 
               </table>
               <div class="box-footer clearfix">
                <button type="button" class="btn btn-primary editbtn" data-toggle="modal" data-target="#editar" name="editar">
                  Editar
                </button>
                <!--btn btn-sm btn-info btn-flat pull-left-->
              </div>





              <!-- Modal -->
              <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                 
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Datos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          
                        </button>
                      </div>
                      <div class="modal-body">
                         <form role="form" action="/../controlador/editarEst.php" method="POST">

                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Codigo</label>
                            <input type="text" class="form-control" id="codigo" name="codigo" value="">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="nombre">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" >
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Contraseña</label>
                            <input type="text" class="form-control" id="contrasena" name="contrasena" >
                          </div>
                        </div>


                        <div class="form-row">
                          <div class="form-group col-md-6">
                           <label for="exampleFormControlFile1">Cargar Foto</label>
                           <input type="file" class="form-control-file" id="foto" name="foto">
                         </div>

                          <div class="form-group col-md-6">
                            <label for="nombre">Cargo</label>
                            <select class="form-control" id="cargo" name="cargo" >
                              <option ><?php echo $_SESSION['cargo']; ?></option>
                              <option></option>
                              <option></option>
                            </select>
                          </div>
                          
                       </div>
                      </form>
                     </div>
                     <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                  </div>
               
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
    <script>
      $('.editbtn').on('click',function(){
        $tr=$(this).closest('tr');
        var datos= $tr.children('td').map(function(){
          return $(this).text();
          console.log("pailas " + datos[0]);
        });
          console.log("haqui" + datos[2]);
     
        $('#nombre').val(datos[0]);
        $('#codigo').val(datos[1]);
         $('#cargo').val(datos[2]);
        $('#telefono').val(datos[3]);
        
       

      });
    </script>
  </body>
  </html>