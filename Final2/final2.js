function escribir(letra)
{
	document.getElementById('password').value+=letra;
}
function limpiar()
{
document.getElementById('password').value="";	
}

function enviar()
{
document.getElementById('formulario').submit();	
}