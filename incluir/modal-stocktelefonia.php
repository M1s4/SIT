<!-- Aqui inicia el modal de la informacion de cada telefono al dar click en el boton ver de la tabla -->
<div id="id-modal-login" class="modal">
  <form class="contenido-modal-login animacion" action="/action_page.php">
    <div class="img-contenedor-login">
      <span onclick="document.getElementById('id-modal-login').style.display='none'" class="cerrar-modal-login" title="Cerrar Modal">&times;</span>
    </div>
    <div class="contenido-modal">
            <fieldset>
        <div class="modal-header clearfix">
         <div class="col-md-6">
          <label for="status" class="label_modal_header">Status</label>
          <label for="informacion_status" id="estatus" value=" " class="label_informacion_status"></label>
        </div>
        <div class="col-md-6">
          <label  class="label_modal_header">Fecha</label>
          <label for="informacion_status" id="fecha" value="" class="label_informacion_status"></label>
        </div>
        <div class="col-md-6">
          <label for="status" class="label_modal_header">Mac</label>
          <label for="informacion_status" id="cambia_mac" class="label_informacion_status">Status de todo este p2</label>
        </div>
        <div class="col-md-6">
          <label for="status" class="label_modal_header">Marca</label>
          <label for="informacion_status" id="cambia_marca" class="label_informacion_status">Status de todo este p2</label>


        </div>
      </div>
    </fieldset>

      <fieldset>
<legend></legend>

        <div class="modal-up contenedor clearfix">
                 <div class="col-md-3">
      <img src="" id="img_tel"  alt="Img Cisco 6901" class="img_telefono"/>
        </div>


          <div class="col-md-3">
            <label for="color" >Color telefono
              <input type="text" id="color_tel">
           </label>
        </div>

                    <div class="col-md-3">
            <label for="numserie_busqueda">Numero de Serie
              <input type="text"  id="num_serie">
            </label>
          </div>

                    <div class="col-md-3">
            <label for="numserie_busqueda">Item
              <input type="text" id="item_tel">
            </label>
          </div>
                    
                    <div class="col-md-3">
            <label for="numserie_busqueda">Lugar Resguardo
              <input type="text"  id="lugar_resguardo" value="">
            </label>
          </div>

                    <div class="col-md-3">
            <label for="numserie_busqueda">Lugar estante
              <input type="text"  id="lugar_estante" >
            </label>
          </div>

                    <div class="col-md-3">
            <label for="numserie_busqueda">Modelo
              <input type="text"  id="modelo_tel">
            </label>
          </div>

                    <div class="col-md-3">
            <label for="numserie_busqueda">Tecnologia
              <input type="text"  id="tecnologia_tel" placeholder="Ingrese Numero de serie">
            </label>
          </div>

                    <div class="col-md-3">
            <label for="numserie_busqueda">Estatus
              <input type="text"  id="estatus_tel">
            </label>
          </div>
 
      </div>
            <div class="col-md-12 comentario-centrado">
            <label for="numserie_busqueda">Comentarios
              <textarea id="comentarios" rows="10" cols="50" style ="resize:vertical; height: 100px">

</textarea>
            </label>
          </div> 
    </fieldset>
   
 

  </div>
  <div class="contenido-modal" style="background-color:#f1f1f1">
    <button type="button" class="btn-cancelar-login">Salir</button>
  </div>
</form>
</div>

<!-- Aqui termina el modal de la informacion de cada telefono al dar click en el boton ver de la tabla -->
