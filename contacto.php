<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="diseño1.css">
    <link rel="stylesheet" href="diseño2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sesión</title>
</head>

<body>
    <div class="container1" style="font-family: Arial, Helvetica, sans-serif; padding: 25px; font-size: 30px; text-decoration: none;" align="center">
        <div class="row">
            <div class="col" style="background-color: #f3e523;">
                <a href="wcm.php" style="text-decoration: none; color: rgb(255, 255, 255);">Inicio</a>
            </div>
            <div class="col" style="background-color: skyblue;">
                <a href="Tienda.html" style="text-decoration: none; color: rgb(255, 255, 255);">Tienda</a>
            </div>
            <div class="col" style="background-color:blue;">
                <div class="boton"><a href="contacto.php" style="text-decoration: none; color: rgb(255, 255, 255);">Contactenos</a></div>
            </div>
            <div class="col" style="background-color: rgb(16, 44, 84);">
                <div class="boton"><a href="mensajes.php" style="text-decoration: none; color: rgb(255, 255, 255);">Mensaje</a></div>
            </div>
        </div>
    </div>
    <form style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Contáctenos</h1>
    <hr>
    
    <label for="cod">Nombre*</label> <br>              
    <input type="text" name="nom"  class="form-control" placeholder="Ingrese nombre completo"><br>

    <label for="nombre">Teléfono / Celular*</label>    <br> 
    <input type="text" name="tel"  class="form-control" placeholder="Ingrese número de teléfono"><br>

    <label for="apellido">Correo*</label><br>
    <input type="text" name="corr"  class="form-control" placeholder="Ingrese correo electronico"><br>

    <label for="direccion">Mensaje* </label><br>
    <input type="text" name="mensa"  class="form-control" placeholder="Ingrese su mensaje "><br>

    <div class="clearfix">
      <a href="wcm.php">
      <button type="button" class="cancelbtn">Cancelar</button></a>
      <button type="submit" class="signupbtn" name="enviar">Enviar</button>
    </div>
  </div>
</form>

  <div class="row" style="background-color: rgb(23, 23, 163); font-size: 25px;">
    <div class="col">
    <p style="color:rgb(255,255,255);"> PBX: 502 5130-9846 - Dirección:18 calle 23-30 zona 10</p>
    </div>
    <div class="col">
    <p style="color:rgb(255,255,255);" align="right">carnet:2021-40023 Nombre:Saul Jean Pierre Alonzo Colocho</p>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<?php
include ('bd.php');
if(isset($_POST['enviar'])){
    $nomb=$_POST ['nom'];
    $tele=$_POST ['tel'];
    $corre=$_POST ['corr'];
    $mensaj=$_POST ['mensa'];
    $query="INSERT INTO mensaje(Nombre, telefono, correo, mensaje) VALUES ('$nomb', '$tele', '$corre', '$mensaj')";
    $resultados=mysqli_query($conn, $query);
    if ($resultados) {
        echo '<script lenguage="javascript">';
        echo 'alert("¡Sus datos han sido guardados!")
        window.location = "wcm.php";
        </script>';
        }
    }
    mysqli_close($conn);
?>