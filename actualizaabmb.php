<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">

  <!-- Place favicon.ico in the root directory -->
  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" href="img/logo_ico.ico">

  <!--Css-->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!--NavBar Bootstrap-->
  <header>
    <div class="container-fluid header">
      <img src="img/logo_izq.png" alt="logo izquierda">    
    </div>
  </header>
  <!--Cuerpo-->
  <!--Actualización de registros-->
  <form>
    <div class="container">
    <?php
      /*recibo las variable por method POST*/
      $medidaa=$_POST['medidaa'];
      $medidab=$_POST['medidab'];
      $medidac=$_POST['medidac'];
      $medidad=$_POST['medidad'];
      $medidae=$_POST['medidae'];
      $medidaf=$_POST['medidaf'];
      $codigos=$_POST['codigos'];
      /*Conexion MySql*/
      require("conexion.php");
      /*Actualización de registro*/
      $query = "UPDATE ceramicos SET medidaa = '$medidaa', medidab = '$medidab', medidac = '$medidac', medidad = '$medidad', medidae = '$medidae', medidaf = '$medidaf', codigos = '$codigos' WHERE id = 2";
      
      $actualizaregistro = mysqli_query($conexion,$query) or die('Error en la consulta'.mysqli_error($conexion));
    ?>
    <div>
      <h1>OPERACION REALIZADA CON EXITO</h1>
      <h4><a href="abm.php">VOLVER</a></h4>
    </div>
  </div>
  </form>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>

  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>

</body>

</html>
