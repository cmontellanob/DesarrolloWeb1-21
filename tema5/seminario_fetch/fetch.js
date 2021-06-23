function cargarContenido(abrir) {

	fetch(abrir, {
		method: 'get'
	}).then(function (response) {
		return response.text();
	}).then(function (text) {
		document.getElementById('contenido').innerHTML = text;
		console.log(text);
	}).catch(function (err) {
		alert('error');
	});
}

function preinscribir() {
	formData = new FormData();
	formData.append("tTitulo", document.getElementById("tTitulo").value);
	formData.append("tIdentidad", document.getElementById("tIdentidad").value);
	formData.append("tNombres", document.getElementById("tNombres").value);
	formData.append("tApellidos", document.getElementById("tApellidos").value);
	fetch('preinscribir.php', {
		method: 'post',
		body: formData
	}).then(function (response) {
		return response.text();
	}).then(function (text) {
		document.getElementById('contenido').innerHTML = text;
		console.log(text);
	}).catch(function (err) {
		alert('error');
	});


}

