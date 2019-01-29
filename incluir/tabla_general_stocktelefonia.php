    <div class="container">
    <div class="rwd"> 
  <table class="rwd_auto" id="tblDatos">
    <thead>
      <tr>
        <th class="checar_todos" id="checar_todos">
          <input class="borrar_contacto" type="checkbox" name="<?php echo $reg['id_stockip']; ?>">
        </th>
        <th>No.</th>
        <th>Mac</th>
        <th>No. Serie</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Tecnologia</th>
        <th class="estatus" >Status</th>
        <th>Ver</th>

      </tr>
    </thead>
    <tbody>
      <?php //fetch_assoc, fetch_row, fetch_array, fetch_all, fetch_objects  ?>
      <?php while($reg = mysqli_fetch_array($registros) ) {
       ?>
       <?php //dentro parentesis (MYSQLI_ASSOC, MYSQLI_NUM) ?>
       <tr class="mostrar">
        <td class="borrar">
          <input class="borrar_contacto" type="checkbox" name="<?php echo $reg['id_stockip']; ?>">
        </td>
        <td>
          <?php echo $reg['id_stockip']; ?>
        </td>
        <td>
          <?php echo $reg['mac']; ?>
        </td>
        <td>
          <?php echo $reg['numserie']; ?>
        </td>
        <td>
          <?php echo$reg['nombre_marc']; ?>
        </td>
        <td>
          <?php echo $reg['nombre_mod'] ; ?>
        </td>
        <td>
          <?php echo $reg['nombre_tec']; ?>
        </td>
        <td>
          <?php echo $reg['nombre_status']; ?>
        </td>
        <td>
          <a  class="far1" href="#" style="width:auto;"><i class="fas fa-eye"></i>
          </a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div>
  <div class="container clearfix">
    <div class="registros">
      <div id="paginador"></div>
      <script type="text/javascript">
        var p = new Paginador(
          document.getElementById('paginador'),
          document.getElementById('tblDatos'),
          4
          );
        p.Mostrar();
      </script>
    </div>
  </div>