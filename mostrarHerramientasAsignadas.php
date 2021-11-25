<?php

include("header.php");

include("conexion.php");


include("refuse.php");

$id=htmlentities(addslashes($_GET["id"]));

$sql2="SELECT * FROM LIDERES WHERE id='$id'";
                                
if($resultado2=mysqli_query($miconexion,$sql2)){

   while($registro2=mysqli_fetch_assoc($resultado2)){

    $lider=$registro2["nombre"]." ".$registro2["apellido"];

    $color=$registro2["color"];

   }

}  



?>
<div class="container">
   

   <center> <h2 class="text-primary font-weight-bold font-capitalize">Herramientas Asignadas con Exito!!</h2></center><br><br>
   <center><h3 style="color: white ; background-color:<?php echo $color ?>"><?php echo $lider ?></h3></center>

    <table class="table table-primary mt-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col"> <center>Nombre de Herramienta</center></th>
            <th scope="col"><center>Cantidad</center></th>
            <th scope="col"><center>Fecha de Asignación</center></th>
          </tr>
        </thead>
        <tbody>

<?php

    $sql="SELECT * FROM herramientas_asignadas WHERE idLider='$id' ";
    
    if($resultado=mysqli_query($miconexion,$sql)){

    while($registro=mysqli_fetch_assoc($resultado)){

    $nombreHerramienta=$registro["nombreHerramienta"];

    $cantidad=$registro["cantidad"];

    $fecha=$registro["fechaDeRegistro"];

    $latinFecha=date("d-m-Y", strtotime($fecha));

    

?>


          <tr>
            <th scope="row" ><center><?php  echo  $nombreHerramienta  ?></center></th>
            <td><center><?php echo $cantidad ?></center></td>
            <td><center><?php echo $latinFecha ?></center></td>
          </tr>
       




<?php

    }
        }   

mysqli_close($miconexion);


include("footer.php");

?>