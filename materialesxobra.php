<?php

include("header.php");

include("conexion.php");


include("refuse.php");

$idObra=htmlentities(addslashes($_GET["id"]));



$sql="SELECT * FROM OBRAS WHERE ID='$idObra' ";

if($resultado=mysqli_query($miconexion,$sql)){

while($registro=mysqli_fetch_assoc($resultado)){

    $nombreObra=$registro["nombreObra"];

    }
    
}    


?>

<div class="container">
   

   <center> <h2 class="text-primary font-weight-bold font-capitalize">Materiales Entregados a "<?php echo $nombreObra  ?>"</h2></center>

    <table class="table table-primary mt-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre De Material</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Fecha de envío</th>
          </tr>
        </thead>
        <tbody>

<?php



    $sql2="SELECT * FROM materiales_solicitados WHERE idObra='$idObra' ";

    
    if($resultado2=mysqli_query($miconexion,$sql2)){

    while($registro2=mysqli_fetch_assoc($resultado2)){

    $latinFecha=date("d-m-Y", strtotime($registro2["fechaDeEnvio"]));    
    
    $nombreMaterial=$registro2["nombreMaterial"];

    $cantidad=$registro2["cantidad"];

?>


          <tr>
            <th scope="row"><?php  echo  $nombreMaterial  ?></th>
            <td><?php  echo  $cantidad ?></td>
            <td><?php  echo  $latinFecha ?></td>
          </tr>
       


<?php
        }
    }
    
    mysqli_close($miconexion);


?>


    </tbody>
      </table>    
            </div>








<?php

include("footer.php");

?>