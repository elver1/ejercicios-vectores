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
      <h3>Crear un array para introducir los datos de una persona: Nombre: pedro Torres Direccion: calle_20 Telefono:1425698. Al terminar los debe mostrar en pantalla</h3>
        <form method="post">
          <label>Nombre y apelido:</label>
          <input type="text" name="a" value=""placeholder="Elver Verbel"required><br>
          <label>Direccion:</label>
          <input type="text" name="b" value="" placeholder="Caracol"required><br>
          <label>Telefono:</label>
          <input type="number" name="c" value=""placeholder="3015059610" required><br>
          <input class="btn btn-primary"type="submit" name="" value="Enviar">
        </form>
        <hr>
        <?php
        if ($_POST) {
          $a[]=$_POST['a'];
          $a[]=$_POST['b'];
          $a[]=$_POST['c'];
          echo "<h3>Resultado:<h3/><br>";
          echo "Nombre y apellido: $a[0]<br>";
          echo "Direccion: $a[1]<br>";
          echo "Telefono: $a[2]<br>";
        }

               ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
