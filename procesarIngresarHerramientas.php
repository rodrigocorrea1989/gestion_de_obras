<?php

include("header.php");

include("conexion.php");


include("refuse.php");


/*  variables */

$nombreHerramienta=$_POST["nombreHerramienta"];
$cantidad=htmlentities(addslashes($_POST["cantidad"]));
$fecha=date("Y-m-d");
$latinFecha=date("d-m-Y", strtotime($fecha));

/*  variables */

/*  insertar usuario sql */

$sql="INSERT INTO herramientas_deposito (nombreHerramienta,cantidad,fechaDeRegistro) VALUES ('$nombreHerramienta','$cantidad','$fecha')";

$insertar=mysqli_query($miconexion,$sql);

/*  insertar usuario sql */

?>


<div class="container">
        
       <center> <h2 class="text-success text-capitalize font-weight-bold font-italic">Se ha ingresado el material de manera satisfactoria</h2></center>

        <table class="table table-primary mt-5">
            <tr>
                <th><center><p class="text-dark">Nombre Herramienta  </p> <p class="text-danger font-weight-bold" id="profileColor"> <?php echo $nombreHerramienta?> </p></center> </th>
             </tr>
             <tr>
                <th><center><p class="text-dark">Cantidad: </p>  <p class="text-danger font-weight-bold"> <?php echo $cantidad ?> </p></center> </th>
             </tr>
             <tr>
                <th><center><p class="text-dark">Fecha de Ingreso:  </p>  <p class="text-danger font-weight-bold"> <?php echo $latinFecha ?> </p></center> </th>
             </tr>
        </table>


    </div>



<?php

mysqli_close($miconexion);

include("footer.php");


?>