<!-- Aqui inicia el modal de la informacion de cada telefono al dar click en el boton ver de la tabla -->
<div id="id-modal-busqueda-telefono" class="modal">
  <div class="contenido-modal-login animacion">
    <div class="img-contenedor-login">
      <span onclick="document.getElementById('id-modal-busqueda-telefono').style.display='none'" class="cerrar-modal-login" title="Cerrar Modal">&times;</span>
    </div>
    <div class="contenido-modal">


      <fieldset>
<legend>Agregar ubicacion de telefono</legend>


        <div class="modal-up contenedor clearfix">

<div class="col-md-4">
<label for="tecnologia_busqueda">Estante <i class="fas fa-question-circle"></i>

           
          <select name="modal-tecnologia_busqueda" id="modal-tecnologia_busqueda">
             <option disabled selected hidden class="fotecnologia" value="">Seleccione tecnologia </option>           
             <?php WHILE ($row=$resultado3->fetch_assoc()) {?>  
             <option value="<?php echo $row['nombre_tec']; ?>"><?php echo $row['nombre_tec'];?></option>
             <?php } ?>
          </select>
        </label>
</div>

<div class="col-md-4">
            <label for="modal-marca_busqueda">Ubicacion <i class="fas fa-question-circle"></i>


              <select id="modal-marca_busqueda" name="modal-marca_busqueda" >
                 <option disabled selected hidden class="fotecnologia" value="">Seleccione marca  </option>
               <?php WHILE ($row=$resultado->fetch_assoc()) {?>  
               <option value="<?php echo $row['nombre_marc']; ?>"><?php echo $row['nombre_marc'];?></option>
               <?php } ?>
             </select>
           </label>
</div>

<div class="col-md-4">
          <label for="modal_modelo_busqueda">Lugar de resguardo <i class="fas fa-question-circle"></i>


            <select name="modal_modelo_busqueda" id="modal_modelo_busqueda" >
               <option disabled selected hidden class="fotecnologia" value="">Seleccione modelo  </option>
             <?php WHILE ($row=$resultado4->fetch_assoc()) {?>  
             <option value="<?php echo $row['nombre_mod']; ?>"><?php echo $row['nombre_mod'];?></option>
             <?php } ?>
           </select>
         </label>
</div>







            <div class="col-md-12 comentario-centrado">
            <label for="numserie_busqueda">Comentarios <i class="fas fa-question-circle"></i>


              <textarea rows="10" cols="50" style ="resize:vertical; height: 100px" placeholder="Escriba sus comentarios"></textarea>
            </label>
          </div>




      </div>
    </fieldset>
   
 

  </div>

<div class="modal-footer">

<div class="col-md-6">
    <button type="button" class="btn btn-primary btn-modal" >Guardar</button>
</div>
<div class="col-md-6">
<button type="button" class="btn btn-danger btn-modal" onclick="document.getElementById('id-modal-busqueda-telefono').style.display='none'" class="cerrar-modal-login" >Salir</button>

</div>
  </div>



</div>
</div>

<!-- Aqui termina el modal de la informacion de cada telefono al dar click en el boton ver de la tabla -->
