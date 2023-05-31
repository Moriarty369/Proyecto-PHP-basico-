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
    <div class="main-container d-flex">
        <div class="sdb-sidebar p-3" id="sdb-side_nav">
            <div class="header-box">
                <h2 class="fs-4">
                    <span class="text-black">Cenes Getafe</span>
                </h2>
            </div>
            <hr class="sdb-h-color">
            <ul class="nav nav-pills flex-column mb-auto sdb-Chactive">
                <li class="nav-item " id="activadoindex">
                    <a href="../index.php" class="nav-link link-dark" aria-current="page">
                        <i class="fa-solid fa-house">
                            <use xlink:href="index.php"></use>
                        </i>
                        Inicio</a>
                </li>
                <li class="nav-item " id="activadocursos">
                    <a href="../cursos/cursos.php" class="nav-link link-dark" aria-current="page">
                        <i class="fa-solid fa-school"></i>
                        Cursos</a>
                </li>
                <li class="nav-item" id="activadoestudiantes">
                    <a href="../alumnos/alumnos.php" class="nav-link link-dark" aria-current="page">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Estudiantes</a>
                </li>
                <li class="nav-item" id="activadocentes">
                    <a href="../docentes/docentes.php" class="nav-link link-dark" aria-current="page">
                        <i class="fa-solid fa-user-tie"></i>
                        Docentes</a>
                </li>
                <li class="nav-item active" id="activadorelaciones">
                    <a href="/relacion.php" class="nav-link link-dark" aria-current="page">
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
            <div class="sdb-content py-4 px-5">




                <?php
                $cursos = $conn->query("SELECT * FROM cursos  ")->fetchAll(PDO::FETCH_OBJ);
                $personas = $conn->query("SELECT * FROM personas")->fetchAll(PDO::FETCH_OBJ);
                $docentes = $conn->query("SELECT * FROM personas where cod_persona = 1 ")->fetchAll(PDO::FETCH_OBJ);
                ?>

                


                    <h1>Relaciones curso personas</h1>

                    <table class="table" id="tablerelaciones">
                        <thead>
                            <tr>

                                <th scope="col">Curso</th>
                                <th scope="col">Persona</th>
                                <th scope="col">Rol</th>
                            </tr>
                        </thead>
                        <tbody>


                            <form action="nuevorelacion.php" method="post">
                                <tr>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_curso">
                                            <?php foreach ($cursos as $curso) : ?>
                                                <option value="<?php echo $curso->id_curso; ?>"><?php echo $curso->nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_persona">
                                            <?php foreach ($personas  as $persona) : ?>
                                                <option value="<?php echo $persona->id_persona; ?>"><?php echo $persona->nombre; ?>&nbsp;<?php echo $persona->apellido1; ?>&nbsp;<?php echo $persona->apellido2; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select " aria-label=".  example" name="rol">
                                            <option value="0">Alumno</option>
                                            <option value="1">Docente</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_curso">
                                            <?php foreach ($cursos as $curso) : ?>
                                                <option value="<?php echo $curso->id_curso; ?>"><?php echo $curso->nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_persona">
                                            <?php foreach ($personas  as $persona) : ?>
                                                <option value="<?php echo $persona->id_persona; ?>"><?php echo $persona->nombre; ?>&nbsp;<?php echo $persona->apellido1; ?>&nbsp;<?php echo $persona->apellido2; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="rol">
                                            <option value="0">Alumno</option>
                                            <option value="1">Docente</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_curso">
                                            <?php foreach ($cursos as $curso) : ?>
                                                <option value="<?php echo $curso->id_curso; ?>"><?php echo $curso->nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_persona">
                                            <?php foreach ($personas  as $persona) : ?>
                                                <option value="<?php echo $persona->id_persona; ?>"><?php echo $persona->nombre; ?>&nbsp;<?php echo $persona->apellido1; ?>&nbsp;<?php echo $persona->apellido2; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="rol">
                                            <option value="0">Alumno</option>
                                            <option value="1">Docente</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_curso">
                                            <?php foreach ($cursos as $curso) : ?>
                                                <option value="<?php echo $curso->id_curso; ?>"><?php echo $curso->nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_persona">
                                            <?php foreach ($personas  as $persona) : ?>
                                                <option value="<?php echo $persona->id_persona; ?>"><?php echo $persona->nombre; ?>&nbsp;<?php echo $persona->apellido1; ?>&nbsp;<?php echo $persona->apellido2; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="rol">
                                            <option value="0">Alumno</option>
                                            <option value="1">Docente</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_curso">
                                            <?php foreach ($cursos as $curso) : ?>
                                                <option value="<?php echo $curso->id_curso; ?>"><?php echo $curso->nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_persona">
                                            <?php foreach ($personas  as $persona) : ?>
                                                <option value="<?php echo $persona->id_persona; ?>"><?php echo $persona->nombre; ?>&nbsp;<?php echo $persona->apellido1; ?>&nbsp;<?php echo $persona->apellido2; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="rol">
                                            <option value="0">Alumno</option>
                                            <option value="1">Docente</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_curso">
                                            <?php foreach ($cursos as $curso) : ?>
                                                <option value="<?php echo $curso->id_curso; ?>"><?php echo $curso->nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_persona">
                                            <?php foreach ($personas  as $persona) : ?>
                                                <option value="<?php echo $persona->id_persona; ?>"><?php echo $persona->nombre; ?>&nbsp;<?php echo $persona->apellido1; ?>&nbsp;<?php echo $persona->apellido2; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="rol">
                                            <option value="0">Alumno</option>
                                            <option value="1">Docente</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_curso">
                                            <?php foreach ($cursos as $curso) : ?>
                                                <option value="<?php echo $curso->id_curso; ?>"><?php echo $curso->nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_persona">
                                            <?php foreach ($personas  as $persona) : ?>
                                                <option value="<?php echo $persona->id_persona; ?>"><?php echo $persona->nombre; ?>&nbsp;<?php echo $persona->apellido1; ?>&nbsp;<?php echo $persona->apellido2; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="rol">
                                            <option value="0">Alumno</option>
                                            <option value="1">Docente</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_curso">
                                            <?php foreach ($cursos as $curso) : ?>
                                                <option value="<?php echo $curso->id_curso; ?>"><?php echo $curso->nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_persona">
                                            <?php foreach ($personas  as $persona) : ?>
                                                <option value="<?php echo $persona->id_persona; ?>"><?php echo $persona->nombre; ?>&nbsp;<?php echo $persona->apellido1; ?>&nbsp;<?php echo $persona->apellido2; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="rol">
                                            <option value="0">Alumno</option>
                                            <option value="1">Docente</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_curso">
                                            <?php foreach ($cursos as $curso) : ?>
                                                <option value="<?php echo $curso->id_curso; ?>"><?php echo $curso->nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_persona">
                                            <?php foreach ($docentes   as $docente) : ?>
                                                <option value="<?php echo $docente->id_persona; ?>"><?php echo $docente->nombre; ?>&nbsp;<?php echo $docente->apellido1; ?>&nbsp;<?php echo $docente->apellido2; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="rol">
                                            <option value="1">Docente</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="id_curso" >
                                            <?php foreach ($cursos as $curso) : ?>
                                                <option value="<?php echo $curso->id_curso; ?>"><?php echo $curso->nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select form-select-md" aria-label=".  example" name="id_persona">
                                            <?php foreach ($docentes   as $docente) : ?>
                                                <option value="<?php echo $docente->id_persona; ?>"><?php echo $docente->nombre; ?>&nbsp;<?php echo $docente->apellido1; ?>&nbsp;<?php echo $docente->apellido2; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label=".  example" name="rol">
                                            <option value="1">Docente</option>
                                        </select>
                                    </td>
                                </tr>

                            
                        </tbody>
                    </table>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input class="btn btn-mycolor btn-lg" type="submit" value="Submit" >
                    </div>
                    

                    </form>





                    <?php
                    require_once '../footer.php';
                    ?>