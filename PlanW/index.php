<?php 
require_once 'header.php';
require_once 'sidebar.php';
include_once 'conexion.php';



	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}/* elseif(isset($_SESSION['nombre'])){
        $email= $_SESSION['nombre'];
		$sentencia = $conn->query("SELECT * FROM cenesgetafe WHERE admin_email = $email ;");
		$admin = $sentencia->fetchAll(PDO::FETCH_OBJ);
		
	}else{
		echo "Error en el sistema";
	} */

?>



<h1>Hola <?php echo ($_SESSION['nombre']) ?></h1>
<div class="contenedor">
  <div class="col-md-8 offset-md-2">
    <div id='calendar'></div>
  </div>
</div>

<div class="d-grid gap-2 col-4 mx-auto">
  <a href="leer.php">
  <input class="btn btn-mycolor btn-lg" type="button" value="Introducir datos de alumnos y docentes" >
  </a>
</div>
<script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale:"es",
          headerToolbar:{
            left:'prev,next,today',
            center:'title',
            right:'dayGridMonth,timeGridWeek,timeGridDay'
          }
        });
        calendar.render();
      });

    </script>




<?php require_once 'footer.php';?>
