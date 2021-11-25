<?php

include("header.php");

include("conexion.php");


include("refuse.php");

$id=htmlentities(addslashes($_POST["id"]));

$cantidadMaterial=$_POST["cantidadMaterial"];

print_r($cantidadMaterial);

$recorrido=count($cantidadMaterial);

$contador=0;

$sql2="SELECT * FROM materiales_solicitados WHERE idObra = '$id' ";

if($resultado=mysqli_query($miconexion,$sql2)){

  while($registro=mysqli_fetch_assoc($resultado)){

    $id=$registro["id"];

    echo $id."<br>";

    $sql="UPDATE materiales_solicitados SET cantidad='$cantidadMaterial[$contador]' WHERE id = '$id'";
    
   $actualizar=mysqli_query($miconexion,$sql);
    
  $contador++;

  }
  
} 


header("location:mostrarMaterialesSolicitados.php?id=".$id);


mysqli_close($miconexion);

include("footer.php");


?>