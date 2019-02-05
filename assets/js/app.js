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
	var nombre = new RegExp("^[a-zñáéíóú ü-]{2,20}$");
	var apellido = new RegExp("^[a-zñáéíóú ü-]{2,20}$");
	var email = new RegExp("^[a-zñáéíóú ü-._]{2,50}[@]{1}[.]{1}");


}
