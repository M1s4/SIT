

<!DOCTYPE html>
<html>
  <head>

       
    <meta charset="utf-8">
    <title>Patrones Responsive Web Design</title>
     <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css"> 
    <script type="text/javascript" src="js/funcion.js"></script>
     <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>




  </head>
  <body>


     <?php

         

$maysqli = new mysqli("localhost","root","","adan");
    if(mysqli_connect_error()){
     echo 'Conexion fallida : ', mysqli_connect_error();
    exit();
     }   
  


          $registros=mysqli_query($maysqli,"SELECT id_stockip, numserie, mac, nombre_marc, nombre_mod, nombre_lresg, nombre_status
from stockip as I
left join marcas as M
on I.id_marca3=M.id_marca
left join modelo as O
on I.id_modelo3=O.id_modelo 
left join lresguardo  as L
on I.id_lresg3=L.id_sitio
left join status as S
on I.id_status3=S.id_status
where numserie='PUC181903L2'") or
                die("Problemas en el select:".mysqli_error($conexion));
          
     ?>



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
                          <th>Lugar resguardo</th>
                          <th>Status</th>
                          <th>Ver</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php //fetch_assoc, fetch_row, fetch_array, fetch_all, fetch_objects  ?>
    <?php while($reg = mysqli_fetch_array($registros) ) { ?>
                        <?php //dentro parentesis (MYSQLI_ASSOC, MYSQLI_NUM) ?>
                            <tr>
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
                            <?php echo $reg['nombre_lresg']; ?>
                                  </td>
                                  <td>
                            <?php echo $reg['nombre_status']; ?>
                                  </td>
                                                                    <td>
                                    <a href="#"onclick="document.getElementById('id-modal-login').style.display='block'" style="width:auto;"><i class="far fa-edit"></i>

</a>
                                  </td>
                            </tr>
                        <?php } ?>
                    </tbody>
              </table>
              <div class="contenedor clearfix">
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
 
</body>
</html>