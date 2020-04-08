	//Botones del perfil
	var btnModif = document.getElementById('btnModif'),
		btnCanc = document.getElementById('btnCanc'),
		btnSave = document.getElementById('btnSave'),
		//Campo del nombre
		fname = document.getElementById('first_name'),
		//campo de los apellidos
		lname = document.getElementById('last_name'),
		//campo del email
		email = document.getElementById('email'),
		//campo de la contraseña
		passw = document.getElementById('password'),
		//campo del telefono
		phone = document.getElementById('icon_telephone'),
		//campo de la calle
		calle = document.getElementById('icon_prefix'),
		//campo del numero de la casa
		numbr = document.getElementById('address-number'),
		//campo de la colonia
		colon = document.getElementById('suburb'),
		//campo del codigo postal
		zipcd = document.getElementById('zipcode'),
		//enlace de la información
		info = document.getElementById('info'),
		//enlace de la lista de deseos
		ld = document.getElementById('ld');

	//valor anterior del nombre
	var nom = fname.value,
		//valor anterior del apellido
		apd = lname.value,
		//valor anterior del email
		eml = email.value,
		//valor anterior de la contraseña
		pwd = passw.value,
		//valor anterior del telefono
		phn = phone.value,
		//valor anterior de la calle
		cle = calle.value,
		//valor anterior del numero de casa
		num = numbr.value,
		//valor anterior de la colonia
		col = colon.value,
		//valor anterior del codigo postal
		zip = zipcd.value;

	//label del nombre
	var nomb = document.getElementById('nomb'),
		//label del apellido
		ape = document.getElementById('ape'),
		//label del email
		ema = document.getElementById('ema'),
		//label del telefono
		tel = document.getElementById('tel'),
		//label de la calle
		cal = document.getElementById('cal'),
		//label del numero
		n = document.getElementById('num'),
		remove//label de la colonia
		co = document.getElementById('col'),
		//label del codigo postal
		cp = document.getElementById('zip'),
		//label de la contraseña
		pass = document.getElementById('pass'),
		//contenedor de los datos
		data = document.getElementById('data'),
		//contenedor de la lista de deseos
		wl = document.getElementById('wl');

	//Método para regresar todo a su estado anterior
	btnCanc.addEventListener('click', function (e) {
		fname.value = nom;
		fname.setAttribute('disabled', '');
		nomb.classList.add('active');
		lname.value = apd;
		lname.setAttribute('disabled', '');
		ape.classList.add('active');
		email.value = eml;
		email.setAttribute('disabled', '');
		ema.classList.add('active');
		passw.value = pwd;
		passw.setAttribute('disabled', '');
		pass.classList.add('active');
		phone.value = phn;
		phone.setAttribute('disabled', '');
		tel.classList.add('active');
		calle.value = cle;
		calle.setAttribute('disabled', '');
		cal.classList.add('active');
		numbr.value = num;
		numbr.setAttribute('disabled', '');
		n.classList.add('active');
		colon.value = col;
		colon.setAttribute('disabled', '');
		co.classList.add('active');
		zipcd.value = zip;
		zipcd.setAttribute('disabled', '');
		cp.classList.add('active');
		btnCanc.classList.add('hide');
		btnSave.classList.add('hide');
		data.classList.add('hide');
		wl.classList.remove('hide');
		btnModif.classList.remove('hide');
	});

	//Métodos para borrar los campos al presionar en ellos
	fname.addEventListener('focusin', function (e) {
		fname.value = '';
	});

	lname.addEventListener('focusin', function (e) {
		lname.value = '';
	});

	email.addEventListener('focusin', function (e) {
		email.value = '';
	});

	passw.addEventListener('focusin', function (e) {
		passw.value = '';
	});

	phone.addEventListener('focusin', function (e) {
		phone.value = '';
	});

	calle.addEventListener('focusin', function (e) {
		calle.value = '';
	});

	numbr.addEventListener('focusin', function (e) {
		numbr.value = '';
	});

	colon.addEventListener('focusin', function (e) {
		colon.value = '';
	});

	zipcd.addEventListener('focusin', function (e) {
		zipcd.value = '';
	});

	//Métodos para guardar la informacion de los campos
	fname.addEventListener('focusout', function (e) {
		fname.setAttribute('value', fname.value);
	});

	lname.addEventListener('focusout', function (e) {
		lname.setAttribute('value', lname.value);
	});

	email.addEventListener('focusout', function (e) {
		email.setAttribute('value', email.value);
	});

	passw.addEventListener('focusout', function (e) {
		passw.setAttribute('value', passw.value);
	});

	phone.addEventListener('focusout', function (e) {
		phone.setAttribute('value', phone.value);
	});

	calle.addEventListener('focusout', function (e) {
		calle.setAttribute('value', calle.value);
	});

	numbr.addEventListener('focusout', function (e) {
		numbr.setAttribute('value', numbr.value);
	});

	colon.addEventListener('focusout', function (e) {
		colon.setAttribute('value', colon.value);
	});

	zipcd.addEventListener('focusout', function (e) {
		zipcd.setAttribute('value', zipcd.value);
	});

	//Método que abre las opciones de modificación
	btnModif.addEventListener('click', function () {
		fname.removeAttribute('disabled');
		lname.removeAttribute('disabled');
		email.removeAttribute('disabled');
		passw.removeAttribute('disabled');
		phone.removeAttribute('disabled');
		calle.removeAttribute('disabled');
		numbr.removeAttribute('disabled');
		colon.removeAttribute('disabled');
		zipcd.removeAttribute('disabled');
		btnCanc.classList.remove('hide');
		btnModif.classList.add('hide');
		btnSave.classList.remove('hide');
		data.classList.remove('hide');
		wl.classList.add('hide');
	});


	//Método que guarda las modificaciones
	btnSave.addEventListener('click', function (e) {
		fname.setAttribute('disabled', '');
		lname.setAttribute('disabled', '');
		email.setAttribute('disabled', '');
		passw.setAttribute('disabled', '');
		phone.setAttribute('disabled', '');
		calle.setAttribute('disabled', '');
		numbr.setAttribute('disabled', '');
		colon.setAttribute('disabled', '');
		zipcd.setAttribute('disabled', '');
		btnCanc.classList.add('hide');
		btnSave.classList.add('hide');
		data.classList.add('hide');
		wl.classList.remove('hide');
		btnModif.classList.remove('hide');
	});

	//Método para abrir la información del usuario
	info.addEventListener('click', function (e) {
		wl.classList.add('hide');
		data.classList.remove('hide');
		ld.classList.remove('hide');
	});

	//Método para abrir la información del usuario
	ld.addEventListener('click', function (e) {
		wl.classList.remove('hide');
		data.classList.add('hide');
		ld.classList.add('hide');
	});