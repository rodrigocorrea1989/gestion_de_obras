<?php

include("header.php");

require ("conexion.php");


include("refuse.php");

if($tipoUsuario=="Proyectos")
{

  header("location:index.php");


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
<style>
        .puntero{
            cursor: pointer;
        }
        .ocultar{
            display: none;
        }
    </style>



<h2 class="text-primary text-center font-weight-bold font-italic mt-5">Procesar Materiales Entregados </h2>    
    <!-- comienzo el formulario -->  
    <div class="container">
    <center>
    <div class="col-md-8 col-lg-6 mt-5">
        <form action="procesarMaterialesSolicitados2PASO.php" method="POST">
                     <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Obra Destinada</label>
                        <select class="form-control" name="idObra" id="exampleFormControlSelect1">
                            <?php 
                             $sql="SELECT * FROM OBRAS";
                                
                             if($resultado=mysqli_query($miconexion,$sql)){

                                while($registro=mysqli_fetch_assoc($resultado)){
                    
                                 $nombreObra=$registro["nombreObra"];   
                                 $idObra=$registro["id"];

                            ?>
                         <option value="<?php echo $idObra ?>"><?php echo $nombreObra  ?></option>
                          
                          <?php
                          
                                }
                            }

                          ?>
                         
                 </select>
                </div><br><br>
        <button type="submit" class="btn btn-primary mt-3" id="registrar">Siguiente Paso</button>
      </form>
    <div>
    </center>
</div>
     <!--  cierre de formulario  -->   

     






<?php

mysqli_close($miconexion);


include("footer.php");

?>