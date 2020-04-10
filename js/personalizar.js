    //Se llama a los botones y se almacenan
var boton4 = document.getElementById('b4'),
    boton6 = document.getElementById('b6'),
    boton10 = document.getElementById('b10'),
    boton12 = document.getElementById('b12'),
    //Se llama a las imagenes-diagrama
    foto4 = document.getElementById('p4'),
    foto6 = document.getElementById('p6'),
    foto10 = document.getElementById('p10'),
    foto12 = document.getElementById('p12'),
    //Se llama a los contenedores de las i-d y el precio
    cont = document.getElementById('cont'),
    precio = document.getElementById('precio'),
    //variable de control del tamaño de la separación 
    ctrls = 'offset-l2',
    ctrlp = 'offset-l1';

    //Método que al escuchar el clic del boton de 4 piezas,
    //aparece la i-d de 4 piezas y se separa 
    //de la tarjeta con los botones para centrarla
boton4.addEventListener('click', function(e){
    foto4.classList.remove('hide'); //quita la clase 'hide' de la imagen para aparecerce
    foto6.classList.add('hide');    //Agrega 'hide' para ocultar las demás
    foto10.classList.add('hide');
    foto12.classList.add('hide');
    cont.classList.replace(ctrls,'offset-l2'); //reemplaza el tamaño de la separación de la i-d de los botones
    precio.classList.replace(ctrlp,'offset-l1'); //lo mismo pero para la tarjeta del costo de la i-d
    ctrls = 'offset-l2';    //Se guarda el tamaño de las separaciones
    ctrlp = 'offset-l1';
});

    //Método que al escuchar el clic del boton de 6 piezas,
    //aparece la i-d de 6 piezas y se separa 
    //de la tarjeta con los botones para centrarla
boton6.addEventListener('click', function(e){
    foto6.classList.remove('hide');
    foto4.classList.add('hide');
    foto10.classList.add('hide');
    foto12.classList.add('hide');
    cont.classList.replace(ctrls,'offset-l2');
    precio.classList.replace(ctrlp,'offset-l8');
    ctrls = 'offset-l2';
    ctrlp = 'offset-l8';
});

    //Método que al escuchar el clic del boton de 10 piezas,
    //aparece la i-d de 10 piezas y se separa 
    //de la tarjeta con los botones para centrarla
boton10.addEventListener('click', function(e){
    foto10.classList.remove('hide');
    foto6.classList.add('hide');
    foto4.classList.add('hide');
    foto12.classList.add('hide');
    cont.classList.replace(ctrls,'offset-l1');
    precio.classList.replace(ctrlp,'offset-l8');
    ctrls = 'offset-l1';
    ctrlp = 'offset-l8';
});

    //Método que al escuchar el clic del boton de 12 piezas,
    //aparece la i-d de 12 piezas y se separa 
    //de la tarjeta con los botones para centrarla
boton12.addEventListener('click', function(e){
    foto12.classList.remove('hide');
    foto6.classList.add('hide');
    foto10.classList.add('hide');
    foto4.classList.add('hide');
    cont.classList.replace(ctrls,'l8');
    precio.classList.replace(ctrlp,'offset-l8');
    ctrls = 'l8';
    ctrlp = 'offset-l8';
});