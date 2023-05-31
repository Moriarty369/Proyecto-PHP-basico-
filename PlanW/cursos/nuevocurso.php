<?php
include_once '../conexion.php';


$nom=$_POST["nombre"];
$fi=$_POST["fecha_inicio"];
$ff=$_POST["fecha_fin"];
$sch=$_POST["horario"];
 /* <!--   1	id_curso Primaria	int(11)			No	Ninguna		AUTO_INCREMENT	Cambiar Cambiar	Eliminar Eliminar	
  2	nombre	varchar(200)	utf8mb4_general_ci		No	Ninguna			Cambiar Cambiar	Eliminar Eliminar	
  3	fecha_inicio	date			No	Ninguna			Cambiar Cambiar	Eliminar Eliminar	
  4	fecha_fin	date			No	Ninguna			Cambiar Cambiar	Eliminar Eliminar	
  5	horario	tinyint(1)			No	Ninguna			Cambiar Cambiar	Eliminar Eliminar	
-->*/
    try{
    $sql=("INSERT INTO cursos (nombre, fecha_inicio, fecha_fin, horario) values ('$nom','$fi','$ff','$sch')");

    $insertar=$conn->query($sql); 
    
        echo '<script language="javascript">alert("Curso creado");window.location.href="../index.php"</script>'; 
    }catch(PDOException $e){
        echo $e->getMessage();
        echo (int)$e->getLine();
    }
    
?>
