<link rel="stylesheet" href="diseño2.css">
<body>
<form style="border:1px solid #ccc">
  <div class="container">
    <h1>Registro</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="cod">Usuario</label> <br>              
    <input type="text" name="ids"  class="form-control" placeholder="Ingrese su usuario"><br>

    <label for="nombre">Nombre</label>    <br> 
    <input type="text" name="nombre"  class="form-control" placeholder="Ingrese su nombre"><br>

    <label for="apellido">Apellido</label><br>
    <input type="text" name="apell"  class="form-control" placeholder="Ingrese su apellido"><br>

    <label for="direccion">Contraseña </label><br>
    <input type="text" name="contra"  class="form-control" placeholder="Ingrese su contraseña"><br>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancelar</button>
      <button type="submit" class="signupbtn" name="enviar">registrar</button>
    </div>
  </div>
</form>
</body>
<?php
include ('bd.php');
if(isset($_POST['enviar'])){
    $id=$_POST ['ids'];
    $nom=$_POST ['nombre'];
    $ape=$_POST ['apellido'];
    $cont=$_POST ['contra'];
    $query="INSERT INTO registro(id_usuario, nombre, apellido,  contrasena) VALUES ('$id', '$nom', '$ape', '$cont')";
    $resultados=mysqli_query($conn, $query);
    if ($resultados) {
        echo '<script lenguage="javascript">';
        echo 'alert("¡Sus datos han sido guardados!")
        window.location = "wcm.php";
        </script>';
        }
    }else{
        echo '<script lenguage="javascript">';
        echo 'alert("A ocurrido un error, vuelva a intentarlo")
        </script>';
    }
    mysqli_close($conn);
?>