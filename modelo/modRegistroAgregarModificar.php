<?php
	require("../class/clsRegistro.php");

	$objRegistro = new clsRegistro();

	$iTelefono = $_POST['jqxMaskedInput_TelefonoPonente'];
	$iTelefono = str_replace("(", "", $iTelefono);
	$iTelefono = str_replace(")", "", $iTelefono);
	$iTelefono = str_replace("-", "", $iTelefono);
	$iTelefono = str_replace("_", "", $iTelefono);

	$objRegistro->set_idPonencia($_POST['hdnPonenciaID']);
	$objRegistro->set_tipo($_POST['rdnTipo']);
	$objRegistro->set_titulo(utf8_decode($_POST['jqxInput_Titulo']));
	$objRegistro->set_ponente(utf8_decode($_POST['jqxInput_Ponente']));
	$objRegistro->set_telPonente($iTelefono);
	$objRegistro->set_emailPonente(utf8_decode($_POST['jqxInput_CorreoPonente']));
	$objRegistro->set_fechaHora(utf8_decode($_POST['jqxDateTimeInput_FechaHora'])); //"AAAA-MM-DD HR:MI:SE"
	$objRegistro->set_lugar(utf8_decode($_POST['jqxInput_Lugar']));

	$resultado = $objRegistro->ponenciaAgregarModificar();

	echo "json=".$resultado;
?>
