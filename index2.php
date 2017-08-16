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
      <h3>Crear un array con los nombres: Mirna, Jose, Sebastian, Carlos. Muestre el munero de elementos que contiene </h3>
        <form method="post">
          <label>Nombre 1:</label>
          <input type="text" name="a" value="" placeholder="Escriba Mirna"required><br>
          <label>Nombre 2:</label>
          <input type="text" name="b" value=""placeholder="Escriba Jose" required><br>
          <label>Nombre 3:</label>
          <input type="text" name="c" value=""placeholder="Escriba Sebastian" required><br>
          <label>Nombre 4:</label>
          <input type="text" name="d" value=""placeholder="Escriba Carlos" required><br>
          <input class="btn btn-primary" type="submit" name="" value="Enviar">
        </form>
        <hr>
        <?php
        if ($_POST) {
          $a[]=$_POST['a'];
          $a[]=$_POST['b'];
          $a[]=$_POST['c'];
          $a[]=$_POST['d'];
          $res=count($a);
          echo "<h2>Resultado:</h2>";
          echo "<h2>El array es de $res posiciones</h2>";
        }

               ?>



    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
