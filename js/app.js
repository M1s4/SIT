var tablaRegistrados = document.getElementById('tblDatos');
var checkboxes = document.getElementsByClassName('borrar_contacto');
var btn_borrar = document.getElementById('btn_borrar');
var tableBody = document.getElementsByTagName('tbody');
var divExistentes = document.getElementsByClassName('existentes');
var inputBuscador = document.getElementById('mac_busqueda');
var inputBuscador2 = document.getElementById('numserie_busqueda');
var inputBuscador3 = document.getElementById('marca_busqueda');
var inputBuscador4 = document.getElementById('modelo_busqueda');
var inputBuscador5 = document.getElementById('tecnologia_busqueda');
var inputBuscador6 = document.getElementById('status_busqueda');
var totalRegistros = document.getElementById('total');
//var mostrarDatos = document.getElementsByClassName('far fa-edit');



// construir template para insertar datos dinamicamente
function construirTemplate(mac, num_serie, marca, modelo, tecnologia, status, color) {
    //crear  nombre de contacto
    var tdMac = document.createElement('TD');
    var textoMac = document.createTextNode(mac);
    tdMac.appendChild(textoMac);
    
    // crear telefono de contacto
    var tdNum_serie = document.createElement('TD');
    var textoNum_serie = document.createTextNode(num_serie);
    tdNum_serie.appendChild(textoNum_serie);

      var tdMarca = document.createElement('TD');
    var textoMarca = document.createTextNode(marca);  
    tdMarca.appendChild(textoMarca);
    
    // crear telefono de contacto
    var tdModelo = document.createElement('TD');
    var textoModelo = document.createTextNode(modelo);
    tdModelo.appendChild(textoModelo);

      var tdTecnologia = document.createElement('TD');
    var textoTecnologia = document.createTextNode(tecnologia);
    tdTecnologia.appendChild(textoTecnologia);
    
    // crear telefono de contacto
    var tdStatus = document.createElement('TD');
    var textoStatus = document.createTextNode(status);
    tdStatus.appendChild(textoStatus);



    //crear enlace para editar
    var nodoBtn = document.createElement('A');
    var textoEnlace = document.createTextNode('Editar');
    nodoBtn.appendChild(textoEnlace);
    nodoBtn.href = 'editar.php?id=' + registro_id;
    
    // agregar el boton al td
    var notoTdEditar = document.createElement('TD');
    notoTdEditar.appendChild(nodoBtn);
    
    //crear checkbox para borrar
    var checkBorrar = document.createElement('INPUT');
    checkBorrar.type = 'checkbox';
    checkBorrar.name = registro_id;
    checkBorrar.classList.add('borrar_contacto');
    
    //agregar td a checkbox
    var tdCheckbox = document.createElement('TD');
    tdCheckbox.classList.add('borrar');
    tdCheckbox.appendChild(checkBorrar);
    
    //Agregar al TR
    var trContacto = document.createElement('TR');
         
    trContacto.appendChild(tdMac);
    trContacto.appendChild(tdNum_serie);
    trContacto.appendChild(tdMarca);
    trContacto.appendChild(tdModelo);
    trContacto.appendChild(tdTecnologia);
    trContacto.appendChild(tdStatus);

    
    tablaRegistrados.childNodes[5].append(trContacto);
    
    actualizarNumero();
}


function mostrarEliminado() {
  // crear div y agregar id
  var divEliminado = document.createElement('DIV');
  divEliminado.setAttribute('id', 'borrado');
  
  // agregar texto      
  var texto = document.createTextNode('Eliminado de lista de contactos');
  divEliminado.appendChild(texto);
  
  divExistentes[0].insertBefore(divEliminado, divExistentes[0].childNodes[0]);
  
  //agregar clase de CSS
  divEliminado.classList.add('mostrar');
  
  //ocultar el mensaje de creación
  setTimeout(function() {
      divEliminado.classList.add('ocultar');
      setTimeout(function() {
          var divPadreMensaje = divEliminado.parentNode;
          divPadreMensaje.removeChild(divEliminado);
      }, 500 );
  }, 3000);
}






function ocultarRegistros(mac_buscar){
    // variable para todos los registros
    var registros = tableBody[0].getElementsByTagName('tr');

    
    // expresion regular que busca el nombre con case insensitive
    var expression = new RegExp(mac_buscar, "i");


    for(var i = 0; i < registros.length;i++) {
        registros[i].classList.add('ocultar');
        registros[i].classList.remove('mostrar');
        registros[i].style.display = 'none';

         var ns = $('#numserie_busqueda')[0].value;
         var marca = $('#marca_busqueda')[0].value;
         var modelo = $('#modelo_busqueda')[0].value;
         var tecnologia = $('#tecnologia_busqueda')[0].value;
         var status = $('#status_busqueda')[0].value;


        if(registros[i].childNodes[5].textContent.replace(/\s/g, "").search(expression) != -1 && registros[i].childNodes[7].textContent.replace(/\s/g, "").search(ns) != -1 && registros[i].childNodes[9].textContent.replace(/\s/g, "").search(marca) != -1 && registros[i].childNodes[11].textContent.replace(/\s/g, "").search(modelo) != -1 && registros[i].childNodes[13].textContent.replace(/\s/g, "").search(tecnologia) != -1 && registros[i].childNodes[15].textContent.replace(/\s/g, "").search(status) != -1  ) {
        registros[i].classList.remove('ocultar');
          registros[i].classList.add('mostrar');
 
          registros[i].style.display = 'table-row';
        } 
    }
   // actualizarNumero();
 }

  inputBuscador.addEventListener('input', function() {
  ocultarRegistros(this.value);
});

  function ocultarRegistros2(nserie_buscar){
// variable para todos los registros
var registros2 = tableBody[0].getElementsByTagName('tr');

// expresion regular que busca el nombre con case insensitive
var expression2 = new RegExp(nserie_buscar, "i");

for(var i = 0; i < registros2.length;i++) {
  registros2[i].classList.add('ocultar');
  registros2[i].classList.remove('mostrar');
  registros2[i].style.display = 'none';
  var mac = $('#mac_busqueda')[0].value; 
  var marca = $('#marca_busqueda')[0].value;
  var modelo = $('#modelo_busqueda')[0].value;
  var tecnologia = $('#tecnologia_busqueda')[0].value;
  var status = $('#status_busqueda')[0].value;
  if(registros2[i].childNodes[5].textContent.replace(/\s/g, "").search(mac) != -1 && registros2[i].childNodes[7].textContent.replace(/\s/g, "").search(expression2) != -1 && registros2[i].childNodes[9].textContent.replace(/\s/g, "").search(marca) != -1 && registros2[i].childNodes[11].textContent.replace(/\s/g, "").search(modelo) != -1 && registros2[i].childNodes[13].textContent.replace(/\s/g, "").search(tecnologia) != -1 && registros2[i].childNodes[15].textContent.replace(/\s/g, "").search(status) != -1 ) {
    registros2[i].classList.remove('ocultar');
    registros2[i].classList.add('mostrar');
    registros2[i].style.display = 'table-row';
  } 
}
// actualizarNumero();
}
inputBuscador2.addEventListener('input', function() {
  ocultarRegistros2(this.value);
});







  function ocultarRegistros3(marca_buscar){
// variable para todos los registros
var registros3 = tableBody[0].getElementsByTagName('tr');

// expresion regular que busca el nombre con case insensitive
var expression3 = new RegExp(marca_buscar, "i");

for(var i = 0; i < registros3.length;i++) {
  registros3[i].classList.add('ocultar');
  registros3[i].classList.remove('mostrar');
  registros3[i].style.display = 'none';
        var mac = $('#mac_busqueda')[0].value; 
         var ns = $('#numserie_busqueda')[0].value;
         var modelo = $('#modelo_busqueda')[0].value;
         var tecnologia = $('#tecnologia_busqueda')[0].value;
         var status = $('#status_busqueda')[0].value;

  if(registros3[i].childNodes[5].textContent.replace(/\s/g, "").search(mac) != -1 && registros3[i].childNodes[7].textContent.replace(/\s/g, "").search(ns) != -1 && registros3[i].childNodes[9].textContent.replace(/\s/g, "").search(expression3) != -1 && registros3[i].childNodes[11].textContent.replace(/\s/g, "").search(modelo) != -1 && registros3[i].childNodes[13].textContent.replace(/\s/g, "").search(tecnologia) != -1 && registros3[i].childNodes[15].textContent.replace(/\s/g, "").search(status) != -1 ) {
    registros3[i].classList.remove('ocultar');
    registros3[i].classList.add('mostrar');
    registros3[i].style.display = 'table-row';
  } 
}
// actualizarNumero();
}
inputBuscador3.addEventListener('input', function() {
  ocultarRegistros3(this.value);
});



  function ocultarRegistros4(modelo_buscar){
// variable para todos los registros
var registros4 = tableBody[0].getElementsByTagName('tr');

// expresion regular que busca el nombre con case insensitive
var expression4 = new RegExp(modelo_buscar, "i");

for(var i = 0; i < registros4.length;i++) {
  registros4[i].classList.add('ocultar');
  registros4[i].classList.remove('mostrar');
  registros4[i].style.display = 'none';
        var mac = $('#mac_busqueda')[0].value; 
         var ns = $('#numserie_busqueda')[0].value;
         var marca = $('#marca_busqueda')[0].value;
         var tecnologia = $('#tecnologia_busqueda')[0].value;
         var status = $('#status_busqueda')[0].value;

  if(registros4[i].childNodes[5].textContent.replace(/\s/g, "").search(mac) != -1 && registros4[i].childNodes[7].textContent.replace(/\s/g, "").search(ns) != -1 && registros4[i].childNodes[9].textContent.replace(/\s/g, "").search(marca) != -1 && registros4[i].childNodes[11].textContent.replace(/\s/g, "").search(expression4) != -1 && registros4[i].childNodes[13].textContent.replace(/\s/g, "").search(tecnologia) != -1 && registros4[i].childNodes[15].textContent.replace(/\s/g, "").search(status) != -1 ) {
    registros4[i].classList.remove('ocultar');
    registros4[i].classList.add('mostrar');
    registros4[i].style.display = 'table-row';
  } 
}
// actualizarNumero();                           
}
inputBuscador4.addEventListener('input', function() {
  ocultarRegistros4(this.value);
});


  function ocultarRegistros5(tecnologia_buscar){
// variable para todos los registros
var registros5 = tableBody[0].getElementsByTagName('tr');

// expresion regular que busca el nombre con case insensitive
var expression5 = new RegExp(tecnologia_buscar, "i");

for(var i = 0; i < registros5.length;i++) {
  registros5[i].classList.add('ocultar');
  registros5[i].classList.remove('mostrar');
  registros5[i].style.display = 'none';
        var mac = $('#mac_busqueda')[0].value; 
         var ns = $('#numserie_busqueda')[0].value;
         var marca = $('#marca_busqueda')[0].value;
         var modelo = $('#modelo_busqueda')[0].value;
         var status = $('#status_busqueda')[0].value;

  if(registros5[i].childNodes[5].textContent.replace(/\s/g, "").search(mac) != -1 && registros5[i].childNodes[7].textContent.replace(/\s/g, "").search(ns) != -1 && registros5[i].childNodes[9].textContent.replace(/\s/g, "").search(marca) != -1 && registros5[i].childNodes[11].textContent.replace(/\s/g, "").search(modelo) != -1 && registros5[i].childNodes[13].textContent.replace(/\s/g, "").search(expression5) != -1 && registros5[i].childNodes[15].textContent.replace(/\s/g, "").search(status) != -1 ) {
    registros5[i].classList.remove('ocultar');
    registros5[i].classList.add('mostrar');
    registros5[i].style.display = 'table-row';
  } 
}
// actualizarNumero();
}
inputBuscador5.addEventListener('input', function() {
  ocultarRegistros5(this.value);
});

  function ocultarRegistros6(status_buscar){
// variable para todos los registros
var registros6 = tableBody[0].getElementsByTagName('tr');

// expresion regular que busca el nombre con case insensitive
var expression6 = new RegExp(status_buscar, "i");

for(var i = 0; i < registros6.length;i++) {
  registros6[i].classList.add('ocultar');
  registros6[i].classList.remove('mostrar');
  registros6[i].style.display = 'none';
        var mac = $('#mac_busqueda')[0].value; 
         var ns = $('#numserie_busqueda')[0].value;
         var marca = $('#marca_busqueda')[0].value;
         var modelo = $('#modelo_busqueda')[0].value;
         var tecnologia = $('#tecnologia_busqueda')[0].value;

  if(registros6[i].childNodes[5].textContent.replace(/\s/g, "").search(mac) != -1 && registros6[i].childNodes[7].textContent.replace(/\s/g, "").search(ns) != -1 && registros6[i].childNodes[9].textContent.replace(/\s/g, "").search(marca) != -1 && registros6[i].childNodes[11].textContent.replace(/\s/g, "").search(modelo) != -1 && registros6[i].childNodes[13].textContent.replace(/\s/g, "").search(tecnologia) != -1 && registros6[i].childNodes[15].textContent.replace(/\s/g, "").search(expression6) != -1 ) {
    registros6[i].classList.remove('ocultar');
    registros6[i].classList.add('mostrar');
    registros6[i].style.display = 'table-row';
  } 
}
// actualizarNumero();
}
inputBuscador6.addEventListener('input', function() {
  ocultarRegistros6(this.value);
  
});

function IconosEditar(){
  //Seleccionamos toda la columna con el "class="far1"
  var icon_editar = tableBody[0].querySelectorAll('.far1');
  //Recorremos todo el tablebody
  for(var i = 0 ; i < icon_editar.length; i++){
    //Se crea un eevento al darle click sobre un icono
    icon_editar[i].addEventListener('click', function(event){
    //Previene el comportamiento normal de un elemento en html como puede ser "<a>" que redireccione a 
        //otra pagina, o evitar que un submit envie los datos a un formulario.
      event.preventDefault();
      
      
      
        document.getElementById('id-modal-login').style.display='block';             


              
         
        
        //se obtiene el valor de la posicion donde esta la MAC y lo coloca en una variable.   
         var CambiaMac = this.parentNode.parentNode.childNodes[3].textContent.replace(/\s/g, "");  
         var pruebaMC = CambiaMac;
        document.getElementById("cambia_mac").innerHTML=pruebaMC;

        //se obtiene el valor de la posicion donde esta la Marca y lo coloca en una variable.   
         var CambiaMarc = this.parentNode.parentNode.childNodes[7].textContent.replace(/\s/g, "");  
         var pruebaMR = CambiaMarc;
        document.getElementById("cambia_marca").innerHTML=pruebaMR;      

        //se obtiene el valor de la posicion donde esta el numero de serie
         var CambiaCol = this.parentNode.parentNode.childNodes[15].textContent.replace(/\s/g, "");  
         var pruebaCL = CambiaCol;         
        document.getElementById("color_tel").value=pruebaCL;


                  //se obtiene el valor de los comentarios
         var CambiaIMG = this.parentNode.parentNode.childNodes[27].textContent.replace(/\s/g, "");  
         var pruebaIMG = CambiaIMG;
        document.getElementById("img_tel").src=pruebaIMG;


          //se obtiene el valor de la posicion donde esta el numero de serie
         var CambiaNumSe = this.parentNode.parentNode.childNodes[5].textContent.replace(/\s/g, "");  
         var pruebaNumSe = CambiaNumSe;
        document.getElementById("num_serie").value=pruebaNumSe;

           //se obtiene el valor de la fecha
         var Cambiafecha = this.parentNode.parentNode.childNodes[17].textContent.replace(/\s/g, "");  
         var pruebaFecha = Cambiafecha;
        document.getElementById("fecha").innerHTML=pruebaFecha;      
        
         //se obtiene el valor del Item
         var CambiaItem = this.parentNode.parentNode.childNodes[19].textContent.replace(/\s/g, "");  
         var pruebaItem = CambiaItem;
        document.getElementById("item_tel").value=pruebaItem;


         //se obtiene el valor de los comentarios
         var CambiaItem = this.parentNode.parentNode.childNodes[21].textContent.replace(/\s/g, "");  
         var pruebaItem = CambiaItem;
        document.getElementById("lugar_resguardo").value=pruebaItem;
        

           //se obtiene el valor de la posicion donde esta estatus y lo coloca en una variable.   
         var estatus = this.parentNode.parentNode.childNodes[13].textContent.replace(/\s/g, "");  
         var pruebaST = estatus;
        document.getElementById("estatus").innerHTML=pruebaST;
        

        //se obtiene el valor de los comentarios
         var CambiaItem = this.parentNode.parentNode.childNodes[23].textContent.replace(/\s/g, "");  
         var pruebaItem = CambiaItem;
        document.getElementById("lugar_estante").value=pruebaItem;

          
        //se obtiene el valor de los comentarios
         var CambiaMod = this.parentNode.parentNode.childNodes[9].textContent.replace(/\s/g, "");  
         var pruebaMod = CambiaMod;
        document.getElementById("modelo_tel").value=pruebaMod;

        //se obtiene el valor de los comentarios
         var CambiaTec = this.parentNode.parentNode.childNodes[11].textContent.replace(/\s/g, "");  
         var pruebaTec = CambiaTec;
        document.getElementById("tecnologia_tel").value=pruebaTec;

        //se obtiene el valor de los comentarios
         var CambiaST = this.parentNode.parentNode.childNodes[13].textContent.replace(/\s/g, "");  
         var pruebaST = CambiaST;
        document.getElementById("estatus_tel").value=pruebaST;

         //se obtiene el valor de los comentarios
         var CambiaCOM = this.parentNode.parentNode.childNodes[25].textContent.replace(/\s/g, "");  
         var pruebaCOM = CambiaCOM;
        document.getElementById("comentarios").value=pruebaCOM;



      

    }); 
  
  }
}
//Inicializamos la funcion al cargar la pagina con el DOMContentLoaded
document.addEventListener('DOMContentLoaded', function(event){
  IconosEditar();
});

function BtnAgregarTelefono(){
  //Seleccionamos toda la columna con el "class="far1"
  var btn_agregar_telefono = document.querySelector('#Btn-agregar-telefono');
  //Recorremos todo el tablebody
    btn_agregar_telefono.addEventListener('click', function(event){
        document.getElementById('id-modal-agregar-telefono').style.display='block';   
    }); 
  }
//Inicializamos la funcion al cargar la pagina con el DOMContentLoaded
document.addEventListener('DOMContentLoaded', function(event){
  BtnAgregarTelefono();
});

function BtnAgregarUbicacionTelefono(){
  //Seleccionamos toda la columna con el "class="far1"
  var btn_agregar_ubicacion = document.querySelector('#Btn-agregar-ubicacion');
  //Recorremos todo el tablebody
    btn_agregar_ubicacion.addEventListener('click', function(event){
        document.getElementById('id-modal-busqueda-telefono').style.display='block';   
    }); 
  }
//Inicializamos la funcion al cargar la pagina con el DOMContentLoaded
document.addEventListener('DOMContentLoaded', function(event){
  BtnAgregarUbicacionTelefono();
});