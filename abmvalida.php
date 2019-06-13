<?php
  /*recibo los parametros de frmLogin.php*/
  $login=$_POST['login'];
  $password=$_POST['password'];
  
  /*Conexion MySql*/
  require('conexion.php');

  /*Autentica usuario*/

  $query = "SELECT * FROM user WHERE password = '$password'";
  $resultado = mysqli_query($conexion,$query);
  $filas = mysqli_num_rows($resultado);

  if ($filas>0) {
    header("location:abm.php");
  } else {
    echo "Error en la autenticación";
  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);