<?php


include("header.php");

include("refuse.php");

if($tipoUsuario=="Logista"){

  echo "<style>
    #res{
     display:none;
    }

  
  </style>";


}


if($tipoUsuario=="Proyectos"){


  echo "<style>
    #pro{
     display:none;
    }

  
  </style>";




}

?>

<div class="container mt-5">

<center> 

<a href="crearUsuario.php" id="pro"><button id="res"  style="width:250px" type="button" class="btn btn-primary mt-5 btn-lg ml-4"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cup-fill" viewBox="0 0 16 16">
           <path d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8z"/>
           </svg><br>Crear <br> Usuario</button></a>    

           <a href="Obras.php"><button  id="res" style="width:250px" type="button" class="btn btn-primary mt-5 btn-lg ml-4"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cone-striped" viewBox="0 0 16 16">
  <path d="m9.97 4.88.953 3.811C10.159 8.878 9.14 9 8 9c-1.14 0-2.158-.122-2.923-.309L6.03 4.88C6.635 4.957 7.3 5 8 5s1.365-.043 1.97-.12zm-.245-.978L8.97.88C8.718-.13 7.282-.13 7.03.88L6.275 3.9C6.8 3.965 7.382 4 8 4c.618 0 1.2-.036 1.725-.098zm4.396 8.613a.5.5 0 0 1 .037.96l-6 2a.5.5 0 0 1-.316 0l-6-2a.5.5 0 0 1 .037-.96l2.391-.598.565-2.257c.862.212 1.964.339 3.165.339s2.303-.127 3.165-.339l.565 2.257 2.391.598z"/>
</svg><br>  Obras<br><br></button></a>

<br>

<a href="logistica.php" id="pro"><button style="width:250px" type="button" class="btn btn-primary mt-5 btn-lg ml-4"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bricks" viewBox="0 0 16 16">
  <path d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2h5V1h-5zm6 0v2H15V1h-3.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z"/>
</svg><br>Logística<br><br></button></a> 

<a href="gestionarLideres.php" id="pro"><button id="res" style="width:250px" type="button" class="btn btn-primary mt-5 btn-lg ml-4"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-watch" viewBox="0 0 16 16">
  <path d="M8.5 5a.5.5 0 0 0-1 0v2.5H6a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V5z"/>
  <path d="M5.667 16C4.747 16 4 15.254 4 14.333v-1.86A5.985 5.985 0 0 1 2 8c0-1.777.772-3.374 2-4.472V1.667C4 .747 4.746 0 5.667 0h4.666C11.253 0 12 .746 12 1.667v1.86a5.99 5.99 0 0 1 1.918 3.48.502.502 0 0 1 .582.493v1a.5.5 0 0 1-.582.493A5.99 5.99 0 0 1 12 12.473v1.86c0 .92-.746 1.667-1.667 1.667H5.667zM13 8A5 5 0 1 0 3 8a5 5 0 0 0 10 0z"/>
</svg><br>Gestionar <br> LÍderes</button></a> 

<br>



<!--<a href="solicitarMaterial.php"><button style="width:250px" type="button" class="btn btn-success mt-5 btn-lg ml-4"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bucket-fill" viewBox="0 0 16 16">
  <path d="M2.522 5H2a.5.5 0 0 0-.494.574l1.372 9.149A1.5 1.5 0 0 0 4.36 16h7.278a1.5 1.5 0 0 0 1.483-1.277l1.373-9.149A.5.5 0 0 0 14 5h-.522A5.5 5.5 0 0 0 2.522 5zm1.005 0a4.5 4.5 0 0 1 8.945 0H3.527z"/>
</svg><br>Solicitar <br> Materiales</button></a>--> 

      </center>

</div>


<?php

require ("conexion.php");

include("footer.php");



?>