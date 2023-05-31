<?php 

include_once 'conexion.php';

$IDalumno=$_GET["IDalumno"];

$eliminaralumno=$conn;
$eliminaralumno->query("DELETE FROM PERSONAS WHERE id_persona='$IDalumno'");

if($eliminaralumno){
    echo '<script language="javascript">alert("Alumni eliminado");window.location.href="index.php"</script>';
}



?>