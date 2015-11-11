<?php
	require("../class/clsRegistro.php");

	$objRegistro = new clsRegistro();

	$objRegistro->set_tipo("C");
	$objRegistro->set_titulo("Taller de macrame");
	$objRegistro->set_ponente("Macario Rosas yEspinas");
	$objRegistro->set_telPonente(7712223344);
	$objRegistro->set_emailPonente("mail@prueba.com");
	$objRegistro->set_fechaHora("2015-11-08 11:00:00");
	$objRegistro->set_lugar("Edificio B, Aula 4");

	$resultado = $objRegistro->ponenciaAgregarModificar();

	echo $resultado;
?>
