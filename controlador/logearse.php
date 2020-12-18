<?php
	require '../aplicacion/feria.php';

	if(isset($_POST['codigo']) && isset($_POST['contrasena']) ){
		
		$feria=new Feria();
		$feria->logear($_POST['codigo'], $_POST['contrasena']);
	}
?>
