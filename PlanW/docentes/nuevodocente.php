<?php
include_once '../conexion.php';


    $dni=$_POST["DNI"];
    $nom=$_POST["nombre"];
    $ap1=$_POST["apellido1"];
    $ap2=$_POST["apellido2"];
    $email=$_POST["email"];
    $tlf=$_POST["telefono"];
    try{
    $sql=("INSERT INTO personas (DNI, nombre, apellido1, apellido2, email, telefono, cod_persona) values ('$dni','$nom','$ap1','$ap2','$email','$tlf',1)");

    $insertar=$conn->query($sql); 
    
        echo '<script language="javascript">alert("Docente creado");window.location.href="docentes.php"</script>'; 
    }catch(PDOException $e){
        echo $e->getMessage();
        echo (int)$e->getLine();
    }
    
?>
