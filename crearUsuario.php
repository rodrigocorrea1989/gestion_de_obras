<?php

include("header.php");


include("refuse.php");

if($tipoUsuario=="Logista")
{

  header("location:index.php");


}

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

<h2 class="text-primary text-center font-weight-bold font-italic mt-5">Crear Usuario</h2>    
    <!-- comienzo el formulario -->  
    <div class="container">
    <center>
    <div class="col-md-8 col-lg-6 mt-5">
        <form action="procesarCrearUsuario.php" method="POST">
            <div class="form-group">
                <label class="text-dark" for="formGroupExampleInput">Nombre de Usuario</label>
                <input  type="text" name="nombreUsuario" class="form-control mt-3" id="formGroupExampleInput" placeholder="jperez" required>
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
             <label for="exampleInputPassword1">Contraseña</label>
             <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="inputState" class="text-dark">Tipo de Usuario</label>
            <select id="inputState" name="tipoUsuario" class="form-control">
                <option value="adGerenciamin">Gerencia</option>
                <option value="Logísta">Logista</option>
                <option value="Proyectos">Proyectos</option>
                <option value="Administración">Administración</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3" id="registrar" onclick="confirmar();">Crear Usuario</button>
      </form>
    <div>
    </center>
</div>
     <!--  cierre de formulario  -->   


<br><br>
<center><a class="btn btn-outline-success" href="allUsers.php" >ver todos los usuarios creados</a></center>



<?php

require ("conexion.php");

include("footer.php");

?>