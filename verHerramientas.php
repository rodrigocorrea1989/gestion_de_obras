<?php

include("header.php");

include("conexion.php");


include("refuse.php");

if($tipoUsuario=="Proyectos")
{

  header("location:index.php");


}

?>

 <!-- HERRAMIENTAS SIN ASIGNAR -->
<div class="container">

        

           <center> <h2 class="text-primary font-weight-bold font-capitalize">Herramientas</h2></center><br><br><br>

           <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Herramientas sin asignar
            </a>
    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
         Herramientas Asignadas
    </button>
    </p>
    <div class="collapse" id="collapseExample">

    <center> <h2 class="text-primary font-weight-bold font-capitalize">Herramientas sin Asignar</h2></center>
            <table class="table mt-5">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col"><center>Nombre Herramienta</center></th>
                    <th scope="col"><center>Cantidad</center></th>
                    <th scope="col"><center>Fecha de registro</center></th>

                  </tr>
                </thead>
                <tbody>

        <?php



            $sql="SELECT * FROM herramientas_deposito";

            
            if($resultado=mysqli_query($miconexion,$sql)){

            while($registro=mysqli_fetch_assoc($resultado)){

                $nombreHerramienta=$registro["nombreHerramienta"];

                $cantidad=$registro["cantidad"];

                $fecha=$registro["fechaDeRegistro"];

                $latinFecha=date("d-m-Y", strtotime($fecha));    

        
            

        ?>

        
                  <tr>
                    <th scope="row"><center><?php  echo  $nombreHerramienta  ?></center></th>
                    <td><center><?php  echo  $cantidad?></center></td>
                    <td><center><?php  echo  $latinFecha ?></center></td>
                  </tr>
               


        <?php
                }
            }
            
        

        ?>


            </tbody>
              </table>
        </div>

                    </div>

                <!-- HERRAMIENTAS  sin ASIGNAR -->

                 <!-- HERRAMIENTAS  ASIGNADAS -->


                 <div class="collapse" id="collapseExample2">
                <div class="container">

                <center> <h2 class="text-success font-weight-bold font-capitalize">Herramientas Asignadas</h2></center>

            <table class="table mt-5">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col"><center>Nombre Herramienta</center></th>
                    <th scope="col"><center>Cantidad</center></th>
                    <th scope="col"><center>Líder</center></th>
                    <th scope="col"><center>Fecha de registro</center></th>

                  </tr>
                </thead>
                <tbody>

        <?php



            $sql2="SELECT * FROM herramientas_asignadas";

            if($resultado2=mysqli_query($miconexion,$sql2)){

            while($registro2=mysqli_fetch_assoc($resultado2)){

                $nombreHerramienta2=$registro2["nombreHerramienta"];

                $cantidad2=$registro2["cantidad"];

                $fecha2=$registro2["fechaDeRegistro"];

                $latinFecha2=date("d-m-Y", strtotime($fecha2));    

                $diLider=$registro2["idLider"];

                $sql3="SELECT * FROM lideres WHERE id='$diLider'";

                if($resultado3=mysqli_query($miconexion,$sql3)){

                    while($registro3=mysqli_fetch_assoc($resultado3)){

                        $nombreLider=$registro3["nombre"]." ".$registro3["apellido"];

                        $color=$registro3["color"];


                    }   

                }   

                

        
            

        ?>

        
                  <tr>
                    <th scope="row"><center><?php  echo  $nombreHerramienta2  ?></center></th>
                    <td><center><?php  echo  $cantidad2 ?></center></td>
                    <td><center><p style="color: white ; background-color:<?php echo $color ?>"><?php  echo  $nombreLider ?></p></center></td>
                    <td><center><?php  echo  $latinFecha2 ?></center></td>
                  </tr>
               


        <?php
                }
            }
            
            mysqli_close($miconexion);
        

        ?>


            </tbody>
              </table>
                    </div>
        </div>

<!-- HERRAMIENTAS  ASIGNADAS -->

<?php

include("footer.php");

?>