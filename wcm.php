<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Bienvenido</title>
  </head>
  <body>
  <?php
     if (!empty($_POST['nickname'])&& !empty($_POST['pass'])) {
        $usuario = $_POST['nickname'];
        $contra = $_POST['pass'];
        if($usuario=="LCP" && $contra=="123"){
 
        }else {
         echo '<script lenguage="javascript">';
         echo 'alert("Usuario o contraseña incorrecta volver a intentar.")
         window.location = "index.php";
         </script>';
     }
    }else {
        echo '<script lenguage="javascript">';
        echo 'alert("los datos estan vacios")
        window.location = "index.php";
        </script>';
    }
    ?>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/m7.jpg" class="d-block" alt="..." width="1530" height="600">
    </div>
    <div class="carousel-item">
      <img src="images/m8.jpg" class="d-block w-100" alt="..." width="1530" height="600">
    </div>
    <div class="carousel-item">
      <img src="images/m9.jpg" class="d-block w-100" alt="..." width="1530" height="600">
    </div>
  </div>
</div>
<div class="container1" style="font-family: Arial, Helvetica, sans-serif; padding: 25px; font-size: 30px; text-decoration: none;" align="center">
        <div class="row">
            <div class="col" style="background-color: #f3e523;">
                <a href="productos.html" style="text-decoration: none; color: rgb(255, 255, 255);">Productos</a>
            </div>
            <div class="col" style="background-color: skyblue;">
                <a href="Tienda.html" style="text-decoration: none; color: rgb(255, 255, 255);">Tienda</a>
            </div>
            <div class="col" style="background-color:blue;">
                <div class="boton"><a href="contacto.php" style="text-decoration: none; color: rgb(255, 255, 255);">Contactenos</a></div>
            </div>
        </div>
    </div>
    <div class="contenedor">
    <table> 
  <tr>
    <td rowspan="2">
    <div class="card" width="900px" height="750px">
     <img src="images/m1.jpg" class="card-img-top" alt="..."  width="900px" height="700px">
       <div class="card-body">
              <h5 class="card-title">Taburete</h5>
          <p class="card-text">Tela: Ceda, bordados sobre estructrua de madera de pino</p>
          <a href="paginas/pp1.html" class="btn btn-primary">Ver artículo</a>
        </div>
      </div>
    </td>
    <td>
    <div class="card"  width="380px" height="300px">
      <img src="images/m2.jpg" class="card-img-top" alt="..."  width="380px" height="275px">
        <div class="card-body">
            <h5 class="card-title">Alfombra</h5>
            <p class="card-text">Tela: Estabre, con decoración hecha a mano.</p>
          <a href="paginas/pp2.html" class="btn btn-primary">Ver artículo</a>
        </div>
      </div>
    </td>
    <td> 
    <div class="card"  width="380px" height="300px">
      <img src="images/m3.jpg" class="card-img-top" alt="..."  width="380px" height="275px">
        <div class="card-body">
            <h5 class="card-title">Silla</h5>
            <p class="card-text">Tela: Gamusa, con chapetas palteadas.</p>
          <a href="paginas/pp3.html" class="btn btn-primary">Ver artículo</a>
        </div>
      </div>
  </td>
  </tr>
  <tr>
    <td colspan="2">
    <div class="card"  width="760px" height="300px">
      <img src="images/m10.jpg" class="card-img-top" alt="..."  width="760px" height="275px">
        <div class="card-body">
            <h5 class="card-title">Sofá</h5>
            <p class="card-text">Tela: Fieltro, armable de dos secciones.</p>
          <a href="paginas/pp4.html" class="btn btn-primary">Ver artículo</a>
        </div>
      </div>
    </td>
  </tr>
</table>
</div>
    
  <div class="row" style="background-color: rgb(23, 23, 163); font-size: 25px;">
    <div class="col">
    <p style="color:rgb(255,255,255);"> PBX: 502 5130-9846 - Dirección:18 calle 23-30 zona 10</p>
    </div>
    <div class="col">
    <p style="color:rgb(255,255,255);" align="right">carnet:2021-40023 Nombre:Saul Jean Pierre Alonzo Colocho</p>
    </div>
  </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>