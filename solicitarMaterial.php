<?php

include("header.php");

require ("conexion.php");


include("refuse.php");


?>

<h2 class="text-success text-center font-weight-bold font-italic mt-5">Seleccionar Obra</h2>    
    <!-- comienzo el formulario -->  
    <div class="container">
    <table class="table table-primary table-striped mt-5">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nombre de Obra</th>
            <th scope="col">Fecha De Registro De Obra</th>
            <th scope="col"></th>
        
      </tr>
    </thead>
    <tbody>
        <?php


            $sql="SELECT * FROM OBRAS";

            if($resultado=mysqli_query($miconexion,$sql)){

                while($registro=mysqli_fetch_assoc($resultado)){

                    $id=$registro["id"];



                  
        ?>


                <tr>
                    <th class="text-dark" scope="row"><?php  echo  $registro["nombreObra"]   ?></th>
                    <td class="text-dark"><?php  echo  $latinFecha=date("d-m-Y", strtotime($registro["fechaDeRegistro"]));    ?></td>
                    <td><a class="btn btn-success text-light" href="seleccionarMaterial.php?id=<?php echo $id ?>" >Solicitar</a></td>
                    
                    
                    
                </tr>

 
</div>





<?php


    }
}

mysqli_close($miconexion);

include("footer.php");

?>