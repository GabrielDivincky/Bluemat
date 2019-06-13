<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>BLUEMAT</title>
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
  <div class="container">  
      <nav class="navbar navbar-expand-lg navbar-light" style="background: #DCDCDC">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-tor-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav navegacion">
          <li class="nav-item">
            <a class="nav-link" href="#pulidos">Cerámicos Pulidos</a>
          </li> <li class="nav-item">
            <a class="nav-link" href="#similmadera">Cerámicos Simil Madera</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#similcemento">Cerámicos Simil Cemento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Pisossimil">Pisos Vinílicos Simil Madera</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto" tabindex="-1" aria-disabled="true">Contáctenos</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>  
</header>
  <!--Cuerpo-->
  <!--Listado de Productos-->  
  <div class="container productos row centrarlistado">
    <!--listado de productos CERÁMICOS PULIDOS-->
    <div class="container tituloproducto" id="pulidos">
      <div class="vertical">
        <h1 style="color: #6B9FD4; margin-bottom: 0;">CERÁMICOS</h1><h1 style="margin-top: 0; font-size: 60px;">PULIDOS</h1>
      </div>
      <div class="tamanoimagen">
        <img src="img/bluetiles.PNG" alt="bluetiles">
      </div>
    </div>
    <div class="container fondoespecificaciones">
      <h4>ESPECIFICACIONES</h4>
    </div>
    <div class="container">
      <div class=" margenparrafo row">
        <p class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
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
                  echo "".$medidaa."<br>";
                  echo "".$medidab."<br>";
                  echo "".$medidac."<br>";
                  echo "".$medidad."<br>";
            ?>
         
          ESMALTADO PULIDO
          <br>
          RECTIFICADO
          <br>
          TRATAMIENTO ANTI MANCHAS
          <br>
          ABSORCIÓN DE AGUA MAYOR A 0,6%
          <br>
          SUPER BRILLANTE
          <br>
          ALTO TRÁNSITO
          <br>
          ORIGEN: INDIA / CHINA / VIETNAM / TURQUÍA / ESPAÑA
        </p>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 titulo">
          <h5>CÓDIGOS</h5>
           <?php
                  echo "<p>".$codigos."</p>";
                }
              mysqli_close($conexion);
            ?>
        </div>  
      </div>
    </div>
    <div class="container row fotos1">
      <div class="col-sm-12 col-xs-12 col-lg-6">
          <div class="columna1">
            <img src="img/beige_pleno.jpg" alt="beige pleno">
            <h5>Cerámico Beige Pleno</h5>
          </div>
          <div class="columna1">
            <img src="img/pulido_botticino.JPG" alt="pulido_botticino">
            <h5>Cerámico Pulido Botticino</h5>
          </div>
          <div class="columna1">
            <img src="img/tipo_carrara.JPG" alt="tipo_carrara">
            <h5>Cerámico Tipo Carrara</h5>
          </div>
      </div>
      <div class="col-sm-12 col-xs-12 col-lg-6">
          <div class="columna2">
            <img src="img/blanco_pleno.JPG" alt="blanco pleno">
            <h5>Cerámico Blanco Pleno</h5>
          </div>
          <div class="columna2">
            <img src="img/negro_puro.JPG" alt="negro_puro">
            <h5>Cerámico Negro puro</h5>
          </div>
          <div class="columna2">
            <img src="img/negro_con_vetas.JPG" alt="negro_con_vetas">
            <h5>Cerámico Negro con Vetas</h5>
          </div>
      </div>
    </div>
   </div> 
  <!--Listado de CERÁMICOS SIMIL MADERA-->
  <div class="container productos row centrarlistado" id="similmadera">
    <div class="container tituloproducto">
      <div class="vertical">
        <h1 style="color: #6B9FD4; margin-bottom: 0;">CERÁMICOS</h1><h1 style="margin-top: 0; font-size: 60px;" >SIMIL MADERA</h1>
      </div>
      <div class="tamanoimagen">
        <img src="img/bluetiles.PNG" alt="bluetiles">
      </div>
    </div>
    
    <div class="container fondoespecificaciones">
      <h4>ESPECIFICACIONES</h4>
    </div>
    <div class="container">
        <div class=" margenparrafo2">
          <p class="col-lg-6 col-md-6 col-sm-12 col-xs-12" parrafo2>
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
                  echo "".$medidaa."<br>";
                  echo "".$medidab."<br>";
                  echo "".$medidac."<br>";
                  echo "".$medidad."<br>";
                  echo "".$medidae."<br>";
                  echo "".$medidaf."<br>";
            ?>
            ESMALTADO
            <br>
            CON TEXTURA SÍMIL MADERA
            <br>
            BORDES RECTIFICADOS
            <br>
            ABSORCIÓN DE AGUA
            <br>
            MAYOR A 0,6%
            <br>
            USO COMERCIAL Y RESIDENCIAL
            <br>
            ORIGEN: CHINA / BRASIL / VIETNAM / INDONESIA / ESPAÑA 
          </p>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 titulo">
            <h5>CÓDIGOS</h5>
              <?php
                    echo "<p>".$codigos."</p>";
                  }
                mysqli_close($conexion);
              ?>
          </div>    
      </div>      
    </div>
    <div class="container row segundaseccion">
          <div class="col-md-6 col-lg-4">
            <img src="img/roble_oscuro.JPG" alt="roble oscuro">
            <h5>Roble Oscuro</h5>
          </div>
          <div class="col-md-6 col-lg-4">
            <img src="img/roble_claro.JPG" alt="roble claro">
            <h5>Cerámico Blanco Pleno</h5>
          </div>
          <div class="col-lg-4">
            <img src="img/fresno_gris.JPG" alt="fresno gris">
            <h5>Cerámico Negro con Vetas</h5>
          </div>
    </div>
  </div>  
  <!--Listado de ceramicos SIMIL CEMENTO-->
  <div class="container productos row centrarlistado" id="similcemento">
        <div class="container tituloproducto">
          <div class="vertical">
            <h1 style="color: #6B9FD4; margin-bottom: 0;">CERÁMICOS</h1> <h1 style="margin-top: 0; font-size: 60px;" >SÍMIL CEMENTO</h1>
          </div>
          <div class="tamanoimagen">
            <img src="img/bluetiles.PNG" alt="bluetiles">
          </div>
        </div>
        <div class="container fondoespecificaciones">
          <h4>ESPECIFICACIONES</h4>
        </div>
        <div class="container">
          <div class="margenparrafo3">
            <p class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                <?php
                  /*conexion MySql*/
                  require("conexion.php");
                  /*Consulta a la base de datos*/
                  $query="SELECT medidaa, medidab, medidac, medidad, codigos FROM ceramicos where id=3";
                  $resultado = mysqli_query($conexion,$query) or die("Error en la consulta".mysqli_error($conexion));
                  if($resultado)
                    while ($renglon = mysqli_fetch_array($resultado)) {
                      $medidaa=$renglon['medidaa'];
                      $medidab=$renglon['medidab'];
                      $medidac=$renglon['medidac'];
                      $medidad=$renglon['medidad'];
                      $codigos=$renglon['codigos'];
                      echo "".$medidaa."<br>";
                      echo "".$medidab."<br>";
                      echo "".$medidac."<br>";
                      echo "".$medidad."<br>";
                ?>
                ANTIDESLIZANTES
                <br>
                BORDES RECTIFICADOS
                <br>
                USO COMERCIAL Y RESIDENCIAL
                <br>
                ABSORCIÓN DE AGUA MAYOR A 0,6%
                <br>
                ORIGEN: CHINA / VIETNAM / INDONESIA / ESPAÑA
              </p>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 titulo">
                    <h5>CÓDIGOS</h5>
                    <?php
                            echo "<p>".$codigos."</p>";
                          }
                        mysqli_close($conexion);
                      ?>  
                </div>
          </div>

              <div class="container row terceraseccion">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 imagen1">
                    <img src="img/sin_nombre.JPG" alt="sin nombre">
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 imagen2">
                    <img src="img/gris_cemento.JPG" alt="gris cemento">
                    <h5>Cerámico Gris Cemento</h5>
                  </div>    
              </div>
       </div>
   </div>   

  <!--Listado de PISOS VINILICOS SIMIL MADERA-->
  <div class="container productos row centrarlistado" id="Pisossimil">
        <div class="container tituloproducto">
          <div class="vertical">
            <h1 style="color: #6B9FD4; margin-bottom: 0;">PISOS VINÍLICOS</h1><h1 style="margin-top: 0; font-size: 60px;" >SÍMIL MADERA</h1>
          </div>
          <div class="tamanoimagen vertical logoaleman">
            <img src="img/holzboden.PNG" alt="holzboden">
          </div>
        </div>
        <div class="container fondoespecificaciones">
          <h4>ESPECIFICACIONES</h4>
        </div>
        <div class="container">
              <div class="margenparrafo">
                <p class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  ESPESOR:
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
                        echo "".$medidaa."<br>";
                  ?>
                  CAPA DE USO:  (USO COMERCIAL)
                  <?php
                        echo "".$medidab."<br>";
                  ?>
                  MEDIDA DEL LISTÓN: 
                  <?php
                        echo "".$medidac."<br>";
                  ?>   
                  
                  100% RESISTENTES AL AGUA!
                  <br>
                  ALTO TRANSITO
                  <br>
                  SISTEMA CLICK
                  <br>
                  FÁCIL COLOCACIÓN
                  <br>
                  ORIGEN: CHINA / COREA
                  <br>
                  COLORES: ROBLE CLARO / ROBLE OSCURO / FRESNO GRIS / ROBLE ESLAVONIA
                </p>
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 titulo">
                  <h5>CÓDIGOS</h5>
                  <?php
                        echo "<p>".$codigos."</p>";
                      }
                    mysqli_close($conexion);
                  ?>
                </div>      
            </div>
          </div>  
            <div class="row cuartaseccion">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 columna1">
                  <img src="img/fresno_gris2.JPG" alt="fresno gris">
                  <h5>Fresno Gris</h5>
                  <img src="img/roble_eslavonia.JPG" alt="roble eslavonia">
                  <h5>Roble Eslavonia</h5>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 columna2">
                  <img src="img/roble_claro2.JPG" alt="roble claro">
                  <h5>Roble Claro</h5>
                  <img src="img/roble_oscuro2.JPG" alt="roble oscuro">
                  <h5>Roble Oscuro</h5>
                </div>
            </div>
    </div>
  <!---- FORMULARIO ------>

  <div class="containerForm" id="contacto">
    <form action="enviar.php" method="POST" class="formulario">
      
      <div class="form">
        <h1 class="form-title">C<span>ontacto</span></h1>
      </div>

      <input type="text" id="empresa" class="form-input" name="empresa" placeholder="Escriba su empresa">

      <input type="text" id="nombre" class="form-input" name="nombre" placeholder="Escriba su nombre" required>

      <input type="email" id="correo" class="form-input" placeholder="Escriba su correo" required>

      <input type="mensaje" id="mensaje" name="mensaje" class="form-textarea" placeholder="Aqui escriba su mensaje" required>

      <input type="submit" class="btn-submit" value="Enviar Consulta">

    </form>

  </div> 
  <!--footer-->

  <footer class="container-fluid footer">
    
              <div>
                  <h2>VISITA NUESTRO SHOWROOM</h2>
                  <br>
                  <h4>BLUEMAT S.A.</h4>
                  <br>
              </div>       
              <div class="contacto">
                    <div class="parrafo1">
                          <p>
                            TUCUMAN 540
                            <br>
                            PISO 26 "A" CP 1049
                            <br>
                            CABA ARGENTINA
                          </p>
                    </div>
                    <div class="parrafo2">
                        <p>
                          TEL: (+5411) 5199-6449/50/51
                          <br>
                          NEXTEL 265*700
                        </p>
                    </div>  
              </div>
             
   </footer>
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
