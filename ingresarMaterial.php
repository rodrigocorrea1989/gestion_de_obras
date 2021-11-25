<?php

include("header.php");


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

<h2 class="text-success text-center font-weight-bold font-italic mt-5">Ingresar Material</h2>    
    <!-- comienzo el formulario -->  
    <div class="container">
    <center>
    <div class="col-md-8 col-lg-6 mt-5">
        <form action="procesarIngresarMaterial.php" method="POST">
            <div class="form-group">
                <label class="text-dark" for="formGroupExampleInput">Nombre de Material</label>
                <input  type="text" name="nombreMaterial" class="form-control mt-3" id="formGroupExampleInput" placeholder="tuerca metalica" required>
             </div>
        <div class="form-group">
             <label for="exampleInputPassword1">Cantidad</label>
             <input type="number" class="form-control" name="cantidad" id="exampleInputPassword1" placeholder="22">
        </div>
        <button type="submit" class="btn btn-success mt-3" id="registrar" onclick="confirmar();">Ingresar Material</button>
      </form>
    <div>
    </center>
</div>
     <!--  cierre de formulario  -->   




<?php

require ("conexion.php");

include("footer.php");

?>