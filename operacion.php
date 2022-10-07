<?php
require_once 'clases/Usuario.php';
session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = unserialize($_SESSION['usuario']);
    $nomApe = $usuario->getNombreApellido();
} else {
    header('Location: operacion.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Realizar operacion</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body class="container">
      <div class="jumbotron text-center">
      <h1>Realizar operacion</h1>
      </div>
      <div class="text-center">
        <?php
            if (isset($_GET['mensaje'])) {
                echo '<div id="mensaje" class="alert alert-primary text-center">
                    <p>'.$_GET['mensaje'].'</p></div>';
            }
        ?>
        <h3>Hola PRUEBAAAAAA <?php echo $nomApe;?></h3>
        <p> Tu saldo : <?php echo $usuario->getSaldo();?></p>

<!-- 
  FORMULARIO TRAIDO DE CREATE.php -->

        <form action="create.php" method="post">
            <h1>OPERACION</h1>
            <input name="fecha" type="date" class="form-control form-control-lg" placeholder="Fecha"><br>
            <input name="monto" type="text" class="form-control form-control-lg" placeholder="Monto"><br>
            <input name="metodopago" type="number" min="0" max="1" class="form-control form-control-lg" placeholder="Metodo de pago"><br>
            <input type="submit" value="Restar" class="btn btn-primary">
            <input type="submit" value="Sumar" class="btn btn-primary">
        </form>      
        <p><a href="confirmar_delete.php" class="btn btn-danger">Eliminar mis datos</a></p>

      </div>
    </body>
</html>

