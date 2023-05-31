<?php 

session_start();
	include_once 'conexion.php';
	$usuario = $_POST['user'];
	$contrasena = $_POST['password'];
	$inisesion = $conn->prepare("select usuario from admin_login where 
    admin_email = ? and password = ?;");
	$inisesion->execute([$usuario, $contrasena]);
	$datos = $inisesion->fetch(PDO::FETCH_OBJ);
	//print_r($datos);
    
	if ($datos === FALSE) {
		echo '<script language="javascript">alert("Usuario no existente");window.location.href="login.php"</script>';
       
	}elseif($inisesion->rowCount() == 1){
		$_SESSION['nombre'] = $datos->usuario;
		header('Location: index.php');
	}

?>