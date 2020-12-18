<?php
require 'conexion.php';

class Feria extends Conexion{
	function __construct(){
		parent::__construct();
	}

	function logear($codigo, $contrasena){
		session_start();

		$consulta="SELECT estudiante.id, estudiante.nombre, estudiante.codigo, estudiante.cargo, estudiante.foto, estudiante.telefono FROM estudiante WHERE estudiante.codigo='$codigo' AND estudiante.contrasena='$contrasena'";

		$info=$this->mysqli->query($consulta);
		$columnas=mysqli_num_rows($info);

		if($columnas>0){
			   $data=mysqli_fetch_array($info);
			   $SESSION['active']=true;
			   $_SESSION['id']=$data['id'];
            $_SESSION['nombre']=$data['nombre'];
            $_SESSION['codigo']=$data['codigo'];
            $_SESSION['cargo']=$data['cargo'];
            $_SESSION['foto']=$data['foto'];
            $_SESSION['telefono']=$data['telefono'];

            if ( $_SESSION['cargo']==1) {//student
                           
              header("location: ../vistas/perfil.php");
           }
           else if ( $_SESSION['cargo']==3) {//admin
              header("location: ../vistas/perfil.php");
           }else if ( $_SESSION['cargo']==2) {//teacher
              header("location: ../vistas/perfil.php");
           }
         }else if ( $_SESSION['cargo']==4) {//ponente
               header("location: ../vistas/perfil.php");
            
         }
         else{
            header("location: ../");
            session_destroy();
         }
    }
 

    function cargarCategoria(){
      $info="SELECT * FROM modalidad";

        $consulta=$this->mysqli->query($info);

        while ($valores = mysqli_fetch_array($consulta)) {
            echo '<option value="'.$valores['id'].'">'.$valores['descripcion'].'</option>';
        }
    }

    function cargarAsignatura(){
      $info="SELECT * FROM asignatura";

        $consulta=$this->mysqli->query($info);

        while ($valores = mysqli_fetch_array($consulta)) {
            echo '<option value="'.$valores['id'].'">'.$valores['descripcion'].'</option>';
        }
    }

    function registrarProyecto($titulo, $modalidad, $asignatura, $descripcion){
      $info="INSERT INTO proyecto (id, nombre, modalidad, asignatura, descripcion) 
        VALUES (0, '$titulo', $modalidad, $asignatura, '$descripcion')";
        
        $consulta=$this->mysqli->query($info);

        if($consulta==true){
         echo '<script languaje="javascript">alert("Registrado Correctamente");</script>';
         header('Location: ../vistas/detalleProyectos.php');
        }else{

        }

        
    }


    function registrarEstudiante($nombre, $codigo, $cargo, $foto,$telefono,$contrasena){
      $info="INSERT INTO estudiante (id, nombre, codigo, cargo, foto, telefono, contrasena) 
        VALUES (0, '$nombre', '$codigo', '$cargo', '$foto','$telefono','$contrasena')";
        
        $consulta=$this->mysqli->query($info);

        if($consulta==true){
         echo '<script languaje="javascript">alert("Registrado Correctamente");</script>';
         header('Location: ../index.php');
        }else{

        }

        
    }

    function editarInformacion($nombre, $codigo, $cargo, $foto,$telefono,$contrasena){
        $info="UPDATE estudiante e SET e.nombre='$nombre', e.codigo='$codigo', e.cargo='$cargo', e.foto='$foto', e.telefono='$telefono', e.contrasena='$contrasena' WHERE id=e.id";
         
        $consulta=$this->mysqli->query($info);
        console.log($info);
        header('Location: ../vistas/perfil.php');
    }


  function cargarCargo(){
        $info="SELECT * FROM estudiante WHERE id=estudiante.id";

        $consulta=$this->mysqli->query($info);

        while($valores = mysqli_fetch_array($consulta)){
            echo '<option value="'.$valores['id'].'">'.$valores['cargo'].'</option>';
        }
    }




     


}



?>