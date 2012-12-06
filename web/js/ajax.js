$(document).on('ready',iniciar)

function iniciar()
{
    $('#ContAjax').on('click','.ajax',doAjax)
    console.log('Soporte jQuery');
}

function doAjax(e)
{
	e.preventDefault();
    alert('Implementar Ajax')
}