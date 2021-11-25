
<?php
include("header.php");

include("conexion.php");


include("refuse.php");

$id=htmlentities(addslashes($_GET["id"]));

?>

<div class="container">
   

           <center> <h2 class="text-primary font-weight-bold font-capitalize">Se solicito de manera satisfactoria!!!</h2></center>

            <table class="table table-success mt-5">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nombre de Material</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha de Solicitud</th>
                  </tr>
                </thead>
                <tbody>


<?php


$sql="SELECT * FROM materiales_solicitados WHERE idObra='$id' ";

if($resultado=mysqli_query($miconexion,$sql)){

while($registro=mysqli_fetch_assoc($resultado)){

$latinFecha=date("d-m-Y", strtotime($registro["fechaDeSolicitud"]));    

$nombreMaterial=$registro["nombreMaterial"];
$cantidad=$registro["cantidad"];
$estado=$registro["estado"];


?>


      <tr>
        <th scope="row"><?php  echo  $nombreMaterial  ?></th>
        <td><?php  echo  $cantidad?></td>
        <td><?php  echo $estado ?> </td>
        <td><?php  echo  $latinFecha ?> </td>
      </tr>


<?php

}

}

mysqli_close($miconexion);

include("footer.php");

?>

</table>