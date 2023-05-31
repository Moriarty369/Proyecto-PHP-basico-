<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="js/myScript.js"></script>
    <script src="https://kit.fontawesome.com/40b1654123.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Educa Chachi</title>
</head>
<body>
    <div class="main-container d-flex" >
    <div class="sdb-sidebar p-3" id="sdb-side_arrow">
    <div class="header-box">
    <a href="cursos.php" class="nav-link link-dark" aria-current="page">
    <i class="fa-regular fa-hand-point-left" id="manito"></i>
    </a>
    </div>
    
    </div>
        <div class="contentfooter">
        <div class="sdb-content p-2" >
        
    

<h1>ACTUALIZAR CURSOS</h1>

<?php 

  include_once '../conexion.php';

  if (!isset ($_POST["act_alumno"])){
  $id=$_GET["ID"];
  $nom=$_GET["NOM"];
  $fi=$_GET["FI"];
  $ff=$_GET["FF"];
  $sch=$_GET["SCH"];

  }

?>

  <table class="table">
  <form action="cursoeditado.php" method="post"> 
    <tr>
      <th scope="col">#</th>
      <td><input type='number' name='id_curso' value="<?php echo $id; ?>" readonly ></td>
    </tr>
    <tr>
      <th scope="col">Nombre</th>
      <td><input type='text' name='nombre' value="<?php echo $nom; ?>" required></td>
    </tr>
    <tr>
      <th scope="col">Fecha inicio</th>
      <td><input type='date' name='fecha_inicio' value="<?php echo $fi; ?>" required></td>
    </tr>
    <tr>
      <th scope="col">Fecha fin</th>
      <td><input type='date' name='fecha_fin' value="<?php echo $ff; ?>" ></td>
    </tr>
    <tr>
      <th scope="col">Horario</th>
      <td><input type='number' name='horario' value="<?php echo $sch; ?>" required></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="act_alumno"  value="Actualizar"></td>
    </tr>

  </table>
</form>

<?php require_once '../footer.php';?>