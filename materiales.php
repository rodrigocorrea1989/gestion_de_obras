<?php

include("header.php");

include("conexion.php");


include("refuse.php");



$idObra=htmlentities(addslashes($_GET["id"]));


$sql3="SELECT * FROM OBRAS WHERE ID='$idObra'";

if($resultado3=mysqli_query($miconexion,$sql3)){

    while($registro3=mysqli_fetch_assoc($resultado3)){
        
        $nombreObra=$registro3["nombreObra"];

    }
}


?>
<br><br>
<center> <h2 class="text-success font-weight-bold font-capitalize"><?php  echo $nombreObra ?></h2></center><br><br><br>


<div class="container">
  <div class="row">
    <div class="col">
    <center> <h3 class="text-danger font-weight-bold font-capitalize">Materiales Asignados</h3></center>
    <table class="table table-primary mt-5">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col"><center>Nombre Material</center></th>
                    <th scope="col"><center>Cantidad </center></th>
                    <th scope="col"><center>Fecha de Registro</center></th>
                    </tr>
                    </thead>
                     <tbody>
                    <?php
                    $sql4="SELECT * FROM materiales_obra WHERE idObra= '$idObra' ";

                    if($resultado4=mysqli_query($miconexion,$sql4)){

                    while($registro4=mysqli_fetch_assoc($resultado4)){

                        $nombreMaterial4=$registro4["nombreMaterial"];

                        $cantidad4=$registro4["cantidad"];

                        $fecha4=$registro4["fechaDeRegistro"];

                        $latinFecha4=date("d-m-Y", strtotime($fecha4));

                    ?>

                    <tr>
                    <th scope="row"><center><?php  echo  $nombreMaterial4   ?></center></th>
                    <td><center><?php  echo  $cantidad4   ?></center></td>
                    <td><center><?php echo $latinFecha4 ?></center></td>
            </tr>    

                    <?php
                    
                    }
                }


                    ?>
                
                </tbody>
        </table>    
    </div>
    <div class="col">
    <center> <h3 class="text-danger font-weight-bold font-capitalize">Materiales Solicitados</h3></center>
    <table class="table table-primary mt-5">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col"><center>Nombre Material</center></th>
                    <th scope="col"><center>Cantidad </center></th>
                    <th scope="col"><center>Fecha de Envío</center></th>
                    </tr>
                    </thead>
                     <tbody>
                    <?php
                    $sql5="SELECT * FROM materiales_solicitados WHERE idObra= '$idObra' ";

                    if($resultado5=mysqli_query($miconexion,$sql5)){

                    while($registro5=mysqli_fetch_assoc($resultado5)){

                        $nombreMaterial5=$registro5["nombreMaterial"];

                        $cantidad5=$registro5["cantidad"];

                        $fecha5=$registro5["fechaDeEnvio"];

                        $latinFecha5=date("d-m-Y", strtotime($fecha5));

                    ?>

                    <tr>
                    <th scope="row"><center><?php  echo  $nombreMaterial5   ?></center></th>
                    <td><center><?php  echo  $cantidad5   ?></center></td>
                    <td><center><?php echo $latinFecha5 ?></center></td>
            </tr>    

                    <?php
                    
                    }
                }


                    ?>
                
                </tbody>
        </table>    
    </div>
  </div>



<div class="container">
    <br><br>

          

           <center> <h3 class="text-danger font-weight-bold font-capitalize">Balance</h3></center>

            <table class="table table-primary mt-5">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col"><center>Materiales Asignados</center></th>
                    <th scope="col"><center>Cantidad Asignada</center></th>
                    <th scope="col"><center></center></th>
                    <th scope="col"><center>Materiales Solicitados</center></th>
                    <th scope="col"><center>Cantidad Solicitada</center></th>
                    <th scope="col"><center>Balance</center></th>
                    <th scope="col"><center></center></th>
                  </tr>
                </thead>
                <tbody>

                <?php



$sql="SELECT * FROM materiales_obra WHERE idObra= '$idObra' ";

if($resultado=mysqli_query($miconexion,$sql)){

     while($registro=mysqli_fetch_assoc($resultado)){

        $nombreMaterial=$registro["nombreMaterial"];

        $cantidadMA=$registro["cantidad"];

        
        $sql2="SELECT * FROM materiales_solicitados WHERE idObra= '$idObra'";

        if($resultado2=mysqli_query($miconexion,$sql2)){

            while($registro2=mysqli_fetch_assoc($resultado2)){  

                if($registro2["nombreMaterial"]==$nombreMaterial){

                $nombreMaterialMS=$registro2["nombreMaterial"];

                $cantidadMS=$registro2["cantidad"];

                $balance=$cantidadMA-$cantidadMS;


                if($balance<0){

                    $alerta="<p class='text text-danger'>Sobrepasa la cantidad definida</p>";

                }else{

                    $alerta="<p class='text text-success'>No sobrepasa la cantidad definida</p>";

                }




?>


                <tr>
                    <th scope="row"><center><?php  echo  $nombreMaterial   ?></center></th>
                    <td><center><?php  echo  $cantidadMA   ?></center></td>
                    <td><center></center></td>
                    <th ><center><?php echo $nombreMaterialMS ?></center></th>
                    <td><center><?php echo $cantidadMS  ?></center></td>
                    <th><center><?php echo $balance ?></center></th>
                    <th ><center><p class="text text-danger"><?php echo $alerta ?></p></center></th>
            </tr>    
                  



<?php


     }


        }

    }

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