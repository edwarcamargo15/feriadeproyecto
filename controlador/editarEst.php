<?php
	require '../aplicacion/feria.php';

	if(isset($_POST['nombre']) && isset($_POST['codigo']) && isset($_POST['cargo']) && isset($_POST['foto'])&& isset($_POST['telefono']) && isset($_POST['contrasena'])){
		
		$feria=new Feria();
		$feria->editarInformacion($_POST['nombre'], $_POST['codigo'], $_POST['cargo'], $_POST['foto'], $_POST['telefono'], $_POST['contrasena']);
	}
?>