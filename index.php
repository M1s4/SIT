<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIT- SISTEMA DE INFORMACION TELEFONICA</title> 
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">    
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
   <script src="js/funcion.js"></script>
</head>
<body>
<?php include 'incluir/nav-stocktelefonia.php';?>

  <div class="banner-stockt"></div>
<?php include 'incluir/modal-stocktelefonia.php';?>
<?php include 'incluir/modal-insertar-stocktelefonia.php';?>
<?php include 'incluir/modal-insertar-ubicacion-stocktelefonia.php';?>
  <div class="container">
    <a href="#" class="btn btn-primary btn-agregar" id="Btn-agregar-ubicacion">Agregar ubicacion</a>
    <a href="#" class="btn btn-primary btn-agregar" id="Btn-agregar-telefono">Agregar Telefono</a>


  </div>

  <div class="container clearfix" >
    <fieldset>
      <legend>Busqueda Stock Telefonia</legend>
        <div class="contenedor-busqueda">
                 <div class="col-md-4">  
        <label for="tecnologia_busqueda">Tecnologia          
          <select name="tecnologia_busqueda" id="tecnologia_busqueda">
             <option disabled selected hidden class="fotecnologia" value="">Seleccione tecnologia </option>           
             <?php WHILE ($row=$resultado3->fetch_assoc()) {?>  
             <option value="<?php echo $row['nombre_tec']; ?>"><?php echo $row['nombre_tec'];?></option>
             <?php } ?>
          </select>
        </label>
      </div>
                <div class="col-md-4">
            <label for="marca_busqueda">Marca
              <select id="marca_busqueda" name="marca_busqueda" >
                 <option disabled selected hidden class="fotecnologia" value="">Seleccione marca  </option>
               <?php WHILE ($row=$resultado->fetch_assoc()) {?>  
               <option value="<?php echo $row['nombre_marc']; ?>"><?php echo $row['nombre_marc'];?></option>
               <?php } ?>
             </select>
           </label>
         </div>
         <div class="col-md-4">
          <label for="modelo_busqueda">Modelo
            <select name="modelo_busqueda" id="modelo_busqueda" >
               <option disabled selected hidden class="fotecnologia" value="">Seleccione modelo  </option>
             <?php WHILE ($row=$resultado4->fetch_assoc()) {?>  
             <option value="<?php echo $row['nombre_mod']; ?>"><?php echo $row['nombre_mod'];?></option>
             <?php } ?>
           </select>
         </label>
       </div>
             <div class="col-md-4">
        <label for="status_busqueda">Status
          <select name="status_busqueda" id="status_busqueda">
             <option disabled selected hidden value="">Seleccione status </option>
            <?php WHILE ($row=$resultado2->fetch_assoc()) {?>  
            <option value="<?php echo $row['nombre_status']; ?>"><?php echo $row['nombre_status'];?></option>
            <?php } ?>
          </select>
        </label>
      </div>

          <div class="col-md-4">
            <label for="mac_busqueda">Mac
              <input type="text" name="mac_busqueda" id="mac_busqueda" placeholder="Ingrese Mac-Address">
            </label>
          </div>
          <div class="col-md-4">
            <label for="numserie_busqueda">Numero de Serie
              <input type="text" name="numserie_busqueda" id="numserie_busqueda" placeholder="Ingrese Numero de serie">
            </label>
          </div>


    </div>
  </fieldset>
</div> 
<!-- Aqui termina el container clearfix -->

 <?php
 $registros=mysqli_query($maysqli,"SELECT id_stockip, fecha, numserie, mac, item, comentario, nombre_marc, nombre_mod, nombre_color, nombre_tec, nombre_img, ruta, nombre_status, id_sitio, nombre_lresg, name_posicion
      from stockip as I
      left join marcas as M
      on I.id_marca3=M.id_marca
      left join modelo as O
      on I.id_modelo3=O.id_modelo 
      left join colores as C
      on O.id_color=C.id_color      
      left join tecnologias  as T
      on T.id_tec=O.id_tec2           
      left join fotos as F
      on O.id_img2=F.id_img
      left join status as S
      on I.id_status3=S.id_status
       left join lresguardo as L
      on I.id_lresg3=L.id_sitio
       left join p_estante as P
      on I.id_pstante3=P.id_pstante;") or die("Problemas en el select:".mysqli_error($maysqli));
  ?>

<?php include 'incluir/tabla_especifica_stocktelefonia.php'; ?>
  <?php include 'incluir/footer.php'; ?>
<script src="js/app.js"></script>
</body>
</html>