<?php

include("header.php");

require ("conexion.php");


include("refuse.php");

$id=htmlentities(addslashes($_GET["id"]));

$sql="SELECT * FROM LIDERES WHERE id='$id'";
                                
if($resultado=mysqli_query($miconexion,$sql)){

   while($registro=mysqli_fetch_assoc($resultado)){

    $lider=$registro["nombre"]." ".$registro["apellido"];

    $color=$registro["color"];

   }

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
    


<h2 class="text-primary text-center font-weight-bold font-italic mt-5">Definir Herramientas </h2><br><br>
   
    <!-- comienzo el formulario -->  
    <div class="container">
    <center><h3 style="color: white ; background-color:<?php echo $color ?>"><?php echo $lider ?></h3></center> 
    <center>
    <div class="col-md-8 col-lg-6 mt-5">
        <form action="procesarAsignarHerramientas.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="color" value="<?php echo $color ?>">
                  <div class="form-group clonar">
                            <div class="form-group col-md-12"><br><br>
                                <div class="row">
                                <div class="col">
                                <label for="exampleInputEmail1">Seleccione Herramienta</label>
                                <select name="nombreHerramienta[]" class="form-control">
                                    <?php 
                                        
                                        $sql2="SELECT * FROM herramientas_deposito";
                                
                                        if($resultado2=mysqli_query($miconexion,$sql2)){

                                            while($registro2=mysqli_fetch_assoc($resultado2)){

                                                  $nombreMaterial=$registro2["nombreHerramienta"];  
                                    
                                    
                                    
                                    ?>
                                        <option value="<?php echo $nombreMaterial ?>"><?php echo $nombreMaterial  ?></option>

                                        <?php

                                        }

                                    }  

                                        ?>
                                </select> 
                                    </div>
                            <div class="col-md-3">
                            <label for="exampleInputEmail1">Cantidad</label>
                            <input type="number" class="form-control" name="cantidadHerramienta[]" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="50"> 
                                 </div>
                                </div>
                                <span class="badge badge-pill badge-danger puntero ocultar">Eliminar</span>
                            </div>
                        </div>
                        <div id="contenedor"></div>
                            <div class="col-md-6 text-center">
                                <button class="btn btn-success" id="agregar">Agregar Material+</button><br><br>
                        </div>
                        <br><br>
        <button type="submit" class="btn btn-primary mt-3" id="registrar" onclick="confirmar();">Procesar</button>
      </form>
    <div>
    </center>
</div>
     <!--  cierre de formulario  -->   

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
    
        let agregar = document.getElementById('agregar');
        let contenido = document.getElementById('contenedor');

        let boton_enviar = document.querySelector('#enviar_contacto')

        agregar.addEventListener('click', e =>{
            e.preventDefault();
            let clonado = document.querySelector('.clonar');
            let clon = clonado.cloneNode(true);

            contenido.appendChild(clon).classList.remove('clonar');

            let remover_ocutar = contenido.lastChild.childNodes[1].querySelectorAll('span');
            remover_ocutar[0].classList.remove('ocultar');
        });

        contenido.addEventListener('click', e =>{
            e.preventDefault();
            if(e.target.classList.contains('puntero')){
                let contenedor  = e.target.parentNode.parentNode;
            
                contenedor.parentNode.removeChild(contenedor);
            }
        });


        boton_enviar.addEventListener('click', e => {
            e.preventDefault();

            const formulario = document.querySelector('#form_contacto');
            const form = new FormData(formulario);

            const peticion = {
                body:form,
                method:'POST'
            };

            fetch('php/inserta-contacto.php',peticion)
                .then(res => res.json())
                .then(res => {
                    if (res['respuesta']) {
                        alert(res['mensaje']);
                        formulario.reset();
                    }else{
                        alert(res['mensaje']);
                    }

                });


        });

    </script>    






<?php

mysqli_close($miconexion);


include("footer.php");

?>