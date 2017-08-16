<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/h.ico"/>
    <title>Ejercicios</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h3>Algoritmo que rellene un array con los numeros pares comprendidos entre 1 y 10 y los muestre en pantalla en orden ascendente</h3>

        <?php
        $num=range(0,10);
        sort($num);
        foreach ($num as $clave => $valor) {
          if ($clave%2==0) {
          echo "Numero: $clave <br>";
          }
        }
                  ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
