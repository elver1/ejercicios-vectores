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
      <h3 >Algoritmo que lea 10 numeros por teclado,los almacene en un array y muestre la suma, la resta, multiplicacion y divicion de todos</h3>
      <form  method="post">
      <center>  <label>Numero 1:</label>
        <input type="text" name="a" value=""required="">
        <label>Numero 2:</label>
        <input type="text" name="b" value=""required=""><br>
        <label>Numero 3:</label>
        <input type="text" name="c" value=""required="">
        <label>Numero 4:</label>
        <input type="text" name="d" value=""required=""><br>
        <label>Numero 5:</label>
        <input type="text" name="e" value=""required="">
        <label>Numero 6:</label>
        <input type="text" name="f" value=""required=""><br>
        <label>Numero 7:</label>
        <input type="text" name="g" value=""required="">
        <label>Numero 8:</label>
        <input type="text" name="h" value=""required=""><br>
        <label>Numero 9:</label>
        <input type="text" name="i" value=""required="">
        <label>Numero 10:</label>
        <input type="text" name="j" value=""required=""><br></center>
        <center><input class="btn btn-primary"type="submit" name="" value="Enviar"></center>
      </form>
      <hr>
        <?php
        if ($_POST) {
          $a[]=$_POST['a'];
          $a[]=$_POST['b'];
          $a[]=$_POST['c'];
          $a[]=$_POST['d'];
          $a[]=$_POST['e'];
          $a[]=$_POST['f'];
          $a[]=$_POST['g'];
          $a[]=$_POST['h'];
          $a[]=$_POST['i'];
          $a[]=$_POST['j'];
          $b[]=$a[0]+$a[1]+$a[2]+$a[3]+$a[4]+$a[5]+$a[6]+$a[7]+$a[8]+$a[9];
          $b[]=$a[0]-$a[1]-$a[2]-$a[3]-$a[4]-$a[5]-$a[6]-$a[7]-$a[8]-$a[9];
          $b[]=$a[0]*$a[1]*$a[2]*$a[3]*$a[4]*$a[5]*$a[6]*$a[7]*$a[8]*$a[9];
          $b[]=$a[0]/$a[1]/$a[2]/$a[3]/$a[4]/$a[5]/$a[6]/$a[7]/$a[8]/$a[9];
          echo "<h4>Resultado:</h4>";
          echo "Suma: $b[0]<br>";
          echo "Resta: $b[1]<br>";
          echo "Multiplicacion: $b[2]<br>";
          echo "Divicion: $b[3]<br>";
        }


    ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
