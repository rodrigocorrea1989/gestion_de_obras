<?php

include("header.php");

include("conexion.php");


$password=htmlentities(addslashes( $_POST["password"])); 

$nombreUsuario=htmlentities(addslashes($_POST["nombreUsuario"])) ;


$sql="SELECT * FROM usuarios WHERE nombreUsuario = '$nombreUsuario' ";

if($resultado=mysqli_query($miconexion,$sql)){

    while($registro=mysqli_fetch_assoc($resultado)){

        if($password==$registro["contraseña"] && $nombreUsuario==$registro["nombreUsuario"] ){

            session_start();

            $_SESSION["usuario"]=$nombreUsuario;

            header("location:index.php");

        }else{


            echo "<br><center><h2 class='text-danger font-weight-bold font-italic'>Error de Acceso, verifica el usuario y la contraseña</h2><br>
            <p class='text-danger'>Vuelva a intentarlo</p></center>";

        }



    }


}


mysqli_close($miconexion);

include("footer.php");

?>
<style>
#close{
    display: none;
}
