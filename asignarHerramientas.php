<?php

include("header.php");

require ("conexion.php");


include("refuse.php");

if($tipoUsuario=="Proyectos")
{

  header("location:index.php");


}



?>
<div class="container">
   

   <center> <h2 class="text-primary font-weight-bold font-capitalize">Seleccionar Líder</h2></center>

    <table class="table table-primary mt-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col"><center>Líder</center></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

        <?php



$sql="SELECT * FROM LIDERES ";


if($resultado=mysqli_query($miconexion,$sql)){

while($registro=mysqli_fetch_assoc($resultado)){

$lider=$registro["nombre"]." ".$registro["apellido"];

$color=$registro["color"];

$id=$registro["id"];

?>


      <tr>
        <th scope="row"><center><p style="color: white ; background-color:<?php echo $color ?>"><?php  echo  $lider  ?></p></center></th>
        <td><center><a class="btn btn-success text-light" href="seleccionarHerramientas.php?id=<?php echo $id ?>">Asignar Herramientas</a></center></td>
      </tr>
   




<?php

    }

}

?>



</tbody>
  </table>    
        </div>



<?php


mysqli_close($miconexion);



include("footer.php");



?>
