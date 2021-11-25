<?php

include("header.php");

include("conexion.php");


include("refuse.php");

/*  variables */


$colorUsuario=htmlentities(addslashes($_POST["colorUsuario"]));
$nombre=htmlentities(addslashes($_POST["nombre"]));
$apellido=htmlentities(addslashes($_POST["apellido"]));
$alias=htmlentities(addslashes($_POST["alias"]));

/*  variables */


/*  insertar usuario sql */

$sql="INSERT INTO LIDERES (nombre,apellido,color,alias) VALUES ('$nombre','$apellido','$colorUsuario','$alias')";

$insertar=mysqli_query($miconexion,$sql);

/*  insertar usuario sql */

?>

<style>

#profileColor{
    color: white;
    background-color:<?php echo $colorUsuario;   ?> ;
}


</style>    

<div class="container">
        
       <center> <h2 class="text-success text-capitalize font-weight-bold font-italic">Se ha creado el usuario de manera satisfactoria</h2></center>

        <table class="table table-primary mt-5">
            <tr>
                <th><center><p class="text-dark">Usuario:  </p> <p class="font-weight-bold" id="profileColor"> <?php echo $nombre." ".$apellido ?> </p></center> </th>
             </tr>
             <tr>
                <th><center><p class="text-dark">Alias:  </p> <p class="font-weight-bold" id="profileColor"> <?php echo $alias ?> </p></center> </th>
             </tr>
        </table>

    </div>

    


<?php

mysqli_close($miconexion);

include("footer.php");


?>