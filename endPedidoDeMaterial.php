<?php

include("header.php");

include("conexion.php");


include("refuse.php");

$idObra=htmlentities(addslashes($_GET["idObra"]));

$sql2="SELECT * FROM obras WHERE id = '$idObra' ";

if($resultado2=mysqli_query($miconexion,$sql2)){

while($registro2=mysqli_fetch_assoc($resultado2)){

   $nombreObra=$registro2["nombreObra"];

   $idLider=$registro2["idLider"];

}

}


$sql3="SELECT * FROM lideres WHERE id = '$idLider' ";

if($resultado3=mysqli_query($miconexion,$sql3)){

    while($registro3=mysqli_fetch_assoc($resultado3)){
    
       $nombreLider=$registro3["nombre"]." ".$registro3["apellido"];

       $color=$registro3["color"];
    
        }
    }




?>

<div class="container">
   
   <center> <h2 class="text-primary font-weight-bold font-capitalize">OBRA ("<?php echo $nombreObra; ?> ")</h2></center><br><br><br>
   <center><div class="col-md-4" > <h2 style="color: white ; background-color:<?php echo $color ?>"><?php echo $nombreLider; ?></h2><div></center><br><br><br><br><br>
   <center> <h2 class="text-dark font-weight-bold font-capitalize">Materiales</h2></center>

    <table class="table table-primary mt-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre Material</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Fecha de registro</th>
          </tr>
        </thead>
        <tbody>

        <?php

            $sql="SELECT * FROM materiales_obra WHERE idObra = '$idObra' ";

            
            if($resultado=mysqli_query($miconexion,$sql)){

            while($registro=mysqli_fetch_assoc($resultado)){

                $nombreMaterial=$registro["nombreMaterial"];
                $cantidad=$registro["cantidad"];
                $fecha=$registro["fechaDeRegistro"];
                $latinFecha=date("d-m-Y", strtotime($fecha));  
         
        ?>

                <tr>
                    <th scope="row"><?php  echo  $nombreMaterial   ?></th>
                    <td><?php  echo  $cantidad ?></td>
                    <td><?php  echo  $latinFecha ?></td>
                  
            
<?php

    }

        }

       
        mysqli_close($miconexion);
        

include("footer.php");


?> 

</tbody>
</table>    
      </div>
