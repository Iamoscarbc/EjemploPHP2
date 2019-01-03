<?php
session_start();

if (isset($_SESSION['u_user'])) {

}else {
  header('Location: form_login.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <title>REGISTRAR</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:rgb(0, 0, 0);">
      <a class="navbar-brand" href="index.php">Empleados</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item dropdown">
          </li>
          <li class="nav-item">
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a class="btn btn-danger my-2 my-sm-0" href="logout.php">Cerrar Sesión</a>
        </form>
      </div>
    </nav>
    <center>
      <div class="container">
        <br>
        <br>
        <br>
        <div class="row">
          <div class="col">
          </div>
          <div class="col-sm">
            <?php

            include('conexion.php');

            $idEmpleado=$_REQUEST['idEmpleado'];
            $query="SELECT * FROM empleados WHERE idEmpleado='$idEmpleado'";
            $resultado = $conexion->query($query);

            $row=$resultado->fetch_assoc();

            ?>
            <h2>MODIFICAR EMPLEADOS</h2><br>
            <form action="modificar.php?idEmpleado=<?php echo $row['idEmpleado']; ?>" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido'] ?>">
              </div>
              <div class="form-group">
                <input type="number" min="0" max="99999999" class="form-control" name="dni" placeholder="DNI" value="<?php echo $row['dni'] ?>">
              </div>
              <div class="form-group">
                <input type="number" min="0" max="999999999" class="form-control" name="celular" placeholder="Celular" value="<?php echo $row['celular'] ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion'] ?>">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email'] ?>">
              </div>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
          </div>
          <div class="col">
          </div>
        </div>
      </div>
    </center>
  </body>
</html>
