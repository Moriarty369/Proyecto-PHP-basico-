<?php 
$id=$_POST["id_curso"];
$nom=$_POST["nombre"];
$fi=$_POST["fecha_inicio"];
$ff=$_POST["fecha_fin"];
$sch=$_POST["horario"];


include_once '../conexion.php';


try{
    $sql="UPDATE cursos SET  nombre=?, fecha_inicio=?, fecha_fin=?, horario=?,  WHERE id_curso=?";

    $actualizacion=$conn->prepare($sql);
    $actualizacion->execute(array( $nom, $fi, $ff, $sch, $id )); 
    
    echo '<script language="javascript">alert("Curso actualizado");window.location.href="cursos.php"</script>'; 
}catch(PDOException $e){
    echo $e->getMessage();
    echo (int)$e->getLine();
}

?>