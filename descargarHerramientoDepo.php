<?php

include("header.php");

include("conexion.php");

include("refuse.php");

$idLider=htmlentities(addslashes($_GET["id"]));


$sql4="SELECT * FROM herramientas_asignadas WHERE idLider='$idLider' ";

    if($resultado4=mysqli_query($miconexion,$sql4)){

    while($registro4=mysqli_fetch_assoc($resultado4)){

        $nombreHerramientaAsi=$registro4["nombreHerramienta"];

        $cantidad4=$registro4["cantidad"];


    $sql2="SELECT * FROM herramientas_deposito WHERE nombreHerramienta='$nombreHerramientaAsi' ";
    
    if($resultado2=mysqli_query($miconexion,$sql2)){

    while($registro2=mysqli_fetch_assoc($resultado2)){

        $nombreHerramientaDeposito=$registro2["nombreHerramienta"];

        $cantidadDeposito=$registro2["cantidad"];


        }
        
          }

          if($nombreHerramientaDeposito==$nombreHerramientaAsi){

            $cantidadUPD=$cantidadDeposito-$cantidad4;

            $sql3="UPDATE herramientas_deposito SET cantidad='$cantidadUPD' WHERE nombreHerramienta='$nombreHerramientaAsi' ";
    
            $actualizar=mysqli_query($miconexion,$sql3);

        }

           }

      }




mysqli_close($miconexion);

header("location:mostrarHerramientasAsignadas.php?id=".$idLider);

include("footer.php");

?>