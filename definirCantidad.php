<?php  

include("header.php");

require("conexion.php");


include("refuse.php");

$id=htmlentities(addslashes($_GET["id"]));


?>
<script>

function confirmar(){
var respuesta=confirm("¿Esta seguro procesar la función?");
if (respuesta == false){
event.preventDefault();
}  
}
</script>

<h2 class="text-success text-center font-weight-bold font-italic mt-5">Ingresar Cantidad X material</h2>     

    <!-- comienzo el formulario -->  
    <div class="container">
    <center>
    <div class="col-md-8 col-lg-6 mt-5">
        <form action="procesarCantidadMaterial.php" method="POST">
    <?php

    $sql="SELECT * FROM materiales_obra WHERE idObra='$id' ";

            
            if($resultado=mysqli_query($miconexion,$sql)){

            while($registro=mysqli_fetch_assoc($resultado)){

                echo '<label for="exampleInputPassword1"  class="text-danger font-weight-bold">'.$registro["nombreMaterial"].'</label>

                  <input type="number" class="form-control" name="cantidadMaterial[]" id="exampleInputPassword1" placeholder="Ingrese cantidad">

                  <br><br>';




            }
            
        }      

?>
<input type="hidden" value="<?php echo $id  ?>" name="id">
</div>
        <button type="submit" class="btn btn-success mt-3" id="registrar" onclick="confirmar();">Finalizar solicitud</button>
      </form>
    <div>
    </center>
</div>
     <!--  cierre de formulario  -->   


<?php

include("footer.php");


?>