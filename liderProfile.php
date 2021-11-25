<?php

include("header.php");

include("conexion.php");


include("refuse.php");

if($tipoUsuario=="Logista")
{

  header("location:index.php");


}

?>
<div class="container">
   

   <center> <h2 class="text-primary font-weight-bold font-capitalize">lista de Líderes</h2></center>

    <table class="table table-primary mt-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col"> <center>Líder</center></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

<?php



    $sql="SELECT * FROM LIDERES ";

    
    if($resultado=mysqli_query($miconexion,$sql)){

    while($registro=mysqli_fetch_assoc($resultado)){

    $nombre=$registro["nombre"];

    $apellido=$registro["apellido"];

    $color=$registro["color"];

    $id=$registro["id"];
    

?>
<style>

#profileColor{
    color: white;
    background-color:<?php echo $color;   ?> ;
}


</style> 


          <tr>
            <th scope="row" ><center><p  style="color: white ; background-color:<?php echo $color ?>"><?php  echo  $nombre." ".$apellido  ?></p></center></th>
            <td><center><a class="btn btn-info text-light" onclick="confirmar();" href="obrasAsignadas.php?id=<?php echo $id ?>">Ver Obras Asignadas</a></center></td>
            <td><center><a class="btn btn-success text-light" href="mostrarHerramientasAsignadas.php?id=<?php echo $id ?>">Ver Herramientas Asignadas</a></center></td>
          </tr>
       




<?php

    }
        }   

mysqli_close($miconexion);


include("footer.php");

?>