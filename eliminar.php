<?php

  include("conexion.php");

  $idEmpleado=$_REQUEST['idEmpleado'];

  $query="DELETE FROM empleados WHERE idEmpleado='$idEmpleado'";
  $resultado = $conexion->query($query);

  if ($resultado) {
    header('Location: index.php');
  }else {
    echo 'Eliminación no realizada';
  }

 ?>
