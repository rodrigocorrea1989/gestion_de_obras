<?php

include("header.php");

require ("conexion.php");
?>

<style>
#close{
    display: none;
}

</style>

<div class="container mt-5">
        
        <h2 class="text-info text-center font-weight-bold font-italic mt-5">Acceso<br><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>    </h2><br>
        
    <!-- comienzo el formulario -->  
    <center>
    <div class="col-md-4 col-lg-4 mt-5">
        <form action="comprobarAcceso.php" method="POST">
        <div class="form-group">
          <label class="text-info" for="formGroupExampleInput">Nombre de Usuario</label>
          <input  type="text" name="nombreUsuario" class="form-control mt-3" id="formGroupExampleInput" placeholder="Ingrese su Nombre de Usuario" required>
        </div>
        <div class="form-group mt-3">
          <label class="text-info" for="formGroupExampleInput2">Contraseña</label>
          <input type="password" name="password" class="form-control mt-3" id="formGroupExampleInput2" placeholder="Contraseña" required>
        </div>
        <button type="submit" class="btn btn-info mt-3">ACCEDER</button>
      </form>
    <div>
    </center>
     <!--  cierre de formulario  -->   


<?php

include("footer.php");

?>