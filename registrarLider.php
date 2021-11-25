<?php

include("header.php");

include("refuse.php");

if($tipoUsuario=="Logista")
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

<h2 class="text-primary text-center font-weight-bold font-italic mt-5">Registrar Líder</h2>    
    <!-- comienzo el formulario -->  
    <div class="container">
    <center>
    <div class="col-md-8 col-lg-6 mt-5">
        <form action="procesarCrearLider.php" method="POST">
        <div class="form-group">
                <label class="text-dark" for="formGroupExampleInput">Alias</label>
                <input  type="text" name="alias" class="form-control mt-3" id="formGroupExampleInput" placeholder="Jperez" required>
             </div>
             <div class="form-group">
                <label class="text-dark" for="formGroupExampleInput">Nombre</label>
                <input  type="text" name="nombre" class="form-control mt-3" id="formGroupExampleInput" placeholder="Juan" required>
             </div>
             <div class="form-group">
                <label class="text-dark" for="formGroupExampleInput">Apellido</label>
                <input  type="text" name="apellido" class="form-control mt-3" id="formGroupExampleInput" placeholder="Perez" required>
</div>
        <div class="form-group">
            <label for="exampleColorInput" class="form-label">Color de Perfil</label>
            <input type="color" name="colorUsuario" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">      
        </div> 
        <button type="submit" class="btn btn-primary mt-3" id="registrar" onclick="confirmar();">Registrar Líder</button>
      </form>
    <div>
    </center>
</div>
     <!--  cierre de formulario  -->   






<?php

require ("conexion.php");

include("footer.php");

?>