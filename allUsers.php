<?php

include("header.php");


include("refuse.php");


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
   

   <center> <h2 class="text-primary font-weight-bold font-capitalize">Usuarios</h2></center>

    <table class="table table-info mt-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Tipo</th>
            <th scope="col">Fecha de Registro</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

<?php



    $sql="SELECT * FROM USUARIOS ";

    
    if($resultado=mysqli_query($miconexion,$sql)){

    while($registro=mysqli_fetch_assoc($resultado)){

    $nombre=$registro["nombre"];
    
    $apellido=$registro["apellido"];

    $nombreDeUsuario=$registro["nombreUsuario"];

    $contraseña=$registro["contraseña"];

    $tipo=$registro["tipo"];

    $latinFecha=date("d-m-Y", strtotime($registro["fechaRegistroUsuario"]));    

    $id=$registro["id"];
    

    

?>


          <tr>
            <th scope="row"><?php  echo  $nombreDeUsuario  ?></th>
            <td><?php  echo  $nombre?></td>
            <td><?php  echo  $apellido?></td>
            <td><?php  echo  $contraseña ?></td>
            <td><?php  echo  $tipo ?></td>
            <td><?php  echo  $latinFecha ?></td>
            <td><a class="btn btn-danger text-light" href="deleteUser.php?id=<?php echo $id  ?>" onclick="confirmar();">ELIMINAR</a></td>
          </tr>
       


<?php
        }
    }
    
    mysqli_close($miconexion);


?>


    </tbody>
      </table>    
            </div>


<?php

require ("conexion.php");

include("footer.php");

?>