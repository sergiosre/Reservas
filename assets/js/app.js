//Funcion Ajax para mostrar las horas libres
function mostrarHoras() {
	fecha = document.getElementById("datepicker").value;

	conexion = new XMLHttpRequest();
	conexion.open("POST", "http://192.168.3.201/ci/Usuario/horasAjax", true);
	conexion.setRequestHeader("X-Requested-With", "XMLHttpRequest");
	conexion.setRequestHeader(
		"Content-type",
		"application/x-www-form-urlencoded"
	);
	conexion.send(`fecha=${fecha}`);

	conexion.onreadystatechange = function () {
		if (conexion.readyState == 4 && conexion.status == 200) {
			mostrarHorasSelectAjax();
		}
	};
}

function mostrarHorasSelectAjax() {
	horas = JSON.parse(conexion.responseText);
	select = document.getElementById("hora");
	select.innerHTML = "";
	for (let i = 0; i < horas.length; i++) {
		select.innerHTML += `<option>${horas[i]}</option>`;
	}
}

//Funcion Ajax para realizar la reserva mostrando un mensaje de confirmacion
function reserva() {
	fecha = document.getElementById("datepicker").value;
	hora = document.getElementById("hora").value;

	conexion = new XMLHttpRequest();
	conexion.open("POST", "http://192.168.3.201/ci/Reserva/reservarAjax", true);
	conexion.setRequestHeader("X-Requested-With", "XMLHttpRequest");
	conexion.setRequestHeader(
		"Content-type",
		"application/x-www-form-urlencoded"
	);
	conexion.send(`fecha=${fecha}&hora=${hora}`);

	conexion.onreadystatechange = function () {
		if (conexion.readyState == 4 && conexion.status == 200) {
			reservarHoraAjax();
		}
	};
}

function reservarHoraAjax() {
	confirmacion = conexion.responseText;
	document.getElementById("confirmacion").innerHTML = confirmacion;
	setTimeout(function () {
		document.getElementById("confirmacion").innerHTML = "";
		window.location.href = "http://192.168.1.128/ci/";
	}, 3000);
}


//Validacion de formulario de registro
function validarRegistro() {
	var nombre = new RegExp("^[A-Za-zÁÉÍÓÚÜñáéíóú ü-]{2,40}$");
	var apellido = new RegExp("^[A-Za-zÁÉÍÓÚÜñáéíóú ü-]{2,40}$");
	// var email = new RegExp("^$");
	var usuario = new RegExp("[0-9]{0,1}[0-9A-Za-z-._]{5,40}$");
	var pw = new RegExp("^[A-Za-z-._][0-9]{8,40}$");
	
	if (!nombre.test(registro.nombre.value.trim())) {
		cambiaColorBorde('inputNombre', 'red')
	} else {
		document.getElementById('nombreError').innerHTML = ""
	}

	if (!apellido.test(registro.apellidos.value.trim())) {
		document.getElementById('apellidosError').innerHTML = "El campo no cumple los requisitos"
	} else {
		document.getElementById('apellidosError').innerHTML = ""
	}

	// if (!email.test(registro.email.value.trim())) {
	// 	document.getElementById('emailError').innerHTML = "El campo no cumple los requisitos"
	// } else {
	// 	document.getElementById('emailError').innerHTML = ""
	// }

	if (!usuario.test(registro.user.value.trim())) {
		document.getElementById('usuarioError').innerHTML = "El campo no cumple los requisitos"
	} else {
		document.getElementById('usuarioError').innerHTML = ""
	}

	if (!pw.test(registro.pwd.value.trim())) {
		document.getElementById('pwError').innerHTML = "El campo no cumple los requisitos"
	} else {
		document.getElementById('pwError').innerHTML = ""
	}

	function cambiaColorBorde(id, color){
		document.getElementById(id).style.borderColor = color
	}

}
