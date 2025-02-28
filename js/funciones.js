

function agregardatos(datos){

	d=datos.split('||');

	$('#id').val(d[0]);
	$('#Nombreu').val(d[1]);
	$('#Emailu').val(d[2]);
	$('#Ciudadu').val(d[3]);
	$('#Telefonou').val(d[4]);
}

