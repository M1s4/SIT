


(function() {
    "use strict";
document.addEventListener('DOMContentLoaded', function(){

//aqui empieza el menu de hamburguesa//
    $('.menu-movil').on('click', function() {
    $('.navegacion-principal').slideToggle();
});//aqui termina el menu de hamburguesa//

//aqui empieza la funcion de ubicacion//
    $('.ubicacion').on('click', function() {
    if($('.ubicacion i:last-child').hasClass("fas fa-caret-down")){
        $('.navegacion-alta').slideDown(400);
        $('.navegacion-alta2').slideUp(0);
        $('.ubicacion i:last-child').attr('class', 'fas fa-caret-up');
        $('.ciudad i:last-child').attr('class', 'fas fa-caret-down');
        }
        else{
        $('.ubicacion i:last-child').attr('class', 'fas fa-caret-down');
        $('.navegacion-alta').slideUp(400);
        $('.navegacion-alta2').slideUp(400);
    }});//aqui termina la funcion de ubicacion//

//aqui empieza la funcion de ciudad//
    $('.ciudad').on('click', function() {
    if($('.ciudad i:last-child').hasClass("fas fa-caret-down")){
        $('.navegacion-alta').slideUp(0);
        $('.navegacion-alta2').slideDown(400);
        $('.ciudad i:last-child').attr('class', 'fas fa-caret-up');
        $('.ubicacion i:last-child').attr('class', 'fas fa-caret-down');

        }
        else{
        $('.ciudad i:last-child').attr('class', 'fas fa-caret-down');
        $('.navegacion-alta2').slideUp(400);
        $('.navegacion-alta').slideUp(400);


}});//aqui termina la funcion de ciudad//




// Get the modal
var modal = document.getElementById('id-modal-login');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}





$("#choice").change(function () {
    if($(this).val() == "0") $(this).addClass("empty");
    else $(this).removeClass("empty")
});
$("#choice").change();








}); //en esta madre termina lo del DOMCONTENTLOADED//
    })();//en esta madre termina lo de la linea 1 de la funcion//







