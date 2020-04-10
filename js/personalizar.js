var boton4 = document.getElementById('b4'),
    boton6 = document.getElementById('b6'),
    boton10 = document.getElementById('b10'),
    boton12 = document.getElementById('b12'),
    foto4 = document.getElementById('p4'),
    foto6 = document.getElementById('p6'),
    foto10 = document.getElementById('p10'),
    foto12 = document.getElementById('p12'),
    cont = document.getElementById('cont'),
    precio = document.getElementById('precio'),
    ctrls = 'offset-l2',
    ctrlp = 'offset-l1';

boton4.addEventListener('click', function(e){
    foto4.classList.remove('hide');
    foto6.classList.add('hide');
    foto10.classList.add('hide');
    foto12.classList.add('hide');
    cont.classList.replace(ctrls,'offset-l2');
    precio.classList.replace(ctrlp,'offset-l1');
    ctrls = 'offset-l2';
    ctrlp = 'offset-l1';
});

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