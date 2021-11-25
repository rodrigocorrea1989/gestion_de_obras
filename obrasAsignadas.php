<?php

include("header.php");

include("conexion.php");


include("refuse.php");

$idLider=htmlentities(addslashes($_GET["id"]));


?>


 
<div class="container">

<?php

$sql2="SELECT * FROM LIDERES WHERE id='$idLider' ";

if($resultado2=mysqli_query($miconexion,$sql2)){

    while($registro2=mysqli_fetch_assoc($resultado2)){

        $nombre=$registro2["nombre"];
        $apellido=$registro2["apellido"];
        $color=$registro2["color"];

    }
    
}   


?>

<center> <div class="col-md-6">
   <h2 class="text-primary font-weight-bold font-capitalize">Obras Asignadas </h2><br><br>
   <h3 style="color: white ; background-color:<?php echo $color ?>"><?php echo $nombre." ".$apellido ; ?></h3>
</div></center>
    <table class="table table-primary mt-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col"> <center>Nombre de Obra</center></th>
            <th scope="col"> <center>Fecha De Registro </center></th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>

<?php



    $sql="SELECT * FROM OBRAS WHERE idLider='$idLider' ";

    
    if($resultado=mysqli_query($miconexion,$sql)){

    while($registro=mysqli_fetch_assoc($resultado)){

        $nombreObra=$registro["nombreObra"];

        $fechaDeRegistro=$registro["fechaDeRegistro"];

        $fechaDeInicio=$registro["fechaDeInicio"];

        $fechaFinal=$registro["fechaFinal"];

        $latinFechaInicio=date("d-m-Y", strtotime($fechaDeInicio));

        $latinFechaRegistro=date("d-m-Y", strtotime($fechaDeRegistro));

        $latinFechaFinal=date("d-m-Y", strtotime($fechaFinal));

        $idLider=$registro["idLider"];

        $idObra=$registro["id"]

?>
 


          <tr>
            <th scope="row"  ><center><?php  echo  $nombreObra  ?></center></th>
            <th scope="row" ><center><?php echo  $latinFechaRegistro ?></center></th>
            <td><center><a class="btn btn-primary text-light" href="materiales.php?id=<?php echo $idObra ?>">Materiales</a></center></td>
          </tr>
       
<style>
#profileColor{
    color: white;
    background-color:<?php echo $color   ?> ;
}
</style>





<?php

    }
        }   

mysqli_close($miconexion);


include("footer.php");

?>