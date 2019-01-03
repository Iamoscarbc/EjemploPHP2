<?php

  include("conexion.php");

  $idEmpleado=$_REQUEST['idEmpleado'];
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $dni=$_POST['dni'];
  $celular=$_POST['celular'];
  $direccion=$_POST['direccion'];
  $email=$_POST['email'];

  $query="UPDATE empleados SET nombre='$nombre',apellido='$apellido',dni='$dni',celular='$celular',direccion='$direccion',email='$email' WHERE idEmpleado='$idEmpleado'";
  $resultado = $conexion->query($query);

  if ($resultado) {
    header('Location: index.php');
  }else {
    echo 'Modificación no realizada';
  }

 ?>
