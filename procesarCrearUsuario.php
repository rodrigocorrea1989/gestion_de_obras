<?php

include("header.php");

include("conexion.php");


include("refuse.php");

/*  variables */

$nombreUsuario=htmlentities(addslashes($_POST["nombreUsuario"]));
$password=htmlentities(addslashes($_POST["password"]));
$tipoUsuario=htmlentities(addslashes($_POST["tipoUsuario"]));
$nombre=htmlentities(addslashes($_POST["nombre"]));
$apellido=htmlentities(addslashes($_POST["apellido"]));
$fecha=date("Y-m-d");

/*  variables */


/*  insertar usuario sql */

$sql="INSERT INTO USUARIOS (nombreUsuario,contraseña,tipo,fechaRegistroUsuario,nombre,apellido) VALUES ('$nombreUsuario','$password','$tipoUsuario','$fecha','$nombre','$apellido')";

$insertar=mysqli_query($miconexion,$sql);

/*  insertar usuario sql */

?>

   

<div class="container">
        
       <center> <h2 class="text-success text-capitalize font-weight-bold font-italic">Se ha creado el usuario de manera satisfactoria</h2></center>

        <table class="table table-primary mt-5">
            <tr>
                <th><center><p class="text-dark">Nombre de Usuario:  </p> <p class="text-danger font-weight-bold"> <?php echo $nombreUsuario ?> </p></center> </th>
             </tr>
             <tr>
                <th><center><p class="text-dark">Tipo Usuario </p>  <p class="text-danger font-weight-bold"> <?php echo $tipoUsuario ?> </p></center> </th>
             </tr>
             <tr>
                <th><center><p class="text-dark">Contraseña: </p>  <p class="text-danger font-weight-bold"> <?php echo $password ?> </p></center> </th>
             </tr>
        </table>

        <center><a href="perfilEncargado.php?id=<?php echo $idEncargado  ?>" class="btn btn-primary text-white">volver al perfil</a></center>

    </div>

    


<?php

mysqli_close($miconexion);

include("footer.php");


?>