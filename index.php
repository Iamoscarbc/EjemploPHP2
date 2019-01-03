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
    <title>EMPLEADOS</title>
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
      <div class="container">
        <br>
        <br>
        <div class="row">
          <div class="col-sm">
            <a class="btn btn-lg btn-success" href="form_registrar.php">Nuevo</a>
            <br>
            <br>
            <table class="table table-responsive text-center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">DNI</th>
                  <th scope="col">Celular</th>
                  <th scope="col">Direccion</th>
                  <th scope="col">Email</th>
                  <th scope="col" colspan="2">Operaciones</th>
                </tr>
              </thead>
              <?php

              include("conexion.php");

              $query="SELECT * FROM empleados";
              $resultado = $conexion->query($query);

              while ($row=$resultado->fetch_assoc()) {
                ?>
              <tbody>
                <tr>
                  <th scope="row"><?php echo $row['idEmpleado']; ?></th>
                  <td><?php echo $row['nombre']; ?></td>
                  <td><?php echo $row['apellido']; ?></td>
                  <td><?php echo $row['dni']; ?></td>
                  <td><?php echo $row['celular']; ?></td>
                  <td><?php echo $row['direccion']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><a class="btn btn-primary" href="form_modificar.php?idEmpleado=<?php echo $row['idEmpleado']; ?>">Modificar</a></td>
                  <td><a class="btn btn-danger" href="eliminar.php?idEmpleado=<?php echo $row['idEmpleado']; ?>">Eliminar</a></td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </body>
</html>
