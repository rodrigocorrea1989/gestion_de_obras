<?php


include("header.php");

include("conexion.php");


include("refuse.php");

if($tipoUsuario=="Logista")
{

  header("location:index.php");


}

if($tipoUsuario=="Proyectos"){


  echo "<style>
    #pro{
     display:none;
    }

  
  </style>";




}


?>

<script>

function confirmar(){
var respuesta=confirm("¿Esta seguro procesar la función?");
if (respuesta == false){
event.preventDefault();
}  
}
</script>


<div class="container">
    <br><br>

           <center> <h2 class="text-success font-weight-bold font-capitalize">Obras</h2></center>

            <table class="table table-success mt-5">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col"><center>Nombre De Obra</center></th>
                    <th scope="col"><center>Líder</center></th>
                    <th scope="col"><center>Fecha De Registro</center></th>
                    <th scope="col"><center></center></th>
                    <th scope="col"><center></center></th>
                  </tr>
                </thead>
                <tbody>


                <?php



                $sql="SELECT * FROM OBRAS ";

                if($resultado=mysqli_query($miconexion,$sql)){

                     while($registro=mysqli_fetch_assoc($resultado)){

                            $nombreObra=$registro["nombreObra"];

                            $latinFecha=date("d-m-Y", strtotime($registro["fechaDeRegistro"]));

                            $idLider=$registro["idLider"];

                            $idObra=$registro["id"];


                            $sql2="SELECT * FROM lideres WHERE  id='$idLider' ";

                            if($resultado2=mysqli_query($miconexion,$sql2)){

                                while($registro2=mysqli_fetch_assoc($resultado2)){

                                    $nombreLider=$registro2["nombre"]." ".$registro2["apellido"];

                                    $color=$registro2["color"];


                                }

                            }    
                        

?>

                
<tr>
                    <th scope="row"><center><?php  echo  $nombreObra   ?></center></th>
                    <td><center><p style="color: white ; background-color:<?php echo $color ?>"><?php  echo  $nombreLider ?></p></center></td>
                    <td><center><?php  echo  $latinFecha ?></center></td>
                    <td><center><a class="btn btn-primary text-light" href="materiales.php?id=<?php echo $idObra ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg> Materiales</a></center></td>
                    <td><center><a id="pro" class="btn btn-danger text-light" href="deleteObra.php?id=<?php echo $idObra  ?>" onclick="confirmar();">ELIMINAR</a></center></td>
                  </tr>


<?php

    }
        }

mysqli_close($miconexion);



include("footer.php");



?>


</tbody>
        </table>    
            </div>