<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="diseño1.css">
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
                <a href="#" style="text-decoration: none; color: rgb(255, 255, 255);">Tienda</a>
            </div>
            <div class="col" style="background-color:blue;">
                <div class="boton"><a href="contacto.php" style="text-decoration: none; color: rgb(255, 255, 255);">Contactenos</a></div>
            </div>
        </div>
    </div>
    <div class="container2" style="font-size:50px; font-family:Arial, Helvetica, sans-serif;">
        <div class="row">
            <div class="col">
                Inicio de Sesión
            </div>
        </div>
    </div>
    <form method="post" action="wcm.php">
    <div class="container3" style="font-size:30px;">
        <div class="row">
            <div class="col">
                Usuario <br>
                <div class="input-group-lg">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Ingresar usuario" name="nickname" require>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Contraseña <br>
                <div class="input-group-lg">
                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Ingresar contraseña" name="pass" require> <br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" align="center">
                <input type="submit" name="sesion"value="Iniciar Sesión"> <br>
                <a href="registro.php" style="text-decoration: none;">Registrarse</a>
            </div>
        </div>
    </div>
    </form>

  <div class="row" style="background-color: rgb(23, 23, 163); font-size: 25px;">
    <div class="col">
    <p style="color:rgb(255,255,255);"> PBX: 502 5130-9846 - Dirección:XXXXXXX</p>
    </div>
    <div class="col">
    <p style="color:rgb(255,255,255);" align="right">carnet:2021-40023 Nombre:Saul Jean Pierre Alonzo Colocho</p>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>