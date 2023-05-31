<?php
include_once '../conexion.php';

$id=$_POST['id_persona'];
    $dni=$_POST["DNI"];
    $nom=$_POST["nombre"];
    $ap1=$_POST["apellido1"];
    $ap2=$_POST["apellido2"];
    $email=$_POST["email"];
    $tlf=$_POST["telefono"];
    try{
    $sql="UPDATE personas SET DNI=?, nombre=?, apellido1=?, apellido2=?, email=?, telefono=? WHERE id_persona=?";

    $actualizacion=$conn->prepare($sql);
    $actualizacion->execute(array($dni, $nom, $ap1, $ap2, $email, $tlf, $id )); 
    
        echo '<script language="javascript">alert("Alumno actualizado");window.location.href="alumnos.php"</script>'; 
    }catch(PDOException $e){
        echo $e->getMessage();
        echo (int)$e->getLine();
    }
    
    
?>