function mostrarHoras() {

	fecha = document.getElementById('datepicker').value;

	conexion = new XMLHttpRequest();
	conexion.open("POST", "horasAjax", true);
	conexion.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
	conexion.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	conexion.send(`fecha=${fecha}`);

	conexion.onreadystatechange = function () {
		if (conexion.readyState == 4 && conexion.status == 200) {
			accionAJAX();
		}
	}
}

function accionAJAX() {
	horas = JSON.parse(conexion.responseText);
	select = document.getElementById("hora");
	select.innerHTML="";
	for (let i = 0; i < horas.length; i++) {
		select.innerHTML += `<option>${horas[i]}</option>`
	}
}
