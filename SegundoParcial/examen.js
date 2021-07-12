function pregunta1()
{
    var enlaces=document.getElementsByTagName('a');
    var num_enlaces=enlaces.length;
    var parrafos=document.getElementsByTagName('p');
    var num_parrafos=parrafos.length;
    
    var datos=document.getElementById('datos').innerHTML;
    var edad= document.getElementsByName('edad');
    var valor_seleccionado;
    for (var i = 0; i < edad.length; i++) {
        if (edad[i].checked)
        {
            valor_seleccionado=edad[i].value;
        }
    }
    

    var cadena=`<table class="table border">
    <tr>
        <td>Número de enlaces de la página</td>
        <td>${num_enlaces}</td>
    </tr>
    <tr>
        <td>valor del contenido id=datos</td>
        <td>${datos}</td>
    </tr>
    <tr>
        <td>Valor seleccionado en el radio button con
            name=”edad”</td>
        <td>${valor_seleccionado}</td>
    </tr>
    <tr>
        <td>Numero de párrafos de la pagina
        </td>
        <td>${num_parrafos}</td>
    </tr>
</table>`;
    

    document.getElementById('contenido').innerHTML=cadena;
  
}


function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send(null);
}
function autenticar()
{
    var contenedor = document.getElementById('contenido');
	var cadena = "correoelectronico=" + document.getElementById('correoelectronico').value+"&password="+document.getElementById('password').value;
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("POST", "autenticar.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
	ajax.send(cadena);
}
function cargarelementos()
{
   var num_elementos=parseInt(document.getElementById('numero').value);
var numeros="";
    for (i=0;i<num_elementos;i++)
        {
        elemento='<input type="number" id="elem'+i+'"> <br>';   
           numeros+=elemento;
        }
     document.getElementById('elementos').innerHTML=numeros;   

}
function sumar ()
{
    var num_elementos=parseInt(document.getElementById('numero').value);
    var suma=0;    
    for (i=0;i<num_elementos;i++)
            {
            suma+=parseInt(document.getElementById('elem'+i).value) ; 
            }
    document.getElementById('sumatoria').innerHTML=suma;   
    
    
}
