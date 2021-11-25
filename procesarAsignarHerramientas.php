<?php

include("header.php");

include("conexion.php");


include("refuse.php");

$nombreHerramienta=$_POST["nombreHerramienta"];

$cantidad=$_POST["cantidadHerramienta"];

$idLider=htmlentities(addslashes($_POST["id"]));

$color=htmlentities(addslashes($_POST["color"]));

$fecha=date("Y-m-d");

$contador=0;

foreach($nombreHerramienta as $row){


    $sql4="SELECT * FROM herramientas_asignadas WHERE idLider='$idLider' ";

    if($resultado4=mysqli_query($miconexion,$sql4)){

    while($registro4=mysqli_fetch_assoc($resultado4)){

        $nombreHerramienta4=$registro4["nombreHerramienta"];
        $cantidad4=$registro4["cantidad"];

      }
    }   

     if($nombreHerramienta4==$row){

        $cantidadUPD=$cantidad4+$cantidad[$contador];

        $sql3="UPDATE herramientas_asignadas SET cantidad='$cantidadUPD' WHERE nombreHerramienta='$row' ";
    
        $actualizar=mysqli_query($miconexion,$sql3);


     }  else {

        $sql="INSERT INTO herramientas_asignadas (nombreHerramienta,idLider,fechaDeRegistro,cantidad) VALUES ('$row','$idLider','$fecha','$cantidad[$contador]')";
    
        $insertar=mysqli_query($miconexion,$sql);

     } 



    $contador++;

        
    

}
    

/*  insertar array  materiales */

mysqli_close($miconexion);

header("location:descargarHerramientoDepo.php?id=".$idLider);

include("footer.php");

?>