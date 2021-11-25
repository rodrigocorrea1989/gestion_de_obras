<?php

include("header.php");

require ("conexion.php");


include("refuse.php");

$id=htmlentities(addslashes($_GET["id"]));

$sql2="SELECT * FROM OBRAS WHERE id= '$id'";

            if($resultado2=mysqli_query($miconexion,$sql2)){

                while($registro2=mysqli_fetch_assoc($resultado2)){

                    $id2=$registro2["id"];

                    $nombre=$registro2["nombreObra"];


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
    


<h2 class="text-primary text-center font-weight-bold font-italic mt-5">Solicitar materiales para: " <?php echo $nombre   ?> "</h2>    
    <!-- comienzo el formulario -->  
    <div class="container">
    <center>
    <div class="col-md-8 col-lg-6 mt-5">
        <form action="procesarSolicitudMateriales.php" method="POST">
                  <div class="form-group clonar">
                            <div class="form-group col-md-6"><br><br>
                               <center> <label for="">Material</label></center>
                                <input type="text" list="materiales" class="form-control" placeholder=" ej: cenemento x bolsa"  name="material[]">
                                <datalist id="materiales">
                                    <?php
                                    $sql="SELECT * FROM materiales_deposito ";

                                    if($resultado=mysqli_query($miconexion,$sql)){
                        
                                    while($registro=mysqli_fetch_assoc($resultado)){

                                    ?>

                                 <option value=<?php echo $registro["nombreMaterial"] ?>>en depósito</option>

                                 <?php

                                    }
                                }

                                mysqli_close($miconexion);

                                ?>
                                </datalist>
                                <span class="badge badge-pill badge-danger puntero ocultar">Eliminar</span>
                            </div>
                        </div>
                        <div id="contenedor"></div>
                            <div class="col-md-6 text-center">
                                <button class="btn btn-success" id="agregar">Agregar Material+</button><br><br>
                                <button class="btn btn-warning">Asignar Materiales Planificados+</button>
                        </div>
                        <br><br>
                                <input type="hidden" value="<?php echo $id ?>" name="id">    
        <button type="submit" class="btn btn-primary mt-3" id="registrar" onclick="confirmar();">Solicitar Materiales</button>
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



include("footer.php");

?>