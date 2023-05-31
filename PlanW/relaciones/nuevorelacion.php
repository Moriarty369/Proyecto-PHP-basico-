
<?php 
$id_curso=$_POST["id_curso"];
$id_persona=$_POST["id_persona"];
$rol=$_POST["rol"];




include_once '../conexion.php';


try{
    
    $sql=("INSERT INTO rl_curso_persona (id_curso, id_persona, rol, alta, baja) values ('$id_curso','$id_persona','$rol',now(),null)");


    $insertar=$conn->query($sql); 
    
    echo '<script language="javascript">alert("Relaciones creadas");window.location.href="../relaciones.php"</script>'; 
}catch(PDOException $e){
    echo $e->getMessage();
    echo (int)$e->getLine();
}

?>