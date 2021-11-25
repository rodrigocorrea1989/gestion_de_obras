<?php 

include("conexion.php"); 

session_start();

if(!$_SESSION['usuario']){

  header("location:login.php");

}


?>



<kbd> <?php 


$usuario=$_SESSION["usuario"]; 

$sql="SELECT * FROM usuarios WHERE nombreUsuario = '$usuario'";

if($resultado=mysqli_query($miconexion,$sql)){

  while($registro=mysqli_fetch_assoc($resultado)){


    $nombreUsuario=$registro["nombre"]." ".$registro["apellido"];

    $tipoUsuario=$registro["tipo"];

    echo $nombreUsuario;


  }

  

}




?>
</kbd>