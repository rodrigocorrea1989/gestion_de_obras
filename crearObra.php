<?php

include("header.php");

require ("conexion.php");


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
<style>
        .puntero{
            cursor: pointer;
        }
        .ocultar{
            display: none;
        }
    </style>
    

<h2 class="text-primary text-center font-weight-bold font-italic mt-5">Crear Obra</h2>    
    <!-- comienzo el formulario -->  
    <div class="container">
    <center>
    <div class="col-md-8 col-lg-6 mt-5">
        <form action="crearObraPower.php" method="POST">
            <div class="form-group">
                <label class="text-dark" for="formGroupExampleInput">Nombre De Obra</label>
                <input  type="text" name="nombreObra" class="form-control mt-3" id="formGroupExampleInput" placeholder="ej: casa1" required>
             </div>
        <div class="form-group">
            <label for="inputState" class="text-dark">Seleccionar Líder de Obra</label>
            <select id="inputState" name="idLider" class="form-control">
                <?php

                $sql="SELECT * FROM LIDERES ";

                if($resultado=mysqli_query($miconexion,$sql)){

                 while($registro=mysqli_fetch_assoc($resultado)){

                 $nombreCompleto=$registro['nombre']." ".$registro['apellido'];

                 $nombreUsuario=$registro["nombreUsuario"];

                 $color=$registro["color"];

                 $id=$registro["id"]

                ?> 


              <option value="<?php echo $id ?>" style=" color:white; background-color:<?php echo $color  ?>" ><?php echo $nombreCompleto ?></option>

                <?php

             }  
            }

      

                 
               ?>
            </select><br><br>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripción</label>
            <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
              <center><h3 class="text-danger">Definir Materiales<h3></center>
                        <div class="form-group clonar">
                            <div class="form-group col-md-6"><br><br>
                               <center> <label for="">Material</label></center>
                                <input type="text" list="materiales" class="form-control" placeholder=" ej: cenemento x bolsa"  name="material[]">
                               <?php
                            

                                mysqli_close($miconexion);

                                ?>
                                </datalist>
                                <span class="badge badge-pill badge-danger puntero ocultar">Eliminar</span>
                            </div>
                        </div>
                        <div id="contenedor"></div>
                            <div class="col-md-6 text-center">
                                <button class="btn btn-success" id="agregar">Agregar Material+</button>
                        </div>
                        <br><br>

        <button type="submit" class="btn btn-primary mt-3" id="registrar" onclick="confirmar();">Crear Obra</button>
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