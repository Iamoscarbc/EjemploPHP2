<?php

  include("conexion.php");

  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $dni=$_POST['dni'];
  $celular=$_POST['celular'];
  $direccion=$_POST['direccion'];
  $email=$_POST['email'];

  $query="INSERT INTO empleados(nombre,apellido,dni,celular,direccion,email) VALUES('$nombre','$apellido','$dni','$celular','$direccion','$email')";
  $resultado = $conexion->query($query);

  if ($resultado) {
    header('Location: index.php');
  }else {
    echo 'Inserción no realizada';
  }

 ?>
