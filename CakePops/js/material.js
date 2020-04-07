'use strict'

window.addEventListener('load',()=>{
    M.AutoInit();
    var entre = document.getElementById("SeLogeo");
    
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems,{
            months: [
                'Enero',
                'Febrero',
                'Marzo',
                'Abril',
                'Mayo',
                'Junio',
                'Julio',
                'Agosto',
                'Septiembre',
                'Octubre',
                'Noviembre',
                'Diciembre']
        });
      });

    entre.addEventListener('click',()=>{
        console.log('me has clickeado');
        alert("Me has clickeado");
    });

    var instance = M.Carousel.getInstance(elem);

















});