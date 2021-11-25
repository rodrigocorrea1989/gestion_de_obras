<?php

include("header.php");

include("conexion.php");


include("refuse.php");

$nombreObra=htmlentities(addslashes($_POST["nombreObra"]));

$idLider=htmlentities(addslashes($_POST["idLider"]));

$fecha=date("Y-m-d");

$estado="pendiente";

$descripcion=htmlentities(addslashes($_POST["descripcion"]));

//$latinFecha=date("d-m-Y", strtotime($fecha)); 

$material=$_POST["material"];

/*  insertar obra sql */

$sql="INSERT INTO OBRAS (nombreObra,idLider,fechaDeRegistro,estado,descripcion) VALUES ('$nombreObra','$idLider','$fecha','$estado','$descripcion')";

$insertar=mysqli_query($miconexion,$sql);

/*  insertar obra sql */


/*  obtener id de obra */

$sql2="SELECT * FROM OBRAS WHERE nombreObra='$nombreObra' ";

            
    if($resultado2=mysqli_query($miconexion,$sql2)){

    while($registro2=mysqli_fetch_assoc($resultado2)){

        $idObra=$registro2["id"];


    }

}

/*  obtener array materiales  */

$cantidad=0;

foreach($material as $row){

    $sql3="INSERT INTO materiales_obra (nombreMaterial,idObra,fechaDeRegistro,cantidad) VALUES ('$row','$idObra','$fecha','$cantidad')";
    
    $insertar=mysqli_query($miconexion,$sql3);
    
    }

/*  insertar array  materiales */

header("location:definirCantidad.php?id=".$idObra);

include("footer.php");

?>