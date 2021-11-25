<?php

include("header.php");

include("conexion.php");


include("refuse.php");

$idObra=htmlentities(addslashes($_POST["id"]));

$cantidadMaterial=$_POST["cantidadMaterial"];

print_r($cantidadMaterial);

$recorrido=count($cantidadMaterial);

$contador=0;

$sql2="SELECT * FROM materiales_obra WHERE idObra = '$idObra' ";

if($resultado=mysqli_query($miconexion,$sql2)){

  while($registro=mysqli_fetch_assoc($resultado)){

    $id=$registro["id"];

    echo $id."<br>";

    $sql="UPDATE materiales_obra SET cantidad='$cantidadMaterial[$contador]' WHERE id = '$id'";
    
   $actualizar=mysqli_query($miconexion,$sql);
    
  $contador++;

  }
  
} 

    
header("location:endPedidoDeMaterial.php?idObra=".$idObra);

mysqli_close($miconexion);

include("footer.php");


?>