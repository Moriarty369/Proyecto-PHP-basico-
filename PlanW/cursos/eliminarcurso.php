<?php 

include_once '../conexion.php';

$IDcurso=$_GET["IDcurso"];

$eliminarcurso=$conn;
$eliminarcurso->query("DELETE FROM cursos WHERE id_curso='$IDcurso'");

if($eliminarcurso){
    echo '<script language="javascript">alert("Curso eliminado");window.location.href="cursos.php"</script>';
}



?>