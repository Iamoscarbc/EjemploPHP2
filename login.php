<?php

  session_start();

  $user=$_POST['user'];
  $password=$_POST['password'];

  include('conexion.php');

  $query="SELECT * FROM login WHERE usuario='$user' AND password='$password'";

  $proceso = $conexion->query($query);

  if ($resultado = mysqli_fetch_array($proceso)) {
    $_SESSION['u_user']=$user;
    header('Location: index.php');
  }else {
    header('Location: form_login.php');
  }
 ?>
