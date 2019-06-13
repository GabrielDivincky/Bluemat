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
  <link rel="stylesheet" href="css/abm.css">
</head>

<body>
  <!--NavBar Bootstrap-->
<header>
  <div class="container-fluid header">
    <img src="img/logo_izq.png" alt="logo izquierda">    
  </div>
</header>
<!--Cuerpo-->
 <!--Listado de Productos-->
  <!--listado de productos CERÁMICOS PULIDOS-->
  <div class="container productos row centrarlistado">
    <div class="container tituloproducto">
      <div class="vertical">
        <h1 class="titulochico">CERÁMICOS</h1><h1 class="titulogrande">PULIDOS</h1>
      </div>
      <div class="tamanoimagen">
        <img src="img/bluetiles.png" alt="bluetiles">
      </div>
    </div>
    <div class="container fondoespecificaciones">
      <h4>ESPECIFICACIONES</h4>
    </div>
    <div class="container">
      <form action="actualizaabma.php" method="POST" class="form-group">
          <br>
          <h5>MEDIDAS</h5>
          <br>
          <?php
          /*conexion MySql*/
          require("conexion.php");
          /*Consulta a la base de datos*/
          $query="SELECT medidaa, medidab, medidac, medidad, codigos FROM ceramicos where id=1";
          $resultado = mysqli_query($conexion,$query) or die("Error en la consulta".mysqli_error($conexion));
          if($resultado)
            while ($renglon = mysqli_fetch_array($resultado)) {
              $medidaa=$renglon['medidaa'];
              $medidab=$renglon['medidab'];
              $medidac=$renglon['medidac'];
              $medidad=$renglon['medidad'];
              $codigos=$renglon['codigos'];
              echo '<input type="text" name="medidaa" value="'.$medidaa.'"><br>';
              echo '<input type="text" name="medidab" value="'.$medidab.'"><br>';
              echo '<input type="text" name="medidac" value="'.$medidac.'"><br>';
              echo '<input type="text" name="medidad" value="'.$medidad.'"><br>';                        
          ?>
          <br>
          <h5>CÓDIGOS</h5>
          <br>
          <?php
              echo '<input type="text" name="codigos" value="'.$codigos.'"><br>';
            }
          mysqli_close($conexion);
          ?>
        <div class="margenparrafo">
          <button type="submit">ACTUALIZAR</button>
        </div>
      </form>      
    </div>
  </div>
  <!--Listado de CERÁMICOS SIMIL MADERA-->
  <div class="container productos row centrarlistado">
    <div class="container tituloproducto">
      <div class="vertical">
        <h1 class="titulochico">CERÁMICOS</h1><h1 class="titulogrande">SÍMIL MADERA</h1>
      </div>
      <div class="tamanoimagen">
        <img src="img/bluetiles.png" alt="bluetiles">
      </div>
    </div>    
    <div class="container fondoespecificaciones">
      <h4>ESPECIFICACIONES</h4>
    </div>
    <div class="container">
      <form action="actualizaabmb.php" method="POST">
          <br>
          <h5>MEDIDAS</h5>
          <br>
          <?php
          /*conexion MySql*/
          require("conexion.php");
          /*Consulta a la base de datos*/
          $query="SELECT medidaa, medidab, medidac, medidad, medidae, medidaf, codigos FROM ceramicos where id=2";
          $resultado = mysqli_query($conexion,$query) or die("Error en la consulta".mysqli_error($conexion));
          if($resultado)
            while ($renglon = mysqli_fetch_array($resultado)) {
              $medidaa=$renglon['medidaa'];
              $medidab=$renglon['medidab'];
              $medidac=$renglon['medidac'];
              $medidad=$renglon['medidad'];
              $medidae=$renglon['medidae'];
              $medidaf=$renglon['medidaf'];
              $codigos=$renglon['codigos'];
              echo '<input type="text" name="medidaa" value="'.$medidaa.'"><br>';
              echo '<input type="text" name="medidab" value="'.$medidab.'"><br>';
              echo '<input type="text" name="medidac" value="'.$medidac.'"><br>';
              echo '<input type="text" name="medidad" value="'.$medidad.'"><br>';
              echo '<input type="text" name="medidae" value="'.$medidae.'"><br>';
              echo '<input type="text" name="medidaf" value="'.$medidaf.'"><br>';                      
          ?>
          <br>
          <h5>CÓDIGOS</h5>
          <br>
          <?php
              echo '<input type="text" name="codigos" value="'.$codigos.'"><br>';
            }
          mysqli_close($conexion);
          ?>
      <div class="margenparrafo">
        <button type="submit">ACTUALIZAR</button>
      </div>        
      </form>
    </div>
  </div>
  <!--Listado de ceramicos SIMIL CEMENTO-->
  <div class="container productos row centrarlistado">
    <div class="container tituloproducto">
      <div class="vertical">
        <h1 class="titulochico">CERÁMICOS</h1> <h1 class="titulogrande" >SÍMIL CEMENTO</h1>
      </div>
      <div class="tamanoimagen">
        <img src="img/bluetiles.png" alt="bluetiles">
      </div>
    </div>
    <div class="container fondoespecificaciones">
      <h4>ESPECIFICACIONES</h4>
    </div>
    <div class="container">
      <form action="actualizaabmc.php" method="POST">
          <br>
          <h5>MEDIDAS</h5>
          <br>
          <?php
          /*conexion MySql*/
          require("conexion.php");
          /*Consulta a la base de datos*/
          $query="SELECT medidaa, medidab, medidac, medidad, medidae, medidaf, codigos FROM ceramicos where id=3";
          $resultado = mysqli_query($conexion,$query) or die("Error en la consulta".mysqli_error($conexion));
          if($resultado)
            while ($renglon = mysqli_fetch_array($resultado)) {
              $medidaa=$renglon['medidaa'];
              $medidab=$renglon['medidab'];
              $medidac=$renglon['medidac'];
              $medidad=$renglon['medidad'];
              $codigos=$renglon['codigos'];
              echo '<input type="text" name="medidaa" value="'.$medidaa.'"><br>';
              echo '<input type="text" name="medidab" value="'.$medidab.'"><br>';
              echo '<input type="text" name="medidac" value="'.$medidac.'"><br>';
              echo '<input type="text" name="medidad" value="'.$medidad.'"><br>';
          ?>
          <br>
          <h5>CÓDIGOS</h5>
          <br>
          <?php
              echo '<input type="text" name="codigos" value="'.$codigos.'"><br>';
            }
          mysqli_close($conexion);
          ?>
      <div class="margenparrafo">
        <button type="submit">ACTUALIZAR</button>
      </div>
      </form>
    </div>
  </div>
  <!--Listado de PISOS VINILICOS SIMIL MADERA-->
  <div class="container productos row centrarlistado">
    <div class="container tituloproducto">
      <div class="vertical">
        <h1 class="titulochico">PISOS VINÍLICOS</h1><h1 class="titulogrande">SÍMIL MADERA</h1>
      </div>
      <div class="tamanoimagen vertical">
        <img src="img/holzboden.png" alt="holzboden">
      </div>
    </div>
    <div class="container fondoespecificaciones">
      <h4>ESPECIFICACIONES</h4>
    </div>
    <div class="container">  
      <form action="actualizaabmd.php" method="POST">
          <br>
          <h5>ESPESOR:</h5>
          <?php
          /*conexion MySql*/
          require("conexion.php");
          /*Consulta a la base de datos*/
          $query="SELECT medidaa, medidab, medidac, medidad, medidae, medidaf, codigos FROM ceramicos where id=4";
          $resultado = mysqli_query($conexion,$query) or die("Error en la consulta".mysqli_error($conexion));
          if($resultado)
            while ($renglon = mysqli_fetch_array($resultado)) {
              $medidaa=$renglon['medidaa'];
              $medidab=$renglon['medidab'];
              $medidac=$renglon['medidac'];
              $codigos=$renglon['codigos'];
              echo '<input type="text" name="medidaa" value="'.$medidaa.'"><br>';
          ?>
          <br>
          <h5>CAPA DE USO:(USO COMERCIAL)</h5>
          <?php
              echo '<input type="text" name="medidab" value="'.$medidab.'"><br>';
          ?>
          <br>
          <h5>MEDIDA DEL LISTÓN:</h5>
          <?php
              echo '<input type="text" name="medidac" value="'.$medidac.'"><br>';
          ?>
          <br>
          <h5>CÓDIGOS:</h5>
          <?php
              echo '<input type="text" name="codigos" value="'.$codigos.'"><br>';
            }
          mysqli_close($conexion);
          ?>
          <br>
      <div class="margenparrafo">
        <button type="submit">ACTUALIZAR</button>
      </div>
      </form>
    </div>
  </div>

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
