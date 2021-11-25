<?php


include("header.php");


include("refuse.php");

if($tipoUsuario=="Proyectos")
{

  header("location:index.php");


}

?>

<div class="container mt-5">

<center> 

<a href="verHerramientas.php"><button style="width:250px" type="button" class="btn btn-primary mt-5 btn-lg ml-4"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg><br>Ver  <br> Herramientas <br> </button></a> 

<a href="ingresarHerramientas.php"><button style="width:250px" type="button" class="btn btn-primary mt-5 btn-lg ml-4"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-wrench" viewBox="0 0 16 16">
  <path d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z"/>
</svg><br> registrar<br> Herramientas <br></button></a>

<a href="asignarHerramientas.php"><button style="width:250px" type="button" class="btn btn-primary mt-5 btn-lg ml-4"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-layer-backward" viewBox="0 0 16 16">
  <path d="M8.354 15.854a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708l1-1a.5.5 0 0 1 .708 0l.646.647V4H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H9v7.793l.646-.647a.5.5 0 0 1 .708 0l1 1a.5.5 0 0 1 0 .708l-3 3z"/>
  <path d="M1 9a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h4.5a.5.5 0 0 1 0 1H1v2h4.5a.5.5 0 0 1 0 1H1zm9.5 0a.5.5 0 0 1 0-1H15V6h-4.5a.5.5 0 0 1 0-1H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4.5z"/>
</svg><br>Asignar <br> Herramientas a Líderes</button></a>


      </center>

</div>


<?php

require ("conexion.php");

include("footer.php");



?>