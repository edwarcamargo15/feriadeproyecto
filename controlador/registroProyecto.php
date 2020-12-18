<?php
	require '../aplicacion/feria.php';

	if(isset($_POST['titulo']) && isset($_POST['categoria']) && isset($_POST['asignatura']) && isset($_POST['descripcion']) ){
		
		$feria=new Feria();
		$feria->registrarProyecto($_POST['titulo'], $_POST['categoria'], $_POST['asignatura'], $_POST['descripcion']);
	}
?>