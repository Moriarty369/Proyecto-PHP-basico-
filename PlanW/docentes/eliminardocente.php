<?php 

include_once 'conexion.php';

$IDdocente=$_GET["IDdocente"];

$eliminardocente=$conn;
$eliminardocente->query("DELETE FROM PERSONAS WHERE id_persona='$IDdocente'");

if($eliminardocente){
    echo '<script language="javascript">alert("Docente eliminado");window.location.href="index.php"</script>';
}

?>