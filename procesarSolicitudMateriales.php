<?php

include("header.php");

include("conexion.php");


include("refuse.php");

$idObra=htmlentities(addslashes($_POST["idObra"]));

$fecha=date("Y-m-d");

//$latinFecha=date("d-m-Y", strtotime($fecha)); 

$material=$_POST["nombreMaterial"];

$cantidad=$_POST["cantidadMaterial"];

/*  obtener array materiales  */

$contador=0;

foreach($material as $row){

    $sql3="INSERT INTO materiales_solicitados (nombreMaterial,idObra,fechaDeEnvio,cantidad) VALUES ('$row','$idObra','$fecha','$cantidad[$contador]')";
    
    $insertar=mysqli_query($miconexion,$sql3);

    $contador++;
    
    }

/*  insertar array  materiales */

header("location:materialesxobra.php?id=".$idObra);

include("footer.php");

?>