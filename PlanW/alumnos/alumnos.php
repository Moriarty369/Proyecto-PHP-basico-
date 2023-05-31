
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
        <li class="nav-item" id="activadocursos" >
            <a href="../cursos/cursos.php" class="nav-link link-dark" aria-current="page">
                <i class="fa-solid fa-school"></i>
                Cursos</a>
        </li>
        <li class="nav-item active" id="activadoestudiantes" >
            <a href="alumnos.php" class="nav-link link-dark" aria-current="page">
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

  $size_paginas=5;
  if(isset($_GET["pagina"])){
      if($_GET["pagina"]==1){
        header("Location:alumnos.php");

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


  $alumnos = $conn->query("SELECT * FROM personas where cod_persona = 0 LIMIT $empezar_desde,$size_paginas")->fetchAll(PDO::FETCH_OBJ);

  /* $alumnos = $conn->query("SELECT * FROM personas where cod_persona = 0 ")->fetchAll(PDO::FETCH_OBJ); */
?>




<h1>Alumnos</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">DNI</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido 1</th>
      <th scope="col">Apellido 2</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>

<?php 
  foreach($alumnos as $alumno):
?>
    <tr>
      <th scope="row"><?php echo $alumno->id_persona; ?></th>
      <td><?php echo $alumno->DNI; ?></td>
      <td><?php echo $alumno->nombre; ?></td>
      <td><?php echo $alumno->apellido1; ?></td>
      <td><?php echo $alumno->apellido2; ?></td>
      <td><?php echo $alumno->email; ?></td>
      <td><?php echo $alumno->telefono; ?></td>
      <td><a href="eliminaralumno.php?IDalumno=<?php echo $alumno->id_persona; ?>"><span class="material-symbols-outlined">delete_forever</span></a></td>
      <td><a href="editarAlumnos.php?ID=<?php echo $alumno->id_persona; ?>& DNI=<?php echo $alumno->DNI; ?>& NOM=<?php echo $alumno->nombre;?> & AP1=<?php echo $alumno->apellido1; ?>& AP2=<?php echo $alumno->apellido2; ?>& EMAIL=<?php echo $alumno->email; ?>& TLF=<?php echo $alumno->telefono; ?>"><span class="material-symbols-outlined">edit</span></a></td>
    </tr>

<?php endforeach;?>
  <tr> 

    <form action="nuevoalumno.php" method="post">
      <th scope="row"><p>AI</p></th>
      <td><input type='text' name='DNI' ></td>
      <td><input type='text' name='nombre' ></td>
      <td><input type='text' name='apellido1' ></td>
      <td><input type='text' name='apellido2' ></td>
      <td><input type='email' name='email' ></td>
      <td><input type="tel" name="telefono"  ></td>
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
<?php require_once '../footer.php';?>