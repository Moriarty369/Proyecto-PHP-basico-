
<?php 

session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}

require_once '../header.php';
include_once '../conexion.php';
?>
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js"></script>
</head>
<body>
    <div class="main-container d-flex" >
    <div class="sdb-sidebar p-3" id="sdb-side_nav">
    <div class="header-box">
        <h2 class="fs-4">
        <span class="text-black">Cenes Getafe</span>
        </h2>
    </div>
    <hr class="sdb-h-color">
    <ul class="nav nav-pills flex-column mb-auto sdb-Chactive">
        <li class="nav-item " id="activadoindex" >
            <a href="../index.php" class="nav-link link-dark" aria-current="page" >
                <i class="fa-solid fa-house"><use xlink:href="index.php"></use></i>
                Inicio</a>
        </li>
        <li class="nav-item active" id="activadocursos" >
            <a href="cursos.php" class="nav-link link-dark" aria-current="page">
                <i class="fa-solid fa-school"></i>
                Cursos</a>
        </li>
        <li class="nav-item" id="activadoestudiantes" >
            <a href="../alumnos/alumnos.php" class="nav-link link-dark" aria-current="page">
                <i class="fa-solid fa-graduation-cap"></i>
                Estudiantes</a>
        </li>
        <li class="nav-item" id="activadocentes" >
            <a href="../docentes/docentes.php" class="nav-link link-dark" aria-current="page">
                <i class="fa-solid fa-user-tie"></i>
                Docentes</a>
        </li>
        <li class="nav-item" id="activadorelaciones" >
            <a href="../relaciones/relacion.php" class="nav-link link-dark" aria-current="page">
                <i class="fa-solid fa-puzzle-piece"></i>
                Relaciones</a>
        </li>
    </ul>
    <hr class="sdb-h-color">
    <ul class="nav nav-pills flex-column mb-auto" id="menufondo">
        <li class="nav-item dfc">
        <div>
            <input type="checkbox" class="checkbox" id="checkbox">
            <label for="checkbox" class="label">
                <i class="fas fa-moon"></i>
                <i class='fas fa-sun'></i>
                <div class='ball'>
            </label>
        </div>
        </li>
        <hr class="sdb-h-color">
        <li class="nav-item">
            <a href="../cerrar.php" class="nav-link link-dark" aria-current="page">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                Cerrar sesión</a>
        </li>
    </ul>
</div>
        <div class="contentfooter">
        <div class="sdb-content py-4 px-5" >

<?php

  /*  Paginacion */

  $size_paginas=12;
  if(isset($_GET["pagina"])){
      if($_GET["pagina"]==1){
        header("Location:cursos.php");

      }else{
        $pagina=$_GET["pagina"];
      }

  }else{

    $pagina=1;
  }

  $empezar_desde=($pagina-1)*$size_paginas;

  $sql_total="SELECT * FROM PERSONAS";

  $resultadopag=$conn->prepare($sql_total);
  $resultadopag->execute(array());

  $num_filas=$resultadopag->rowCount();
  $total_paginas=ceil($num_filas/$size_paginas);


  /* fin paginacion */


  $cursos = $conn->query("SELECT * FROM cursos  LIMIT $empezar_desde,$size_paginas")->fetchAll(PDO::FETCH_OBJ);
 /*  $cursos = $conn->query("SELECT * FROM cursos  ")->fetchAll(PDO::FETCH_OBJ); */

?>




<h1>Cursos</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha de inicio</th>
      <th scope="col">Fecha fin</th>
      <th scope="col">Horario</th>
    </tr>
  </thead>
  <tbody>
<!--   1	id_curso Primaria	int(11)			No	Ninguna		AUTO_INCREMENT	Cambiar Cambiar	Eliminar Eliminar	
	2	nombre	varchar(200)	utf8mb4_general_ci		No	Ninguna			Cambiar Cambiar	Eliminar Eliminar	
	3	fecha_inicio	date			No	Ninguna			Cambiar Cambiar	Eliminar Eliminar	
	4	fecha_fin	date			No	Ninguna			Cambiar Cambiar	Eliminar Eliminar	
	5	horario	tinyint(1)			No	Ninguna			Cambiar Cambiar	Eliminar Eliminar	
 -->
<?php 
  foreach($cursos as $curso):
?>
    <tr>
      <th scope="row"><?php echo $curso->id_curso; ?></th>
      <td><?php echo $curso->nombre; ?></td>
      <td><?php echo $curso->fecha_inicio; ?></td>
      <td><?php echo $curso->fecha_fin; ?></td>
      <td><?php echo $curso->horario; ?></td>
      <td><a href="eliminarcurso.php?IDcurso=<?php echo $curso->id_curso; ?>"><span class="material-symbols-outlined">delete_forever</span></a></td>
      <td><a href="editarcurso.php?ID=<?php echo $curso->id_curso; ?>& NOM=<?php echo $curso->nombre;?> & FI=<?php echo $curso->fecha_inicio; ?>& FF=<?php echo $curso->fecha_fin; ?>& SCH=<?php echo $curso->horario; ?>"><span class="material-symbols-outlined">edit</span></a></td>
    </tr>

<?php endforeach;?>
  <tr> 

    <form action="nuevocurso.php" method="post">
      <th scope="row"><p>AI</p></th>
      <td><input type='text' name='nombre' ></td>
      <td><input type='date' name='fecha_inicio' ></td>
      <td><input type='date' name='fecha_fin' ></td>
      <td><input type="number" name="horario"  ></td>
      <td><input type="submit" value="&#10148;" name="send_alumno"/></td>
    </form> 
    
    </tr> 
  </tbody>
</table>

      
<div class="paginacion">
<?php 

for($i=1; $i<=$total_paginas;$i++){
  echo "<a href='?pagina=".$i."'>".$i."&nbsp;</a>";
}

?>

</div>
<?php 
require_once '../footer.php';
?>