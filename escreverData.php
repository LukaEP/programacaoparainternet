<?php
	
	/*
	*	$d = representa o dia
	*	$m = representa o mes
	*	$a = representa o ano
	*/
	function escrever_data($d, $m, $a) {
 	
	 	$meses = array("", "janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro");

		echo("$d de $meses[$m] de $a");
	}

	echo ("Nascimento do Ramon eh: ");
	escrever_data(21, 1, 2003);

	echo ("<br>");
	
	echo ("Nascimento do Marco eh: ");
	escrever_data(17, 04, 1993);

?>