<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="diseño1.css">
    <link rel="stylesheet" href="diseño2.css">
    <link rel="stylesheet" href="diseño3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sesión</title>
</head>

<body>
    <div class="container1" style="font-family: Arial, Helvetica, sans-serif; padding: 25px; font-size: 25px; text-decoration: none;" align="center">
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
            <div class="col" style="background-color: rgb(16, 44, 84);">
                <div class="boton"><a href="mensajes.php" style="text-decoration: none; color: rgb(255, 255, 255);">Mensaje</a></div>
            </div>
        </div>
    </div>
    <div class="col-10">
      <h3>Mensajes Recibidos</h3>

<table align="center">
  <tr>
    <th>Nombres</th>
    <th>Teléfono</th>
    <th>Correo Electrónico</th>
    <th>Mensaje</th>
  </tr>
  <?php
     include('bd.php');
     $query="SELECT * FROM mensaje";
     $resultados=mysqli_query($conn, $query);
     while($row=mysqli_fetch_array($resultados)){ ?>
       <tr>
            <td><?php echo $row['nombre']?> </td>
            <td><?php echo $row['telefono']?> </td>
            <td><?php echo $row['correo']?> </td>
            <td><?php echo $row['mensaje']?> </td>
            <td>
                <a href="eliminar.php?id=<?php echo $row['id_usuario']?>">
                 <img src="image/borrar-usuario.png" width="40px" alt="eliminar"></a>
            </td>
       </tr>  
       <?php } ?>
     </table>      
         </div>
       </div>
     </div>
  <div class="row" style="background-color: rgb(23, 23, 163); font-size: 25px;">
    <div class="col">
    <p style="color:rgb(255,255,255);"> PBX: xxxx-xxxx - Dirección:XXXXXXX</p>
    </div>
    <div class="col">
    <p style="color:rgb(255,255,255);" align="right">carnet:2021-40023 Nombre:Saul Jean Pierre Alonzo Colocho</p>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>