<?php

include("header.php");

include("conexion.php");


include("refuse.php");

?>


    <style>
        .puntero{
            cursor: pointer;
        }
        .ocultar{
            display: none;
        }
    </style>
    
    <div class="container pt-5">

        <div class="col">
                <div class="col-md-12">

                    <form id="form_contacto">
                

                        <div class="form-row">
                            <div class="col-md-6 text-center">
                                <button class="btn btn-success" id="agregar">Agregar Material+</button>
                            </div>
                        </div>
                        <div class="form-row clonar">
                            <div class="form-group col-md-6"><br><br>
                               <center> <label for="">Material</label></center>
                                <input type="text" class="form-control" placeholder="cenemento x bolsa"  name="material[]">
                                <span class="badge badge-pill badge-danger puntero ocultar">Eliminar</span>
                            </div>
                        </div>
                        <div id="contenedor"></div>

                        <div class="form-row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" id="enviar_contacto">Enviar</button>
                            </div>
                        </div>

                    </form>

                </div>
        </div>
    </div>


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