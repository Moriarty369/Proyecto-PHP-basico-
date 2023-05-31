<?php include_once 'header.php'; ?>
<link rel="stylesheet" href="style.css">
    <title>Educa Chachi</title>
</head>

<?php
require("conexion.php");
?>
<?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
		header('Location: index.php');
	}
?>

<section class="vh-100" id="login">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <?php include_once 'animacionlogin.php'; ?>
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

        <form method="POST" action="loginproceso.php">
          <div class="d-flex flex-row align-items-centerjustify-content-center justify-content-lg-center justify-content-sm-center justify-content-xs-center" >
            <p class="lead fw-normal mb-0 me-3" >Area Administrativo</p>
            
          </div>

          <div class="divider d-flex align-items-center my-4">
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4 dfrsb">
            <i class=" fas fa-user"></i>
            <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" name="user" >
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3 dfrsb">
          <i class=" fas fa-lock"></i>

          <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" name="password">
          </div>

          
            

          <div class="d-flex flex-row align-items-centerjustify-content-center justify-content-lg-center justify-content-sm-center justify-content-xs-center">

            <button type="submit" id="boton" class="btn btn-mycolor btn-lg">Iniciar Sesion  
</button>
            
          </div>
          

        </form>
      </div>
    </div>
 
</section>



</body>
</html>