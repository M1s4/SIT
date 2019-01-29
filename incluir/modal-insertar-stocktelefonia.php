<!-- Aqui inicia el modal de la informacion de cada telefono al dar click en el boton ver de la tabla -->
<div id="id-modal-agregar-telefono" class="modal">
  <div class="contenido-modal-login animacion">
    <div class="img-contenedor-login">
      <span onclick="document.getElementById('id-modal-agregar-telefono').style.display='none'" class="cerrar-modal-login" title="Cerrar Modal">&times;</span>
    </div>
    <div class="contenido-modal">


      <fieldset>
<legend>Agregar Telefono</legend>


        <div class="modal-up contenedor clearfix">

<div class="col-md-4">
<label for="tecnologia_busqueda2">Tecnologia <i class="fas fa-question-circle tooltipp"><span class="tooltiptext"><p class="txttooltip">En este campo se debe de agregar el campo de tecnología del dispositivo, en caso de tener duda del tipo de tecnología, confirmarlo con su supervisor o jefe que se encuentre disponible, de igual manera este dato puede estar en sus respectivas etiquetas detrás del dispositivo</p></span></i>
          <select name="modal-tecnologia_busqueda2" id="modal-tecnologia_busqueda2">
             <option disabled selected hidden class="fotecnologia" value="">Seleccione tecnologia </option>           
             <?php WHILE ($row=$resultado3->fetch_assoc()) {?>  
             <option value="<?php echo $row['nombre_tec']; ?>"><?php echo $row['nombre_tec'];?></option>
             <?php } ?>
          </select>
        </label>
</div>

<div class="col-md-4">
            <label for="modal-marca_busqueda">Marca <i class="fas fa-question-circle tooltipp"><span class="tooltiptext"><p class="txttooltip">En este campo se debe de agregar el campo de marca del dispositivo, en caso de tener duda del tipo de tecnología, confirmarlo con su supervisor o jefe que se encuentre disponible, de igual manera este dato puede estar en sus respectivas etiquetas detrás del dispositivo</p></span></i>
              <select id="modal-marca_busqueda" name="modal-marca_busqueda" >
                 <option disabled selected hidden class="fotecnologia" value="">Seleccione marca  </option>
               <?php WHILE ($row=$resultado->fetch_assoc()) {?>  
               <option value="<?php echo $row['nombre_marc']; ?>"><?php echo $row['nombre_marc'];?></option>
               <?php } ?>
             </select>
           </label>
</div>

<div class="col-md-4">
          <label for="modal_modelo_busqueda">Modelo <i class="fas fa-question-circle"></i>
            <select name="modal_modelo_busqueda" id="modal_modelo_busqueda" >
               <option disabled selected hidden class="fotecnologia" value="">Seleccione modelo  </option>
             <?php WHILE ($row=$resultado4->fetch_assoc()) {?>  
             <option value="<?php echo $row['nombre_mod']; ?>"><?php echo $row['nombre_mod'];?></option>
             <?php } ?>
           </select>
         </label>
</div>





<div class="col-md-4">
<label for="mac-modal">Mac <i class="fas fa-question-circle tooltip"><span class="tooltiptext">Este es el fucking tooltip bien vergas qliao :v</span> </i></label>  
<input type="text" name="mac-modal" id="mac-modal" placeholder="MAC">
</div>


          <div class="col-md-4">
            <label for="numserie_busqueda">Numero de Serie <i class="fas fa-question-circle"></i>
              <input type="text" name="numserie_busqueda" id="numserie_busqueda" placeholder="Ingrese Numero de serie">
            </label>
          </div>

          <div class="col-md-4">
<label for="modal-status_busqueda tooltip">Status <i class="fas fa-question-circle"></i>

          <select name="modal-status_busqueda" id="modal-status_busqueda">
             <option disabled selected hidden value="">Seleccione status </option>
            <?php WHILE ($row=$resultado2->fetch_assoc()) {?>  
            <option value="<?php echo $row['nombre_status']; ?>"><?php echo $row['nombre_status'];?></option>
            <?php } ?>
          </select>
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
<button type="button" class="btn btn-danger btn-modal" onclick="document.getElementById('id-modal-agregar-telefono').style.display='none'" class="cerrar-modal-login" >Salir</button>

</div>
  </div>



</div>
</div>

<!-- Aqui termina el modal de la informacion de cada telefono al dar click en el boton ver de la tabla -->
