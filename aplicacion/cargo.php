<?php
require 'conexion.php';

class Cargo extends Conexion{
	function __construct(){
		parent::__construct();
	}

    function cargarCargo(){
      $rpta="";
      $info="SELECT * FROM cargo where descripcion <> 'Administrador'";

        $consulta=$this->mysqli->query($info);

        while ($valores = mysqli_fetch_array($consulta)) {
            
            $id = $valores['id'];
            $descripcion = $valores['descripcion'];
            $rpta .= "{
                \"id\":\"{$id}\",
                \"descripcion\":\"{$descripcion}\"
            },";
            
        }

        if($rpta!=""){
            $rpta = substr($rpta,0,-1);
            echo "{\"cargos\":[{$rpta}]}";
        }else{
            echo "{\"mensaje\":['Error en la consulta de campos']}";
        }
    
    }

}
?>