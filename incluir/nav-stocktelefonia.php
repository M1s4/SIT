    <?php  
include("funciones/conexion.php");   

$resultado = $maysqli->query("SELECT id_marca, nombre_marc FROM marcas ORDER BY id_marca ASC");
$resultado2 = $maysqli->query("SELECT id_status, nombre_status FROM status ORDER BY id_status ASC");
$resultado3 = $maysqli->query("SELECT id_tec, nombre_tec FROM tecnologias ORDER BY id_tec ASC");
$resultado4 = $maysqli->query("SELECT id_modelo, nombre_mod FROM modelo ORDER BY id_modelo;");
?>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SIT</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active">
                            <select id="marca_busquedas" name="marca_busquedas" class="menu_desplegable" >
                 <option disabled selected hidden class="fotecnologia" value="">Stock de Telefonia  </option>
         
             </select>
            </li>
            <li><a href="#">Inventario de bajas</a></li>
            <li><a href="#">Inventario de consumibles</a></li>
            <li><a href="#">Inventario de tarjetas Avaya</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fas fa-address-card"></i> Ingeniero Arroyo <i class="fas fa-caret-down"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
